<?php

namespace App\Http\Controllers;

use App\Models\StaffMember;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Slots;
use Illuminate\Support\Str;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data= Course::all();
            $staff=StaffMember::all();
        return view('front-app.courses',$data,);
        } catch (\Throwable $th) {
            return back()->with('error','Something went wrong');
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>'required|unique:courses,slug',
            'price'=>'required',
        ]);
            $data= new course;
            $data->name=$request->name;
            $url = $request->slug;
            $slug = Str::slug($url, '-'); // Slugify the URL
            $hyphenatedUrl = str_replace(' ', '-', $slug);
            $data->slug = $hyphenatedUrl;
            $data->price=$request->price;
            $data->sale_price=$request->sale_price;
            $data->description=$request->description;
            $data->date_from=$request->date_from;
            $data->date_to=$request->date_to;
            $data->private=$request->private;
            $data->order_number=$request->order_number;
            $data->seats=$request->seats;
            if ($request->hasFile('img')) {
                $image=$request->file('img');
                $imgname=$request->file('img')->getClientOriginalName();
                $img = Str::slug($imgname, '-'); // Slugify the URL
                $imgconcate = str_replace(' ', '-', $img);
                $destinationpath=public_path('assets/courses/');
                $image->move($destinationpath,$imgconcate);
                $data->img=$imgconcate;
            }
            $data->save();
            return redirect(route('all-courses'))->with('success',$data->name.' has been added');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

        try {
            $data= Course::all();
            $staff=StaffMember::all();
        return view('backend_app.courses',compact('data','staff'));
        } catch (\Throwable $th) {
            return back()->with('error','Something went wrong');
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $data=Course::find($id);
            return view('backend_app.edit_course',compact('data'));
        } catch (\Throwable $th) {
            return back()->with('eror','Something went wrong');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        $request->validate([
            'name'=>'required',
            'price'=>'required',
        ]);

        try {
            $data=Course::find($id);
            $data->name=$request->name;
            $url = $request->slug;
            $slug = Str::slug($url, '-'); // Slugify the URL
            $hyphenatedUrl = str_replace(' ', '-', $slug);
            $data->slug = $hyphenatedUrl;
            $data->price=$request->price;
            $data->sale_price=$request->sale_price;
            $data->description=$request->description;
            $data->date_from=$request->date_from;
            $data->date_to=$request->date_to;
            $data->private=$request->private;
            $data->seats=$request->seats;
            $data->order_number=$request->order_number;
            if ($request->hasFile('img')) {
                $image=$request->file('img');
                $imgname=$request->file('img')->getClientOriginalName();
                $img = Str::slug($imgname, '-'); // Slugify the URL
                $imgconcate = str_replace(' ', '-', $img);
                $destinationpath=public_path('assets/courses/');
                $image->move($destinationpath,$imgconcate);
                $data->img=$imgconcate;
            }
            $data->save();
            return redirect(route('all-courses'))->with('success',$data->name.' has been updated');

        } catch (\Throwable $th) {
           return back()->with('error','Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Course::destroy($id);
            return back()->with('success','Your course has been deleted');
        } catch (\Throwable $th) {
           return back()->with('error',$th->getMessage());
        }

    }
    public function Slots($id){
    $data=Course::find($id);
    $slots=Slots::where('course_id',$id)->get();
    return view('backend_app.courses_slots',compact('data','slots'));
    }
    public function AddSlot(Request $request){

        try {
        $data=new Slots;
        $data->course_id=$request->course_id;
        $data->start_time=$request->start_time;
        $data->end_time=$request->end_time;
        $data->location=$request->location;
        $data->staff_id=$request->staff;
        $data->repeats=$request->repeat;
        $data->date=$request->date;



        $data->save();
        return back()->with("success",'New  Class Session has been added');
} catch (\Throwable $th) {
    return back()->with("error","Please fill all the fields");
}
    }
    public function DeleteSlot($id){
        try {
        Slots::destroy($id);
        return back()->with("success",'Slot has been deleted successfully');
            } catch (\Throwable $th) {
                return back()->with("success",$$th->getmessage());
            }
}
public function coursesFilter(Request $request){
    $date = $request->date;
    $time=$request->date;
    $data = Slots::where('date', $date)->orderBy('start_time', 'asc')->get();
return view('backend_app.courses_filter',compact('data','time'));
}
public function coursesSessions(){
    $date = today()->toDateString();
    $time= today()->toDateString();
    $data = Slots::where('date', $date)->orderBy('start_time', 'asc')->get();
return view('backend_app.courses_filter',compact('data','time'));
}
}
