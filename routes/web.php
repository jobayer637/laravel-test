<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::get('/product', 'ProductController@index')->name('product.index');
Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::post('/product/store', 'ProductController@store')->name('product.store');
Route::delete('/product/destroy/{id}', 'ProductController@destroy')->name('product.destroy');


Route::get('/', function () {
   if (Auth::check()) {
      return redirect()->route('dashboard');
   }
   return redirect()->route('login');
});

Auth::routes(['verify'=> true]);