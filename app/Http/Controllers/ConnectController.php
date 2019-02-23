<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\FormSubmitted;   
use App\User;
class ConnectController extends Controller
{
    public function connect(){
       
    }
    public function fireEvent($id){
        $user = User::find($id);
        $text = $user->name." Wants to connect with you";
        event(new FormSubmitted($text));
        return redirect('/');
    }
}   
