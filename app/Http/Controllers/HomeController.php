<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $user = User::get();
        return view('home',['User' => $user]);
    }

    public function delete()
    {
       User::where('id',auth()->user()->id)->delete();
       return  redirect()->to('/login');
    }

    public function edit()
    {
        $user =User::where('id',auth()->user()->id)->first();
       return  view('/edit')->with('val',$user);
    }

    public function update(Request $data)
    {
        
        $user = User::where("id",auth()->user()->id)->update([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phonenumber' => $data['phonenumber'],
            'gender' => $data['gender'],
            'age' => $data['age'],
            'birthdate' => $data['birthdate'],
            'bio' => $data['bio'],
            'email' => $data['email'],
        ]);
       return  redirect('home');
    }
}
