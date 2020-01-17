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

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\MyNameController;

Route::get('/','HomePage@HomePageView');

Route::get('rashel',function(){
    return view('rashel');
   // echo "RASHEL AHMED ADNAN";
});

Route::get('teacher',function(){
    return view('teacher');
});

Route::get('about','AboutController@ViewAboutFile');

Route::get('contact_us','ContactUsController@ContactUsfromm');

Route::get('blog','BlogController@BlogView');

route::get('mynamepageeig','MyNameController@MykhanControlView');

Route::get('postview','PostController@index');

Route::get('postview/create','PostController@create');

Route::get('postview/store','PostController@store');

Route::get('postview/edit','PostController@edit');

Route::get('postview/update','PostController@update');

//AGAIN CRUD

Route::get('tableview','AgainCrudController@view');

Route::get('tableview/create','AgainCrudController@create');

Route::post('tableview/store','AgainCrudController@store');

Route::get('tableview/edit/{id}','AgainCrudController@edit');

Route::put('tableview/update/{id}','AgainCrudController@update');

Route::delete('tableview/delete/{id}','AgainCrudController@delete');




