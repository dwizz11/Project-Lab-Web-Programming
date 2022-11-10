<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\category;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class usercontroller extends Controller
{
    public function index(){
        if(Auth::check()) $usercart = cart::where('user_id','=',auth()->id())->latest()->first();
        
        $categories = category::all();

        $user = User::find(auth()->id());
        return view('profile',[
            'category' => $categories,
            'title' => 'Profile',
            'usercart' => $usercart,
            'user' => $user
        ]);
    }
}
