<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale()], function(){

    Route::get('/','PagesController@home');

    Route::get('/home','PagesController@home');

    Route::get('/about',function(){
        return view('pages.about');
    });
    Route::get('/about_tonirs',function(){
        return view('pages.about_tandoors');
    });

    Route::get('/products','ProductController@index');

    Route::get('/product/{product}','ProductController@showProduct');

    Route::get('/videos','VideoController@index');

    Route::get('/pricelist','ProductController@showPriceList');

    Route::get('/contacts',function(){
        return view('pages.contacts');
    });


    Route::get('/admin','ProductController@indexAdmin')->middleware('auth')->name('product.index');

    Route::get('/admin/product/create','ProductController@create')->middleware('auth')->name('product.create');

    Route::get('/admin/product/edit/{product}','ProductController@edit')->middleware('auth')->name('product.edit');

    Route::post('/admin/product/store','ProductController@store')->middleware('auth')->name('product.store');

    Route::post('/admin/product/update/{product}','ProductController@update')->middleware('auth')->name('product.update');

    Route::delete('/admin/product/destroy/{product}','ProductController@destroy')->middleware('auth')->name('product.destroy');

});

require __DIR__.'/auth.php';
