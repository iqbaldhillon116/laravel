<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/contact', function() {
return "this is contact page";
});

Route::get('/posts/{id}/{name}', function($id,$name) {
return "you are on post no. $id Mr. $name";
});

//how to give url a name i.e. making longer url short

Route::get('admin/post/example',array('as'=>'admin.home',function(){
    $url=route('admin.home');
    return "your url is $url";
}));

//Route::get('/apnacontroller','\App\Http\Controllers\CrudController@index');

Route::resource('/CrudCreate/{id}','\App\Http\Controllers\CrudController');


