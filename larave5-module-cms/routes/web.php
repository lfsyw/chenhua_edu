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

//缩略图上传
Route::post('component/upload/thumb', 'Component\UploadController@thumb');


Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'is.admin','as'=>'admin.'],function(){
    Route::get('/','IndexController@index');
    Route::group(['prefix'=>'common','namespace'=>'Common','as'=>'common.'],function(){
        Route::resource('user', 'UserController',[
            'only'=>['index','edit','update','destroy']
        ]);
        Route::resource('option','OptionController',[
            'except'=>['show']
        ]);
        Route::post('option/updateValue','OptionController@updateValue');
        Route::resource('link','LinkController',[
            'except'=>['show']
        ]);
        Route::resource('ad','AdController');
    });
    Route::group(['prefix'=>'cms','namespace'=>'Cms','as'=>'cms.'],function (){
        Route::resource('category','CategoryController',[
            'except'=>['show']
        ]);
    });
});


Route::get('/home', 'HomeController@index')->name('home');
