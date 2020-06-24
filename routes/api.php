<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

    Route::group(['middleware' => 'checkpasswoed'],function ($router) {  
    
    Route::group(['namespace' => 'api'],function ($router) {
        
        Route::post('main', 'site@index')->name('main');    //rout return all website data 
//          result 
//             {
//              "status": true,
//              "errNum": "S000",
//              "msg": "success",
//                 "Web_data": {
//                          "id": 1,
//                          "facebook": "www.facebook.com",
//                          "twitter": "www.twitter.com",
//                          "youtube": "www.youtube.com",
//                          "site_phone": "01025381843",
//                          "site_url": "www.hulk.com",
//                          "email": "m7mda3yad@gmail.com",
//                          "site_name": "Hulk"
//              }
//            }
    Route::group(['middleware' => 'auth:api'],function ($router) {
    
});
});
});

        ////    this a simple From api route 