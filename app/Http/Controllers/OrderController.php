<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderEmail;
use App\Mail\OrderAdmin;
class OrderController extends Controller
{
    public function allOrders(){
        try {
            $data=Order::all();

            return view('backend_app.orders',compact('data'));
        } catch (\Throwable $th) {
            return back()->with('error','Something went wrong');
        }
    }
    public function OrderSubmit(Request $request){

        $request->validate([
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'appartment' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'country' => 'required',
            'state'=>'required',
        ]);


        $expire=$request->expiration_month.'/'.$request->expiration_year;

        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'cache-control' => 'no-cache',
        ];

        $data = [
            'req_username' => env('PAYMENT_USERNAME'), // Access the username from the .env file
            'req_password' => env('PAYMENT_PASSWORD'),
            'amount' => $request->sub_total,
            'request_currency' => 'USD',
            'cust_phone' => $request->phone,
            'transaction_type' => 'CAPTURE',
            'pmt_key' => $request->cvv,
            'pmt_numb' => $request->cardnumber,
            'pmt_expiry' => $expire,
            'bill_addr' => $request->address,
            'bill_addr_city' => $request->city,
            'bill_addr_country' => $request->country,
            'bill_addr_state' => $request->state,
            'bill_addr_zip' => $request->postal_code,
            'cust_email' => $request->email,
            'cust_fname' => $request->first_name,
            'cust_lname' => $request->last_name,
        ];

        $response = Http::post('https://api.paybybankful.com/api/transaction/api',$data);


        $responseData = $response->json();

        $transactionStatus = $responseData['TRANS_STATUS_NAME'];
      // Assuming the response is in JSON format
        if ($transactionStatus==="APPROVED"){

           $user=Auth::user();
           $data= new Order;
           $data->user_id=$user->id;
           $data->first_name=$request->first_name;
           $data->last_name=$request->last_name;
           $data->company_name=$request->company;
           $data->email=$request->email ;
           $data->phone_no=$request->phone;
           $data->address=$request->address;
           $data->appartment=$request->address_2;
           $data->province=$request->state;
           $data->city=$request->city;
           $data->country=$request->country;
           $data->postal_code=$request->postal_code;

           $data->total=$request->sub_total;

           $data->bank_status="paid";
           $data->payment_method="Bankful";
           $data->delivery_status="pending";
           $data->save();

           $cart=Cart::where('user_id',$user->id)->get();

           foreach ($cart as $item) {
            $orderitem=new OrderItem;
            $orderitem->order_id=$data->id;
            $orderitem->product_id=$item->product_id;

            $orderitem->quantity=$item->quantity;
            $orderitem->sub_total=$item->sub_total;
            $orderitem->save();

           }
           mail::to($request->email)->send(new OrderEmail($data,$cart));
           mail::to("sabeelyousaf438@gmail.com")->send(new OrderAdmin($data,$cart));

           Cart::where('user_id',$user->id)->delete();

           return redirect(route('home'))->with('success','Your order has been placed');
        }

        else{
           return back()->with('error','Please Enter Correct Card Details');
        }

    }
    public function updateStatus(Request $request){
        try {
            $data=Order::find($request->id);
            $data->delivery_status=$request->status;
            $data->save();
        return back()->with('success','Your Status has been updated');
        } catch (\Throwable $th) {
          return back()->with('Something went wrong');
        }

    }
    public function deleteOrder($id){
        try {
            $data=Order::find($id);

            OrderItem::where('order_id',$id)->delete();
            Order::destroy($id);
            return back()->with('success','Product has been deleted successfully');
        } catch (\Throwable $th) {
            return back()->with('error',$th->getMessage());

        }
    }
    public function OrderDetail($id){
        try {

            $data=OrderItem::with('products','orders')->where('order_id',$id)->get();

            $order_detail=Order::find($id);
            return view('backend_app.order_detail',compact('data','order_detail'));
        } catch (\Throwable $th) {
            return back()->with('error',$th->getMessage());
        }

    }
    }
