<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = new Product();

        $bowls  = DB::table('bowls')->get();

        $vases  = DB::table('vases')->get();

        $all = $products->orderBy('id','DESC')->get();

        return view('pages.products')->with(array('products'=>$all,'bowls'=>$bowls,'vases'=>$vases));
    }
    public function indexAdmin(){

        $products = Product::orderBy('id','desc')->get();

        return view('admin.products.index')->with('products',$products);

    }

    public function showProduct($id){

        $product = Product::where('id','=',$id)->first();

        return view('pages.product')->with(array('product'=>$product));

    }
    public function showPriceList(){
        
        $products = new Product();

        $all = $products->orderBy('id','DESC')->get();

        return view('pages.pricelist')->with(array('tonirs'=>$all));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();

        $product->am = $request->input('am');

        $product->ru = $request->input('ru');

        $product->en = $request->input('en');

        $product->type = $request->input('type');

        $product->weight = $request->input('weight');

        $product->width = $request->input('width');

        $product->height = $request->input('height');

        $product->neck = $request->input('neck');

        $product->usingspace = $request->input('usingspace');

        $product->energy = $request->input('energy');

        $product->ability = $request->input('ability');

        $product->has1 = $request->input('has1');

        $product->price = $request->input('price');

        $product->price1 = $request->input('price1');

        $product->price3 = $request->input('price3');

        $product->kahkal_price = $request->input('kahkal_price');

        $product->gril_kahkal_price = $request->input('gril_kahkal_price');

        if($request->hasFile('thumb')){

            $thumb = Storage::disk('public')->putFile('images/tonirs', $request->file('thumb'));

            $product->thumb = $thumb; 

        }

        if($request->hasFile('images')){

            $images_arr = array();

            foreach($request->file('images') as $file){

                $image_url = Storage::disk('public')->putFile('images/tonirs', $file);

                array_push($images_arr,$image_url);
                
            }

            $product->images = implode(',',$images_arr); 

        }

        $product->save();

        return redirect()->route('product.index')->with('success','true');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->am = $request->input('am');

        $product->ru = $request->input('ru');

        $product->en = $request->input('en');

        $product->type = $request->input('type');

        $product->weight = $request->input('weight');

        $product->width = $request->input('width');

        $product->height = $request->input('height');

        $product->neck = $request->input('neck');

        $product->usingspace = $request->input('usingspace');

        $product->energy = $request->input('energy');

        $product->ability = $request->input('ability');

        $product->has1 = $request->input('has1');

        $product->price = $request->input('price');

        $product->price1 = $request->input('price1');

        $product->price3 = $request->input('price3');

        $product->kahkal_price = $request->input('kahkal_price');

        $product->gril_kahkal_price = $request->input('gril_kahkal_price');

        if($request->hasFile('thumb')){

            $thumb = Storage::disk('public')->putFile('images/tonirs', $request->file('thumb'));

            $product->thumb = $thumb; 

        }

        if($request->hasFile('images')){

            $images_arr = array();

            foreach($request->file('images') as $file){

                $image_url = Storage::disk('public')->putFile('images/tonirs', $file);

                array_push($images_arr,$image_url);
                
            }

            $product->images = implode(',',$images_arr); 

        }

        $product->save();

        return redirect()->route('product.index')->with('success','true');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    }
}
