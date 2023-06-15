<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginprocess(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('dashboard');
        }else{
            return redirect('login')->with('danger','Salah Input Email atau Password');
        }
    }

    public function register(){
        return view('register');
    }

    public function registeruser(Request $request){
        User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' => bcrypt($request->password),
            'remembertoken' => Str::random(60)
        ]);

        return \redirect('/login');
    }
}
