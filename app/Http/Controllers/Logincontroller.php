<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Logincontroller extends Controller
{
    public function index(){
        $categories = category::all();
        
        return view('login',[
            'category' => $categories,
            "title" => "Login"
        ]);
    }


    public function authenticate(Request $request){

        $messages = [
            "email.exists" => "Email doesn't exists",
            "email.email" => "Email must be ended with .com"
        ];


        $credentials =  $request->validate([
            'email' =>  'required|email:dns|exists:users,email',
            'password' => 'required'
        ], $messages);

        $checkRememberme = false;

        if($request->remember === 'on'){
            $checkRememberme = true;
            Cookie::queue('emailcookie',$request->email, 120 );
            Cookie::queue('passwordcookie',$request->password, 120 );
        }

        if(Auth::attempt($credentials)){
            $request->session()->regenerate(); 
            
            if(Cookie::get('emailcookie') == $request->email)  return  redirect()->intended('/home')->with('welcomeback', 'Welcome Back');
            return redirect()->intended('/home')->with('welcome', 'Welcome, ' . auth()->user()->name);
        }
        else{
            $user = User::where('email',$request->email) -> first();
            if(!Hash::check($request->password, $user->password)){
                return back()->with('LoginError', 'Wrong Password');
            }
        }

    }
}
