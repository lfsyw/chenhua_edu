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

//Auth::routes();

$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->get('logout', 'Auth\LoginController@logout')->middleware('is.admin')->name('logout');


Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'is.admin'],function(){
    Route::get('/','IndexController@index');
    Route::resource('user', 'Common\UserController',[
        'only'=>['index','edit','update','destroy']
    ]);
    Route::resource('option','Common\OptionController');
    Route::post('option/updateValue','Common\OptionController@updateValue');
});


Route::get('/home', 'HomeController@index')->name('home');
