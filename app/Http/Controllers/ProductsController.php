<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderByRaw("FIELD(image,'null') ASC")->orderBy('created_at','DESC')->paginate(9);
        return view('product/browse')->with('products', $products);
    }

    public function search()
    {
        $products = Product::orderByRaw("FIELD(image,'null') ASC")->orderBy('created_at','DESC')->paginate(7);
        return view('product/search')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product/add-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'name' => ['required','max:190'],
           'description' => 'required',
           'image' => ['nullable','max:1999','image'],
            'price' => ['required','numeric','max:99999999999'],
        ]);

        if($request->hasfile('image')){
            //get the file name with the extension(jpg,png,...)
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //get just the filename
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get the file extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //final file name with extension concatenated with date to make it unique
            $fileNameToStore = $fileName.'_' .time(). '.' .$extension;

            //save the image in cover_images folder in storage/public/cover_images
            $path = $request->file('image')->storeAs('public/product-images',$fileNameToStore);


        }else{
            $fileNameToStore = 'null';
        }

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->user_id = auth()->user()->id;
        $product->image = $fileNameToStore;

        $product->save();

        return redirect('product/browse');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('product/view')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
