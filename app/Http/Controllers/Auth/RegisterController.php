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
            // 'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
    //     if (Input::hasfile($data['img'])) {
    //         $image = Input::file($data['img']);
    //         $name = $image->getClientOriginalName();
    //         // $size = $image->getClientSize();
    //         $destinationPath = public_path('users/images');
    //         $image->move($destinationPath, $name);
    //          $userImage->img = $name;
    //         // $userImage->size = $size;
    //         dd($userImage);
    //        // $userImage->save;
    // }

    // $image=$Request->file('img');
    //     $input['img']=$image->getClientOriginalName();
    //     $destination=public_path('/users/imagesusers');
    //     $image->move($destination,  $input['img']);
        // $companyInformation->company_image=  $input['img'];

        // if(Input::hasfile($data['img'])){
        //     $image = Input::file($data['avatar']);
        //     $input['img']=$image->getClientOriginalName();
        //     //     $destination=public_path('/users/imagesusers');
        //     //     $image->move($destination,  $input['img']);
        //         // $companyInformation->company_image=  $input['img'];
        // }

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
            'img' => $data['img']
        ]);
    }
}
