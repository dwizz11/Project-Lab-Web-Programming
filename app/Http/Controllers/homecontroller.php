<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class homecontroller extends Controller
{
    public function index(){

        $usercart='';
        if(Auth::check()) $usercart = cart::where('user_id','=',auth()->id())->latest()->first();

        
        $categories = category::all();

        return view('index',[
            'category' => $categories,
            'title' => 'Home',
            'usercart' => $usercart
        ]);

    }

    public function showCategory(category $category){

        $categories = category::all();

        $usercart='';
        if(Auth::check()) $usercart = cart::where('user_id','=',auth()->id())->latest()->first();


        return view('category',[
            'category' => $categories,
            'title' => $category->category_name,
            'currentcategory' => $category->products()->paginate(10),
            'usercart' => $usercart
        ]);
    }

    public function checkHistory(){
        $getcartIdcount = count(DB::table('carts')->where('user_id','=',auth()->id())->latest()->get());

        if($getcartIdcount-1 === 0) return response()->json(array('empty'=> true), 200);
    }

    public function showHistory(){
       

        if(auth()->user()->isadmin == 1) return back()->with('unauthorized', 'Admin dont have permission to history feature');

        $categories = category::all();
        $getcartIdcount = count(cart::where('user_id','=',auth()->id())->latest()->get());


        if($getcartIdcount-1 === 0) return back()->with('nohistory', 'There are no transaction history');

        $usercart='';
        if(Auth::check()) $usercart = cart::where('user_id','=',auth()->id())->latest()->first();


        $getcartID = cart::where('user_id','=',auth()->id())->oldest()->limit($getcartIdcount-1)->get();

        return view('history',[
            'category' => $categories,
            'title' => 'History',
            'usercart' => $usercart,
            'cart' => $getcartID
        ]);
    }
    


    
}
