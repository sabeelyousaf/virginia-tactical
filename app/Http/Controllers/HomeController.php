<?php

namespace App\Http\Controllers;
use App\Models\Favourite;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Brand;
use App\Models\HomeSlider;
use App\Models\Course;
use App\Models\Blog;
use App\Models\Slots;
use App\Models\CourseSubscribe;
use App\Models\Category;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Models\Review;
use App\Models\Form;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index(){
        try {
            $categories=Category::with('subcategories')->get();
            $brands=Brand::all();
            $data=Product::latest()->take(4)->get();
            $latest=Blog::latest()->take(1)->get();
            $featured=Blog::latest()->take(4)->get();

            return view('front-app.index',compact('categories','brands','data','latest','featured'));
        }
        catch (\Throwable $th) {
           return view('front-app.404');
        }

    }

    public function BrandData($slug){

            $databrand=Brand::where('slug',$slug)->first();
            $data=$databrand->Products;

            return view('front-app.shop',compact('data'));


    }

    public function CategoryData($slug){


            $datacategory=Category::where('slug',$slug)->first();
            $data=$datacategory->products;
            $categories=Category::all();
            $brands=Brand::all();

            return view('front-app.shop',compact('data','brands','categories'));
        }


    public function ProductDetail($slug){
        try{
           $data=Product::where('slug',$slug)->first();
            $relatedproducts=$data->categories;
            $reviews=Review::with('user')->where('product_id',$data->id)->get();

            $related = Product::whereHas('categories', function ($query) use ($relatedproducts) {
                $query->whereIn('category_id', $relatedproducts->pluck('id'));
            })->where('id', '!=', $data->id)->take(4)->get();

           return view('front-app.product_detail',compact('data','related','reviews'));
        } catch (\Throwable $th) {
            return back()->with('Something Went Wrong');
        }
    }

    function productFilter(Request $request){
    $query=$request->search_val;

    $results = Product::where('name', 'LIKE', '%' . $query . '%')->get();
    return response()->json(['results' => $results]);
}


public function FormSubmit(Request $request){

    $request->validate([
        'name'=>'required',
        'email'=>'required',
    ]);

       Form::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone_no'=>$request->phone_no,
        'message'=>$request->message,
       ]);


       mail::to($request->email)->send(new SendEmail($request));

       return back()->with('success','You form has been submitted');
    }


    public function Shop(){
        $data=Product::all();
        $categories=Category::with('subcategories')->get();
        $brands=Brand::all();
        return view('front-app.shop',compact('data','categories','brands'));
    }

    public function TrackOrder(){
        return view('front-app.track-order');
    }
