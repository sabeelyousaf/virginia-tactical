<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Product::latest()->paginate(31);

        return view('backend_app.products',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'name'=>'required',
            'slug'=>'required|unique:products,slug',
            'price'=>'required',
        ]);



            $data= new Product;
            $data->name=$request->name;
            $url = $request->slug;
            $slug = Str::slug($url, '-'); // Slugify the URL
            $hyphenatedUrl = str_replace(' ', '-', $slug);
            $data->slug = $hyphenatedUrl;
            $data->stock=$request->stock;
            $data->price=$request->price;
            $data->sale_price=$request->sale_price;
            $data->description=$request->description;
            $data->excerpt=$request->excerpt;

            if ($request->hasFile('img')) {
                $image=$request->file('img');
                $imgname=$request->file('img')->getClientOriginalName();

                $destinationpath=public_path('assets/featured_images/');
                $image->move($destinationpath,$imgname);

                $data->img=$imgname;

            }

            $data->save();

            if ($request->hasFile('images')) {
                $images = [];

                foreach ($request->file('images') as $image) {
                    if ($image->isValid()) {
                        $imageName = time() . '_' . $image->getClientOriginalName();

                                $image->move('assets/product_gallery/', $imageName);
                        $images[] = [
                            'image' => $imageName,
                            'product_id' => $data->id,

                            // You can add more fields here like title, description, etc.
                        ];

                    }
                }
                ProductImage::insert($images);



            }
            $data->categories()->attach($request->categories);
            $data->brands()->attach($request->brands);
            return back()->with('success','New Product has been added');


        }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data=Product::with('images')->findOrFail($id);
        return view('backend_app.edit_product',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>'required',
            'price'=>'required',
        ]);

        try {
            $data= Product::find($id);
            $data->name=$request->name;
            $url = $request->slug;
            $slug = Str::slug($url, '-'); // Slugify the URL
            $hyphenatedUrl = str_replace(' ', '-', $slug);
            $data->slug = $hyphenatedUrl;
            $data->stock=$request->stock;
            $data->price=$request->price;
            $data->sale_price=$request->sale_price;
            $data->description=$request->description;
            $data->excerpt=$request->excerpt;

            if ($request->hasFile('img')) {
                $image=$request->file('img');
                $imgname=$request->file('img')->getClientOriginalName();

                $destinationpath=public_path('assets/featured_images/');
                $image->move($destinationpath,$imgname);

                $data->img=$imgname;

            }

            $data->save();

            if ($request->hasFile('images')) {
                $images = [];

                foreach ($request->file('images') as $image) {
                    if ($image->isValid()) {
                        $imageName = time() . '_' . $image->getClientOriginalName();

                                $image->move('assets/product_gallery/', $imageName);
                        $images[] = [
                            'image' => $imageName,
                            'product_id' => $data->id,

                            // You can add more fields here like title, description, etc.
                        ];

                    }
                }
                ProductImage::insert($images);



            }
            $data->categories()->sync($request->categories);
            $data->brands()->sync($request->brands);
            return redirect(route('showproduct'))->with('success',$data->name.' has been added');
        } catch (\Throwable $th) {
            return back()->with('error','Something Went Wrong');

        }


        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Product::find($id);
        $data->categories()->detach();
        $data->brands()->detach();
        Product::destroy($id);
        return back()->with('success', $data->name.' has been deleted');
    }

    public function ImgDel($id){

        ProductImage::destroy($id);

        return back()->with('success','Gallery Image has been deleted');
    }
}
