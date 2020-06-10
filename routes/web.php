<?php
use App\Http\Middleware\Admin;

Route::get('/','index\IndexController@index');
Route::get('/b2b/register','b2b\BusniessController@registerview');

Auth::routes(['verify' => true]);

Route::get('/auth/facebook', 'Social\FacebookLoginController@redirectToFacebook');
Route::get('/auth/facebook/callback', 'Social\FacebookLoginController@callbackToFacebook');
Route::get('/auth/google', 'Social\GoogleLoginController@redirectToGoogle');
Route::get('/auth/google/callback', 'Social\GoogleLoginController@callbackToGoogle');
Route::get('/auth/twitter', 'Social\TwitterLoginController@redirectToTwitter');
Route::get('/auth/twitter/callback', 'Social\TwitterLoginController@callbackToTwitter');
// Password reset routes
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::get('/terms', 'index\IndexController@terms');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['middleware' => 'business'], function () {
    Route::get('/business', 'b2b\BusniessController@permisionview')->name('business');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', 'admin\AdminController@index')->name('admin');
    Route::get('/add-new-product', 'Product\ProductController@product');
    Route::post('/addproduct','Product\ProductController@addProduct');
    Route::get('/show-all-product','Product\ProductController@showAllProduct');
    Route::get('/openModal/{id}','Product\ProductController@openModal');
    Route::post('/edit','Product\ProductController@editProduct');
    Route::get('/delete/{id}','Product\ProductController@deleteProduct');
});


