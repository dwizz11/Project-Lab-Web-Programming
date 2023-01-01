<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\category;
use App\Models\product;
use App\Models\Transaction;
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
        $getTransactions = count(DB::table('transactions')->where('user_id','=',auth()->id())->get());

        if($getTransactions === 0) return response()->json(array('empty'=> true), 200);
    }

    public function showHistory(){
       


        $categories = category::all();
        $getcartIdcount = count(Transaction::where('user_id','=',auth()->id())->get());


        if($getcartIdcount === 0) return back()->with('nohistory', 'There are no transaction history');

        $usercart='';
        if(Auth::check()) $usercart = cart::where('user_id','=',auth()->id())->latest()->first();


        $getTrasactions = Transaction::where('user_id','=',auth()->id())->get();

        return view('history',[
            'category' => $categories,
            'title' => 'History',
            'usercart' => $usercart,
            'transactions' => $getTrasactions
        ]);
    }
    


    
}
