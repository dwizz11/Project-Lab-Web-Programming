<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class usercontroller extends Controller
{
    public function index(){
        $cartItems = product::all();
        if(Auth::check()){
            $latestcart = DB::table('carts')->where('carts.user_id','=',auth()->id())->latest()->first();

            $cartItems = DB::table('cart_items')
            ->join('carts', 'cart_items.cart_id', '=', 'carts.id')
            ->join('products','cart_items.product_id','=','products.id')
            ->where('carts.user_id' ,'=', auth()->id())
            ->where('carts.id','=',$latestcart->id)->get();
        }
        
        $categories = category::all();

        $user = User::find(auth()->id());
        return view('profile',[
            'category' => $categories,
            'title' => 'Profile',
            'cartcount' => $cartItems->count(),
            'user' => $user
        ]);
    }
}
