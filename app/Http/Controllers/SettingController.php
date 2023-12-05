<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SettingModel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function GeneralSetting(){
        $data=SettingModel::where('id',1)->first();
        return view('backend_app.generalsetting',compact('data'));
    }
    public function UpdateSetting(Request $request){

        $data = SettingModel::where('id', 1)->first();
        $data->email=$request->email;
        $data->address=$request->address;
        $data->phone_no=$request->phone_no;
        $data->footer_tagline=$request->footer_tagline;
        $data->facebook=$request->facebook;
        $data->instagram=$request->instagram;
        $data->twitter=$request->twitter;
        $data->pinterest=$request->pinterest;
        $data->meta_title=$request->meta_title;
        $data->meta_description=$request->meta_description;
        if ($request->hasFile('logo')) {
            $image=$request->file('logo');
            $imgname=$request->file('logo')->getClientOriginalName();

            $destinationpath=public_path('assets/featured_images/');
            $image->move($destinationpath,$imgname);

            $data->logo=$imgname;
        }

        if ($request->hasFile('footer_logo')) {
            $image=$request->file('footer_logo');
            $imgname=$request->file('footer_logo')->getClientOriginalName();
            $destinationpath=public_path('assets/featured_images/');
            $image->move($destinationpath,$imgname);
            $data->footer_logo=$imgname;
        }


        $data->save();

        return back()->with('success', 'Your Setting has been updated');



    }


    public function editProfile($id){
        $data=User::where('id',$id)->first();
        return view('backend_app.edit_profile',compact('data'));
    }

    public function UpdateProfile(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'email',
            'password' => 'required|min:6', // You can adjust the minimum length as needed
            'confirm_password' => 'required|same:password',
        ]);
        try {
            $data = User::where('id', $request->id)->first();
            $data->name=$request->name;
            $data->email=$request->email;
            $data->address=$request->address;
            $data->phone_no=$request->phone_no;
            $data->password=Hash::make($request->password);

            if ($request->hasFile('img')) {
                $image=$request->file('img');
                $imgname=$request->file('img')->getClientOriginalName();

                $destinationpath=public_path('assets/users/');
                $image->move($destinationpath,$imgname);

                $data->img=$imgname;
            }



            $data->save();

            return back()->with('success', 'Your Setting has been updated');
        }

        catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());

        }


    }
}
