<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except'=>'destroy']);
    }

    public function create(){
        return view('sessions.create');
    }

    public function store(){
        if(auth()->check()){
            return back();
        }
        if(! Auth::attempt(request(['email','password']))){
            return back()->withErrors([
                'message' => request('email'),request('password')
            ]);
        }
        return redirect('/');
    }
    public function destroy(){
        auth()->logout();
        return redirect('/');
    }
}