public function TrackNo(Request $request)
{
    try {
        $data = Order::where('id', $request->order_id)->first();

        if ($data) {
            return response()->json($data);
        } else {
            return response()->json('No Record Found!');
        }
    } catch (\Exception $e) {
        return response()->json('Error: ' . $e->getMessage());
    }


}
    public function Datepicker($slug){
        $data=Course::where('slug',$slug)->first();
        $slots=Slots::where('course_id',$data->id)->get();
        return view('front-app.date_picker',compact('data','slots'));

    }

    public function showCourses(){
        $private = Course::where('private','yes')->get();
        $courses = Course::where(function ($query) {
            $query->where('private', '=', null)
                  ->orWhere('private', '=', 'no');
        })
        ->orderBy('order_number', 'ASC')
        ->get();
        return view('front-app.courses', compact('courses','private'));

    }
    public function courseDetail($slug){

        $data=Course::where('slug',$slug)->first();
        $slots=Slots::where('course_id',$data->id)->get();

        return view('front-app.course-detail',compact('data','slots'));
    }

    public function filterProducts(Request $request){

            $query = Product::query();
            if ($request->has('categories') && $request->input('categories') !== null) {
                $categories = $request->input('categories');

                $query->whereHas('categories', function ($categoryQuery) use ($categories) {
                    $categoryQuery->whereIn('category_id', $categories);

                });
            }


            if ($request->has('min') && $request->has('max')) {
                $minPrice = max(0, $request->input('min')); // Ensure min is at least 0
                $maxPrice = $request->input('max');
                $query->whereBetween('price', [$minPrice, $maxPrice]);

            }

                if ($request->has('sorting')) {
                    if ($request->input('sorting') === 'low') {
                        $query->orderBy('price', 'asc');
                    } elseif ($request->input('sorting') === 'high') {
                        $query->orderBy('price', 'desc');
                    }
                    elseif($request->input('sorting')==='latest'){
                        $query->latest();

                    }
                }

            $data=$query->get();
           return response()->json($data);
        }

        public function FrontBlogs(Request $request){
            try {
                $data=Blog::paginate(12);
                return view('front-app.blogs',compact('data'));
            }
             catch(\Throwable $th) {
               return back()->with('error','something went wrong');
            }

        }

        public function GetCertificate(Request $request){
            dd($request->input());
        }
        public function BlogDetail($slug){
            try {

                $data=Blog::where('slug',$slug)->first();
                $related=Blog::where('category_id',$data->category_id)->take(3)->get();
                $recent=Blog::latest()->take(5)->get();

                $categories=Category::all();
                return view('front-app.blog_detail',compact('data','categories','related','recent'));
            }
             catch(\Throwable $th) {
               return back()->with('error','something went wrong');
            }

        }

        public function SubmitReview(Request $request){
            try {
                $user=Auth::user();
                $data=new Review;
                $data->user_id=$user->id;
                $data->product_id=$request->product_id;
                $data->rating=$request->rate;
                $data->review_text=$request->review_text;
                $data->save();
                return back()->with('success','Your review has been added');
            } catch (\Throwable $th) {
                return back()->with('error','Something went wrong');

            }
        }
        public function DashboardData(){

            $products=Product::all()->count();
            $users=User::all()->count();
            $orders = Order::where('delivery_status', 'delivered')->count();
            $pendingOrders = Order::where('delivery_status', 'pending')->count();

            if ($pendingOrders > 0) {
                $percentageDelivered = ($orders / $pendingOrders) * 100;
            } else {
                $percentageDelivered = 0; // Avoid division by zero
            }

            // Format the result
            $percentageDelivered = number_format($percentageDelivered, 2);

            $allorders=Order::all()->count();
            $startDate = now()->startOfMonth(); // Start of the current month
        $endDate = now()->endOfMonth();     // End of the current month

        $monthearning = Order::whereBetween('created_at', [$startDate, $endDate])
            ->sum('total');

            $currentMonthEarnings = Order::whereBetween('created_at', [$startDate, $endDate])
            ->sum('total');

        // Calculate the total earnings for the previous month
        $previousMonthStartDate = $startDate->subMonth();
        $previousMonthEndDate = $endDate->subMonth();
        $previousMonthEarnings = Order::whereBetween('created_at', [$previousMonthStartDate, $previousMonthEndDate])
            ->sum('total');

        // Calculate the percentage increase
        $percentageIncrease = 0;

        if ($previousMonthEarnings > 0) {
            $percentageIncrease = (($currentMonthEarnings - $previousMonthEarnings) / $previousMonthEarnings) * 100;
        }

        // Format the results
        $currentMonthEarnings = number_format($currentMonthEarnings, 2);
        $percentageIncrease = number_format($percentageIncrease, 2);

        $overallsum=Order::sum('total');
        $ordersdata=Order::all();


            $categories=Brand::all()->count();
            return view('backend_app.index', compact('products','users','orders','categories','allorders','monthearning','currentMonthEarnings','percentageIncrease','pendingOrders','percentageDelivered','overallsum','ordersdata'));

        }

        public function CustomerDashboard(){
            $user=Auth::user();
            $orders=Order::where('id',$user->id)->get()->count();
            $subscription=CourseSubscribe::where('user_id',$user->id)->get()->count();
            $fav = Favourite::where('user_id',$user->id)->get()->count();
            $cart = Cart::where('user_id',$user->id)->get()->count();
            return view('backend_app.customer_dashboard', compact('orders','subscription','fav','cart'));
        }

}
