<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    //////////////// Frontend Website ///////////////////////////////////////////

    Route::get('/home',[HomeController::class,'index'])->name('home');
    Route::get('all-courses',[HomeController::class,'showCourses'])->name('front-courses');
    Route::get('course/{slug}',[HomeController::class,'courseDetail'])->name('course-detail');
    Route::get('shop',[HomeController::class,'Shop'])->name('shop');
    Route::view('about','front-app.about')->name('about');
    Route::view('terms-conditions','front-app.terms_conditions')->name('terms_conditions');
    Route::get('product-detail/{id}',[HomeController::class,'ProductDetail'])->name('product_detail');
    Route::get('brand/{slug}',[HomeController::class,'BrandData'])->name('brand');
    Route::get('category/{slug}',[HomeController::class,'CategoryData'])->name('category');
    Route::get('ammunation',[HomeController::class,'Shop'])->name('ammunation');
    Route::view('services','front-app.services')->name('services');
    Route::get('product/{slug}',[HomeController::class,'ProductDetail'])->name('product_detail');
    Route::get('cart',[CartController::class,'ShowCart'])->name('show_cart')->middleware(['auth', 'verified']);;
    Route::post('add-to-cart',[CartController::class,'AddToCart'])->name('add_to_cart')->middleware(['auth', 'verified']);
    Route::get('delete-item/{id}',[CartController::class,'DeleteItem'])->name('delete-item');
    Route::get('checkout/{id}',[CartController::class,'checkout'])->name('checkout');
    Route::post('order-submit',[OrderController::class,'OrderSubmit'])->name('order-submit');
    Route::get('all-orders',[OrderController::class,'allOrders'])->name('all-orders');
    Route::post('update-order',[OrderController::class,'updateStatus'])->name('update-status');
    Route::get('delete-order/{id}',[OrderController::class,'deleteOrder'])->name('delete-order');
    Route::view('mission','front-app.mission')->name('mission');
    Route::view('contact','front-app.contact')->name('contact');
    Route::view('VTSA-gaming','front-app.gaming')->name('VTSA-gaming');
    Route::get('all-fame',[FameController::class,'index'])->name('all-fame');
    Route::view('custom-gun','front-app.custom_gun')->name('custom-gun');
    Route::get('certificates',[CertificateController::class,'show'])->name('certificates');
    Route::view('/','front-app.landing')->name('landing');
    Route::post('filter-products',[HomeController::class,'filterProducts'])->name('filter-products');
    Route::get('all-blogs',[HomeController::class,'FrontBlogs'])->name('front-blogs');
    Route::get('blog-detail/{slug}',[HomeController::class,'BlogDetail'])->name('detail-blog');
    Route::post('submit-review',[HomeController::class,'SubmitReview'])->name('submit-review')->middleware(['auth', 'verified']);;
    Route::post('product-filter',[HomeController::class,'productFilter'])->name('product-filter');
    Route::get('course-subscription',[SubscriptionController::class,'SubscribeCourse'])->name('course-subscription')->middleware(['auth', 'verified']);;
    Route::post('subscription-payment',[SubscriptionController::class,'SubscriptionPayment'])->name('subscription_payment');
    Route::view('403','front-app.403-page');
    Route::get('track-order',[HomeController::class,'TrackOrder'])->name('track-order');
    Route::post('track-no',[HomeController::class,'TrackNo'])->name('track-no');
    Route::get('date-picker/{slug}',[HomeController::class,'Datepicker'])->name('date-picker');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



/////////////////// backend app  //////////////////////////////////////////


//customer

