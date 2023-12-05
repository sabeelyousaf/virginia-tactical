<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
class CartController extends Controller
{
    public function ShowCart(){
        try {

            $Auth=Auth::user();

        $data=Cart::with('products', 'user')->where('user_id',$Auth->id)->get();

        return view('front-app.add_to_cart',compact('data'));
        } catch (\Throwable $th) {
            return back()->with('error',$th->getMessage());
        }

    }
    public function AddToCart(Request $request){
        try {

            
            if (Cart::where('product_id',$request->id)->first()) {
                return back()->with('error','Your item has been already added in the cart');
            }

            $Auth=Auth::user();
            $data=new Cart;
            $data->product_id=$request->id;
            $data->user_id=$Auth->id;
            $data->quantity=$request->quantity;
            $sub_total = $request->price * $request->quantity;

            $data->sub_total=$sub_total;
            $data->save();
            return back()->with('success','Your item has been added in the cart');
        } catch (\Throwable $th) {
            return back()->with('error',$th->getMessage());
        }


    }
    public function DeleteItem($id){
        try {
            Cart::destroy($id);
            return back()->with('success','You item has been removed from the cart');
        } catch (\Throwable $th) {
            return back()->with('success',$th->getMessage());
        }
    }
    public function Checkout($id){

        $data=Cart::where('user_id',$id)->get();

        return view('front-app.checkout',compact('data'));
    }
}
