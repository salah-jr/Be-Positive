<?php

use Illuminate\Support\Facades\Mail;

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


// Route::get('/login/{social}','Auth\LoginController@socialLogin')
//         ->where('social','twitter|facebook|linkedin|google|github');
// Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')
//         ->where('social','twitter|facebook|linkedin|google|github');

<<<<<<< HEAD

Route::get('/profilee', function () {
    return view('userpages.profilee');
=======
/*Route::get('/', function () {
    return view('userpages.index');
});
*/
Route::get('/profile', function () {
    return view('userpages.profile');
<<<<<<< HEAD
>>>>>>> ca50905e876601731f0991dfd700750f143517e7
=======
>>>>>>> ca50905e876601731f0991dfd700750f143517e7
});

Route::get('/home','HomeController@index');
Route::get('/','HomeController@index');
Route::post('/insert','UserController@store');
Auth::routes();


Route::group(['middleware'=>['admin','auth']],function(){
    Route::get('dashboard', 'admin\AdminController@index');
});

Route::group(['middleware' => ['auth', 'charity']], function()
{
    Route::get('charity', 'charity\CharityController@index');
});

Route::post('/contact','ContactController@store');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
<<<<<<< HEAD
=======



// Route::get('contactus', 'ContactController@contactUS');

Route::post('/contact','ContactController@store');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
>>>>>>> ca50905e876601731f0991dfd700750f143517e7