Route::get('update_profile/{id}',[CustomerController::class,'UpdateProfile'])->name('update-customer');
Route::post('submit-profile',[CustomerController::class,'SubmitProfile'])->name('submit-profile');
Route::get('add-to-fav/{id}',[CustomerController::class,'AddToFav'])->name('add-to-fav')->middleware(['auth', 'verified']);
Route::get('Favorites',[CustomerController::class,'showFavourites'])->name('favourites');
Route::get('delete-Favorites/{id}',[CustomerController::class,'DeleteFavourites'])->name('delete-favourites');
Route::post('Favorites-to-cart',[CustomerController::class,'FavtoCart'])->name("favourite-cart");
Route::get('Favorites-products',[CustomerController::class,'AllFav'])->name("favourite-backend");
Route::get('/customer-dashbaord',[HomeController::class,'CustomerDashboard'])->middleware(['auth', 'verified'])->name('CustomerDashboard');
Route::get('customer-subscriptions',[SubscriptionController::class,'CustomerSubscription'])->name('customer-subscriptions');
Route::get('customer-orders',[CustomerController::class,'Orders'])->name('customer-orders');
Route::get('edit-profile/{id}',[SettingController::class,'editProfile'])->name("edit-profile");
Route::post('update_profile',[SettingController::class,'UpdateProfile'])->name("update-profile");
Route::post('get-certificate',[HomeController::class,'GetCertificate'])->name('get-certificate');
//admin
Route::get('order-detail/{id}',[OrderController::class,'OrderDetail'])->name('order-detail');
Route::get('subscription-detail/{id}',[SubscriptionController::class,'SubscriptionDetail'])->name('subscription-detail');

