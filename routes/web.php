<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
   return view('home') ;
});

Route::get('about', function () {
    $about="this is a About Page";
    $about2="this is a About Page 2";
    return view('about',['about'=>$about,"about2"=>$about2 ]);
})->name('a');

Route::get('contact', function () {
    return view('contact');
});

Route::get('users/{id}', function ($id) {
    return $id;
})->name('c');

// Route::get('home', function () {
//     return "<a href='" . route('c', 1) . "'>About</a>";
// });



Route::group(["prefix" => "customer"], function () {
    Route::get('/', function () {
        return "<h1>Customer</h1>";
    });
    Route::get('create', function () {
        return "<h1>Customer Create</h1>";
    });
    Route::get('show', function () {
        return "<h1>Customer Show</h1>";
    });
});



Route::fallback(function () {
    return "<h1>Route Does not Exist </h1>";
});
