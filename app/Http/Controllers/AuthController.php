<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        if(auth()->user()){
            return redirect(route('addnews.index'));
        }   
        return view('auth.login');
    }

    public function login(Request $request){
        // dd($request);
        

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt($request->only(['email', 'password']))){
            return redirect(route('addnews.index'));
        }

        return redirect()->back()->withErrors('email' , 'Invalid!');

    }

    public function logout(){
        auth()->logout();
        return view('auth.login');
    }

}
