<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\general;
use App\Http\Controllers\dashboard;
// Admin Route
    ###########################     Start Login      ########################## 
        Route::get('/admin/login', 'general\LoginController@Admin_View_Login');
        Route::post('/admin/Login', 'general\LoginController@Admin_login')->name('admin.Login');
    ////////////////////////      End Login      //////////////////////// 
    Route::group(['middleware'=>'auth'],function (){ 
        Route::get('/site_data','website@site_data')->name('site_data');
        Route::post('/update_site','website@update_site');
});
    Route::group(['middleware'=>'auth','namespace'=>'dashboard'],function (){ 
   
    ////////////////////////      Start  Admin View     //////////////////////// 
        Route::get('/myplans','mange@view_plan');
        Route::get('/member_profile','mange@view_member_profile')->name('user.profile');
        Route::get('/plan','mange@view_one_plan')->name('plan');
        Route::get('/trainer_profile','mange@view_trainer_profile');
        Route::get('/admin', 'mange@admin');
        Route::get('/dashboard','mange@dashboard')->name('dashboard');
        Route::get('/mytrainers','mange@view_trainer');
        Route::get('/mymembers','mange@view_member');
    ////////////////////////      End Admin  View    //////////////////////// 
        
    ##########################     Start Updatr      ########################## 
                Route::group(['prefix'=>'update'],function (){     
                    Route::post('member','update@update_member')->name('admin.update.member');
                    Route::post('trainer','update@update_trainer');
                    Route::post('myplan','update@update_plan')->name('update.plan');
                    Route::post('admin','update@update1')->name('admin.update.profile');});
    ////////////////////////     End Updatr      //////////////////////// 

    
    ##########################     Start Delete      ########################## 
            Route::group(['prefix'=>'delete'],function (){
                    Route::get('member','delete@delete_member');
                    Route::get('trainer','delete@delete_trainer');});
    ////////////////////////     End Delete      //////////////////////// 

   ##########################     Start Add      ########################## 
        Route::group(['prefix'=>'add'],function (){
            Route::post('/member', 'add@addmember')->name('add/member');
            Route::post('/trainer', 'add@addtrainer')->name('add/traine');
            Route::post('/plan', 'add@addplan'); });
    ////////////////////////     End Add      //////////////////////// 
 });