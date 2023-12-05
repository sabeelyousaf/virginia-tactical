<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\Course;
use App\Models\CourseSubscribe;
use Illuminate\Support\Facades\Mail;
use App\Mail\Subscribe;
use App\Mail\SubscribeAdmin;

class SubscriptionController extends Controller
{

    public function allSubscripitons(Request $request){
        $data=CourseSubscribe::with('users','courses')->latest()->get();
        return view('backend_app.all_subscriptions',compact('data'));
    }
    public function SubscribeCourse(Request $request){

        try {

            $seat=CourseSubscribe::where('date',$request->date)->get()->count();


            if($request->seats > $request->remaining_seats){
                return back()->with('error','Not enough seats are available');
            }

            $start_time = $request->start_time;
            $date_new = $request->date;
            $course=Course::where('id',$request->course_id)->first();
            if($seat === "0"){
                return back()->with('error','There are no seats available in this slot');
            }

            $currentdate=today();
            $formattedDate = date("Y-m-d", strtotime($date_new));
            $date=$formattedDate;

            if($date_new < $currentdate){
                return back()->with('error', 'Course has been expired');
            }
            $end_time = $request->end_time;
            $seat=$request->seats;
            $repeat=$request->repeat;

        return view('front-app.course_subscription',compact('start_time','end_time','course','date','seat','repeat'));
        //code...
    } catch (\Throwable $th) {
        return back()->with('error','Something went wrong');
    }

    }

    public function SubscriptionDetail($id){

        try {

            $data=CourseSubscribe::with('users','courses')->where('id',$id)->first();
            return view('backend_app.subscription_detail',compact('data'));
        } catch (\Throwable $th) {
            return back()->with('error',$th->getMessage());
        }

    }



    public function SubscriptionPayment(Request $request){


        $alldata=$request->input();
        $request->validate([
            'name'=>'required',
            'country'=>'required',
            'address'=>'required',
            'city'=>'required',
            'postal_code'=>'required',
            'phone'=>'required',
            'email'=>'required',
        ]);
            $user=Auth::user();
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
            'cust_fname' => $request->name,
            'cust_lname' => $request->last_name,
        ];

        $response = Http::post('https://api.paybybankful.com/api/transaction/api',$data);


        $responseData = $response->json();

        $transactionStatus = $responseData['TRANS_STATUS_NAME'];
      // Assuming the response is in JSON format
        if ($transactionStatus==="APPROVED"){
            $seats = (int)$request->seats;

            for ($i = 0; $i < $seats; $i++) {
               $val= new CourseSubscribe;
               $val->user_id=$user->id;
               $val->course_id=$request->course_id;
               $val->start_time=$request->start_time;
               $val->end_time=$request->end_time;
               $val->date=$request->date;
               $val->paid=$request->sub_total;
               $val->first_name=$request->name;
               $val->last_name=$request->last_name;
               $val->company_name=$request->company;
               $val->email=$request->email ;
               $val->phone_no=$request->phone;
               $val->address=$request->address;
               $val->appartment=$request->address_2;
               $val->province=$request->state;
               $val->city=$request->city;
               $val->country=$request->country;
               $val->postal_code=$request->postal_code;
               $val->total=$request->sub_total;
               $val->bank_status="paid";
               $val->payment_method="Bankful";
               $val->delivery_status="pending";
               $val->seats=$request->seats;
               $val->save();
                }
               $course_name=Course::where('id',$request->course_id)->first();
               mail::to($request->email)->send(new Subscribe($alldata,$course_name));

               mail::to("sabeelyousaf438@gmail.com")->send(new SubscribeAdmin($alldata,$course_name));

               return redirect(route('home'))->with('success','Your course has been Subscribed');
            }else{
               return back()->with('error','Please Enter Correct Card Details');

            }


    }
    public function DestroySubscription($id){
        try {
            CourseSubscribe::destroy($id);
            return back()->with('success','you have successfully deleted the record');
        } catch (\Throwable $th) {
            return back()->with('error',$th->getMessage());

        }
    }

    public function CustomerSubscription(){
        try {
           $user =Auth::user();
           $data=CourseSubscribe::where('user_id',$user->id)->get();
           return view('backend_app.all_subscriptions',compact('data'));
        } catch (\Throwable $th) {
            return back()->with('error',$th->getMessage());

        }
    }

}
