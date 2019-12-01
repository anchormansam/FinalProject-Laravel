<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login','AuthenticationController@login')->name('login');

Route::middleware('auth:api')->group(function () {
    
    Route::post('/profile', 'ProfileController@create')->name('profile');

    
    Route::get('/logout', 'AuthenticationController@logout')->name('logout');
});

Route::post('/register_new','AuthenticationController@register')->name('register'); 

Route::post('/disc','DiscController@create')->name('createDiscData'); 
Route::get('/disc', 'DiscController@show')->name('disc');


Route::post('/mybagofdiscs', 'MybagofdiscsController@create')->name('createBagofdiscs');
Route::get('/mybagofdiscs', 'MybagofdiscsController@show')->name('showBags');

Route::post('/mybag', 'MybagController@create')->name('createBag');
Route::get('/mybag/{id}', 'MybagController@index')->name('showBag');

Route::get('/brand', 'BrandController@show')->name('brand');

Route::get('/plastic', 'PlasticController@show')->name('plastic'); 
