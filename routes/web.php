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
    return view('welcome');
});
//Route::get('/Slogin', ['uses' => 'CouponController@index', 'https' => true]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Coupons', 'CouponController@index')->name('Coupons');
Route::get('/AddCoupon', function () {
    return view('Addcoupon');
});
Route::post('/AddCoupon', 'CouponController@insert');

//Don't allow reg.
   Route::any('/register', function() {
        echo "No URL found";
     });

// Delete a coupon
Route::get('RemoveCoupon/{ID}', 'CouponController@delete');