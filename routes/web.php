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

/*Route::get('/', function () {
    return view('userpages.index');
});
*/
Route::get('/profile', function () {
    return view('userpages.profile');
});


Route::get('/home','HomeController@index');
Route::get('/','HomeController@index');
Route::post('/insert','UserController@store');
Auth::routes();



Route::group(['middleware'=>['admin','auth']],function(){
    Route::get('dashboard', 'admin\AdminController@index');
    Route::get('home', 'MassageController@index');
});

Route::group(['middleware' => ['auth', 'charity']], function()
{
    Route::get('charity', 'charity\CharityController@index');
});


Route::get('sendemail', function () {

    $data = array(
        'name' => 'mo',
    );

    Mail::send('emails.welcome', $data, function ($message) {

        // $message->from('momenadel3030@gmail.com', 'memo');

        // $message->to('momen.adel.abdelhakeem@gmail.com')->subject(' test email');


       $message->from('momen.adel.abdelhakeem@gmail.com', 'memo');

        $message->to('momenadel3030@gmail.com')->subject(' test email');

       
    //     $email='momen.adel.abdelhakeem@gmail.com';
    //     $subject='lllllll';
    //         $message->from($email, 'name');
    //         $message->to('momenadel3030@gmail.com')->subject($subject);
    

    });

    return "Your email has been sent successfully";

});



// Route::get('contactus', 'ContactController@contactUS');

Route::post('/contact','ContactController@store');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
