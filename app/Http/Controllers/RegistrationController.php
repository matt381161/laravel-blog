<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }
    public function store(){
        $this->validate(request(),[
           'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed'
        ]);
        $password = \Hash::make(request('password'));
        $user = User::create(['name'=>request('name'),'email'=>request('email'),'password'=>$password]);
        auth()->login($user);

        return redirect('/');
    }
}
