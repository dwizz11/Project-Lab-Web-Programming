<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class Registercontroller extends Controller
{
    public function index(){
        $categories = category::all();
        return view('register',[
            'category' => $categories,
            "title" => "Register"
        ]);
    }


    public function verify(Request $request){

        $messages = [
            "countries.required" => "Please select a country",

        ];


        
        $validate = $request->validate([
            'name' => ['required', 'min:5'],
            'email' => ['required', 'email:dns', 'unique:users,email'],
            'password' => ['required', 'min:8', 'confirmed', 'alpha_num'],
            'password_confirmation' => ['required'],
            'gender' => ['required'],
            'date' => ['required', 'date', 'before:today', 'after:01-01-1900'],
            'country' => ['required']
        ]);

        
        // dd($request->country);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->gender = $request->gender;
        $user->birthdate = $request->date;
        $user->country = $request->country;

        $user->save();

        $cart = new cart();

        $cart->user_id = $user->id;
        $cart->save();


        // if(Auth::attempt($validate)){
        //     $request->session()->regenerate(); 
            
        //     return redirect()->intended('/home')->with('Register Success',$user->name);
        // }

        return redirect('/login')->with('Register-Success',$user->name);
    }
}