Route::middleware(['admin'])->group(function () {
Route::get('/dashboard',[HomeController::class,'DashboardData'])->name('dashboard');

//products

Route::get('products',[ProductController::class,'index'])->name('products');
Route::view('add-products','backend_app.addproduct')->name('addproduct');
Route::post('submit-product',[ProductController::class,'store'])->name('submitproduct');
Route::get('edit-product/{id}',[ProductController::class,'edit'])->name('edit-product');
Route::post('update-product/{id}',[ProductController::class,'update'])->name('updateproduct');
Route::get('delete-product/{id}',[ProductController::class,'destroy'])->name('delete-product');
Route::get('show-product',[ProductController::class,'index'])->name('showproduct');
Route::get('delete-img/{id}',[ProductController::class,'ImgDel'])->name('delete-img');
Route::post('/upload', 'UploadController@upload')->name('upload');


//Categoires

Route::get('categories',[CategoryController::class,'index'])->name('show-category');
Route::view('add-category','backend_app.addcategory')->name('add-category');
Route::post('submit-category',[CategoryController::class,'create'])->name('submit-category');
Route::get('edit-category/{id}',[CategoryController::class,'edit'])->name('edit-category');
Route::post('update-category/{id}',[CategoryController::class,'update'])->name('update-category');
Route::get('destroy-category/{id}',[CategoryController::class,'destroy'])->name('destroy-category');

//Brands
Route::get('brands',[BrandController::class,'index'])->name('show-brands');
Route::view('add-brand','backend_app.addbrand')->name('add-brand');
Route::post('submit-brand',[BrandController::class,'store'])->name('submit-brand');
Route::get('edit-brand/{id}',[BrandController::class,'edit'])->name('edit-brand');
Route::post('update-brand/{id}',[BrandController::class,'update'])->name('update-brand');
Route::get('destroy-brand/{id}',[BrandController::class,'destroy'])->name('destroy-brand');
//Orders
Route::view('orders','backend_app.orders')->name('orders');
Route::get('all-orders',[OrderController::class,'allOrders'])->name('all-orders');
// Slider
//Courses
Route::get('courses',[CoursesController::class,'show'])->name('all-courses');
Route::view('add-courses','backend_app.addcourse')->name('add-course');
Route::post('create-course',[CoursesController::class,'create'])->name('create-course');
Route::get('delete-course/{id}',[CoursesController::class,'destroy'])->name('delete-course');
Route::get('edit-course/{id}',[CoursesController::class,'edit'])->name('edit-course');
Route::post('update-course/{id}',[CoursesController::class,'update'])->name('update-course');
Route::get('courses-sessions/{id}',[CoursesController::class,'Slots'])->name('courses-slots');
Route::POST('submit-slots',[CoursesController::class,'AddSlot'])->name('submit-course-slot');
Route::get('delete-slot/{id}',[CoursesController::class,'DeleteSlot'])->name('delete-slot');
Route::get('courses-filter',[CoursesController::class,'coursesFilter'])->name('courses-filter');
Route::get('courses-sessions',[CoursesController::class,'coursesSessions'])->name('courses-sessions');


//Subscriptions
Route::get('all-subscriptions',[SubscriptionController::class,'allSubscripitons'])->name('all-subscriptions');

Route::get('destroy-subscription/{id}',[SubscriptionController::class,'DestroySubscription'])->name('destroy-subscription');




//blogs
Route::get('blogs',[BlogController::class,'showallblogs'])->name('all-blogs');
Route::view('add-blog','backend_app.add_blog')->name('add-blog');
Route::post('submit-blog',[BlogController::class,'addblog'])->name('submit-blog');
Route::get('delete-blog/{id}',[BlogController::class,'destroy'])->name('destroy-blog');
Route::get('edit-blog/{id}',[BlogController::class,'checkblog'])->name('edit-blog');
Route::post('update-blog/{id}',[BlogController::class,'updateblog'])->name('update-blog');

//Stripe
Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe-get', 'stripe')->name('stripe-get');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

// General Setting

Route::get('general_setting',[SettingController::class,'GeneralSetting'])->name("general-setting");
Route::post('update_setting',[SettingController::class,'UpdateSetting'])->name("update-setting");

// Contact Forms

Route::get('contact-forms',[FormController::class,'ContactForm'])->name('contact-forms');
Route::get('delete-form/{id}',[FormController::class,'deleteContact'])->name('delete-form');

//Profile Edit



//all users
Route::get('all-users',[ProfileController::class,'AllUsers'])->name('all-users');
Route::get('user-delete/{id}',[ProfileController::class,'UserDelete'])->name('delete-user');
Route::post('form-submit',[HomeController::class,'FormSubmit'])->name('form-submit');

//Staff members
Route::get('all-staff',[StaffController::class,'index'])->name('all-staff');
Route::get('add-staff',[StaffController::class,'create'])->name('add-staff');
Route::POST('store-staff',[StaffController::class,'store'])->name('store-staff');
Route::get('edit-staff/{id}',[StaffController::class,'edit'])->name('edit-staff');
Route::post('update-staff/{id}',[StaffController::class,'update'])->name('update-staff');
Route::get('delete-staff/{id}',[StaffController::class,'destroy'])->name('delete-staff');

//Hall Of Fame
Route::get('hall-of-fame',[FameController::class,'show'])->name('hall-of-fame');
Route::get('add-member',[FameController::class,'create'])->name('add-fame_member');
Route::post('submit-member',[FameController::class,'store'])->name('submit-fame-member');
Route::post('update-member/{id}',[FameController::class,'update'])->name('update-fame-member');
Route::get('edit-member/{id}',[FameController::class,'edit'])->name('edit-fame-member');
Route::get('delete-member/{id}',[FameController::class,'destroy'])->name('delete-fame-member');

//Certificates

Route::get('all-certificates',[CertificateController::class,'index'])->name('all-certificates');
Route::get('add-certificates',[CertificateController::class,'create'])->name('add-certificates');
Route::post('submit-certificates',[CertificateController::class,'store'])->name('submit-certificates');
Route::post('update-certificates/{id}',[CertificateController::class,'update'])->name('update-certificates');
Route::get('edit-certificates/{id}',[CertificateController::class,'edit'])->name('edit-certificates');
Route::get('delete-certificates/{id}',[CertificateController::class,'destroy'])->name('delete-certificates');
});
