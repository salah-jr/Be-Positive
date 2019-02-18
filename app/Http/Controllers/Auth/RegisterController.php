<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this c/ontroller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
     {    
        if(Input::hasfile($data['image'])){
            //Get file name with extension
            $fileNameWithExt =  Input::file('image')->getClientOriginalName();

            //Get file name without extension
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            
            //Get file extension
            $extension = Input::file('image')->getClientOriginalExtension();

            //Create new file name 

            $fileNameToStore = $fileName.'_'.time().'.'.$extension;   
            
            //Store to Database as path
            $imagePath = Input::file('image')->storeAs('public/storage/users_image', $fileNameToStore);
        }           
        return User::create([
            'name'=> $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'blood_type' => $data['blood_type'],
            'phone' => $data['phone'],
            'city' => $data['city'],
            'gender' => $data['gender'],
            'birthdate' => $data['birthdate'],
            'img' => $fileNameToStore
        ]);
       
    }
}
