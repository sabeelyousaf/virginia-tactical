<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Favourite;
use App\Models\Cart;
use App\Models\Order;

class CustomerController extends Controller
{
    public function UpdateProfile($id){
        try {

            $data=User::find($id);
        return view('backend_app.customer.profile',compact('data'));
        } catch (\Throwable $th) {
         return back()->with('Something went wrong');
        }

    }
    public function SubmitProfile(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password' => 'required|min:6', // You can adjust the minimum length as needed
            'confirm_password' => 'required|same:password',
        ]);

            $data=User::find($request->id);
            $data->name=$request->name;
            $data->email=$request->email;
            $data->password=hash::make($request->password);
            $data->save();
            return back()->with('success','your setting has been updated');
    }

    public function AddToFav($id){

        try {

            $user = Auth::user();
            $existingFavorite = Favourite::where('user_id', $user->id)
            ->where('product_id', $id)
            ->first();

        if ($existingFavorite) {
            Favourite::destroy($existingFavorite->id);
            return back()->with('error', 'Product removed from the favorities');
        }
            $data= new Favourite;
            $data->user_id=$user->id;
            $data->product_id=$id;
            $data->save();

            return back()->with('success','Your product has been added to Favorites');

        } catch (\Throwable $th) {
            return back()->with('success',$th->getMessage());

        }

    }

    public function Orders(){
        $user=Auth::user();
        $data=Order::where('user_id',$user->id)->get();
        return view('backend_app.orders',compact('data'));
    }

    public function showFavourites(){
       try {
        $user=Auth::user();
        $data=Favourite::where('user_id',$user->id)->get();
        return view('front-app.favourites',compact('data'));
       } catch (\Throwable $th) {
        return back()->with('error',$th->getMessage());
       }
    }
    public function DeleteFavourites($id){
        try {
            Favourite::destroy($id);
        return back()->with('success','Product has been removed from Favorites');
        } catch (\Throwable $th) {
            return back()->with('error',$th->getMessage());

        }

    }
    public function FavtoCart(Request $request){
        try {
            $user=Auth::user();
            $data=new Cart;
            $data->product_id=$request->product_id;
            $data->user_id=$user->id;
            $data->quantity=$request->quantity;
            $data->save();
            Favourite::destroy($request->id);
        return back()->with('success','Product has been moved to cart');
        } catch (\Throwable $th) {
            return back()->with('error',$th->getMessage());

        }
    }

    public function AllFav(){
        try {
            $user=Auth::user();
            $data=Favourite::where('user_id',$user->id)->get();
            return view('backend_app.favourite',compact('data'));
        } catch (\Throwable $th) {
            return back()->with('error',$th->getMessage());
        }
    }
}
