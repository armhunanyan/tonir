<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){

        $products = new Product();

        $all = $products->orderBy('id','DESC')->get();

        return view('pages.home')->with(array('products'=>$all));

    }
}
