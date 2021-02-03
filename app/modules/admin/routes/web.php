<?php


Config::set('auth.defines','admin');
///////// admin authntication routes/////
Route::group(['namespace'=>'Auth'],function(){
    Route::get('login','AdminAuthController@login');
    Route::post('login','AdminAuthController@doLogin')->name('adminLogin');
});

Route::get('/index','AdminController@index'); 
Route::group(['middleware'=>'auth:admin'],function(){
    
});


