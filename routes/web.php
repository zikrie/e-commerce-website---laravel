<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/index', function () {
    return view('index');
});


Route::get('/checkout', function () {
    return view('checkout');
});


Route::get('/account_carts', function () {
    return view('account_carts');
});


Route::get('/account_information', function () {
    return view('account_information');
});


Route::get('/account_newsletter', function () {
    return view('account_newsletter');
});


Route::get('/product_single', function () {
    return view('product_single');
});


Route::get('/terms', function () {
    return view('terms');
});


Route::get('/women_shoes', function () {
    return view('women_shoes');
});


Route::get('/women_clothing', function () {
    return view('women_clothing');
});


Route::get('/women_accessories', function () {
    return view('women_accessories');
});


Route::get('/women_bag', function () {
    return view('women_bag');
});


Route::get('/women_beauty', function () {
    return view('women_beauty');
});


Route::get('/men_shoes', function () {
    return view('men_shoes');
});


Route::get('/men_clothing', function () {
    return view('men_clothing');
});


Route::get('/men_accessories', function () {
    return view('men_accessories');
});


Route::get('/men_beg', function () {
    return view('men_beg');
});


Route::get('/men_grooming', function () {
    return view('men_grooming');
});


Route::get('/men_modest', function () {
    return view('men_modest');
});

Route::get('/kid_baby', function () {
    return view('kid_baby');
});

Route::get('/kid_girls', function () {
    return view('kid_girls');
});


Route::get('/kid_boys', function () {
    return view('kid_boys');
});

Route::get('/all_product', function () {
    return view('all_product');
});




Route::post('/faq/submit', 'MessageController@submit');








