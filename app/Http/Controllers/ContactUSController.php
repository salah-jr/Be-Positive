<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use Validator;
use App\ContactUS;
class ContactUSController extends Controller
{
    public function contactUS()
    {
        return view('contactUS');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(Request $request)
    {
        $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'subject' => 'required',
         'message' => 'required'
         ]);
 
         ContactUS::create($request->all());
   
        
    $data = array(
        'name' => $request->input['name'],
        'email' => $request->input['email'],
        'subject' => $request->input['subject'],
        'masseage'=> $request->input['message']
        );
        Mail::send('emails.welcome', $data, function ($message) {

            $message->from('momenadel3030@gmail.com', ' Admin momen ');
    
            $message->to('momen.adel.abdelhakeem@gmail.com')->subject(' test email');
    
    
        //    $message->from('momen.adel.abdelhakeem@gmail.com', 'memo');
    
        //     $message->to('momenadel3030@gmail.com')->subject('Imporatant');
        });
    

    //     Mail::send('emails.welcome',
    //     array(
    //         'name' => $request->get('name'),
    //         'email' => $request->get('email'),
    //         'subject' => $request->get('subject'),
    //         'user_message'=> $request->get('message')
    //     ),function($message)
    //    {
    //     $message->from('momenadel3030@gmail.com','Admin momen');
    //     $message->to('momen.adel.abdelhakeem@gmail.com', 'Admin')->subject('Cloudways Feedback');
    //    });
 
        return back()->with('success', 'Thanks for contacting us!');
    }















}
