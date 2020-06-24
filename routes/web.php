<?php 
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Check;
use App\Http\Controllers\general\LoginController ;
use App\Http\Controllers;
Route::post('/Login', 'general\LoginController@login')->name('Login');
//Route::group(['middleware'=>'throttle:5,1'],function(){});
            Route::get('/home','website@home');
            Route::get('/','website@home');
            Route::post('/home','website@home');
            Route::get('/aboutUs','website@aboutUs');
            Route::get('update/site','website@site_data');
            Route::get('/gallery','website@gallery');
            Route::get('/contact','website@contact');
            Route::post('/contact','website@contact2');
            Route::post('/profile/feedback','website@feedback');

    Route::group(['middleware'=>'auth:trainer'],function (){

    Route::group(['prefix'=>'trainer'],function (){
        Route::post('/image','trainer@change_image');
        Route::get('/','trainer@trainer2');
        Route::post('/password','trainer@password');
        Route::post('/update','trainer@edit_trainer');     
    });
       Route::post('/attendance','trainer@take_attendance');
        Route::get('/take_attendance','trainer@attendance');
    });

    Route::group(['prefix'=>'profile'],function(){
    Route::get('/','member@member');
    Route::post('/update','member@update')->name('profile.update');
    Route::get('/feedback','member@member');
    Route::post('/image','member@change_image');
    Route::post('/password','member@change_password');
});
 
    Route::post('get/payment', 'PaymentProviderController@getCheckOutId')->name('get.payment');
    Route::post('payment', 'PaymentProviderController@view')->name('payment');

Route::get('/logout', 'Auth\LoginController@logout')->name('auth.logout.post');
  
Auth::routes();
