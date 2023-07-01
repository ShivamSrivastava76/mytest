<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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
   
     */
    protected function validator(array $data)
    {
       
        // $val =  Validator::make($data, [
        //     'firstname' => ['required', 'string', 'max:255', 'min:3'],
        //     'lastname' => ['required', 'string', 'max:255', 'min:3'],
        //     'phonenumber' => ['required', 'integer', 'max:255', 'min:3'],
        //     'gender' => ['required',  'max:255', 'min:3'],
        //     'age' => ['required',  'max:255'],
        //     'birthdate' => ['required', 'date',  'max:255'],
        //     'Bio' => ['required',  'max:255', 'min:3'],//
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     // 'password' => ['required','string', 'min:6', 'confirmed'],
        // ]);

        $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phonenumber' => $data['phonenumber'],
            'gender' => $data['gender'],
            'age' => $data['age'],
            'birthdate' => $data['birthdate'],
            'bio' => $data['bio'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        auth()->login($user);
        return  redirect()->to('/home');
    }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\Models\User
    //  */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'firstname' => $data['firstname'],
    //         'lastname' => $data['lastname'],
    //         'phonenumber' => $data['phonenumber'],
    //         'gender' => $data['gender'],
    //         'age' => $data['age'],
    //         'birthdate' => $data['birthdate'],
    //         'bio' => $data['bio'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
}
