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

/*Route::get('/', function () {
    return view('userpages.index');
});
*/

Route::get('/','HomeController@index');

Route::get('profile/{id}','UserController@show');

Route::post('/insert','UserController@store');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login/{social}','Auth\LoginController@socialLogin')
        ->where('social','twitter|facebook|linkedin|google|github');
Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')
        ->where('social','twitter|facebook|linkedin|google|github');

Auth::routes();

Route::get('/home',function(){
  return view('loololo');
});

