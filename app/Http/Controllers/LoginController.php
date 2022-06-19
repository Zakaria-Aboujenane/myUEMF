<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
//        $this->middleware('guest');
//        $this->middleware('auth');
    }

    public function gotoLogin(){
        return view('loginuemf');
    }
    public function login(Request $request){
        $formFields = $request->validate([
            'email'   => ['required','email'],
            'password' => 'required'
        ]);
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/posts')->with('message','Logged in ');
        }

        return back()->withInput($request->only('email', 'remember'))
            ->withErrors(['email'=>'invalid email or password'])->onlyInput('email');

    }

}
