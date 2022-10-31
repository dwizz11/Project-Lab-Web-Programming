<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class homecontroller extends Controller
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

        return view('index',[
            'category' => $categories,
            'title' => 'Home',
            'cartcount' => $cartItems->count()
        ]);

    }

    public function showCategory(category $category){

        $categories = category::all();

        // dd($category->products);
        $cartItems = product::all();
        if(Auth::check()){
            $latestcart = DB::table('carts')->where('carts.user_id','=',auth()->id())->latest()->first();

            $cartItems = DB::table('cart_items')
            ->join('carts', 'cart_items.cart_id', '=', 'carts.id')
            ->join('products','cart_items.product_id','=','products.id')
            ->where('carts.user_id' ,'=', auth()->id())
            ->where('carts.id','=',$latestcart->id)->get();
        }

        $items =  DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->where('products.category_id', '=', $category->id)
        ->paginate(10);

        // dd($items);
        return view('category',[
            'category' => $categories,
            'title' => $category->category_name,
            'currentcategory' => $category->category_slug,
            'category_items' => $items,
            'cartcount' => $cartItems->count()
        ]);
    }

    public function checkHistory(){
        $getcartIdcount = count(DB::table('carts')->where('user_id','=',auth()->id())->latest()->get());


        // dd($getcartIdcount);
        if($getcartIdcount-1 === 0) return response()->json(array('empty'=> true), 200);
    }

    public function showHistory(){
       

        if(auth()->user()->isadmin == 1) return back()->with('unauthorized', 'Admin dont have permission to history feature');

        $categories = category::all();
        $getcartIdcount = count(DB::table('carts')->where('user_id','=',auth()->id())->latest()->get());


        // dd($getcartIdcount);
        if($getcartIdcount-1 === 0) return back()->with('nohistory', 'There are no transaction history');

        $cartItems = product::all();
        if(Auth::check()){
            $latestcart = DB::table('carts')->where('carts.user_id','=',auth()->id())->latest()->first();

            $cartItems = DB::table('cart_items')
            ->join('carts', 'cart_items.cart_id', '=', 'carts.id')
            ->join('products','cart_items.product_id','=','products.id')
            ->where('carts.user_id' ,'=', auth()->id())
            ->where('carts.id','=',$latestcart->id)->get();
        }


        $getcartIdcount = count(DB::table('carts')->where('user_id','=',auth()->id())->oldest()->get());

        $getcartID = DB::table('carts')->where('user_id','=',auth()->id())->oldest()->limit($getcartIdcount-1)->get();
        // dd(count($getcartID));
        

        // dd($getcartID);
        // dd('ada transaksi');
        $historycarts = array($getcartIdcount-1);
        $historydates = array($getcartIdcount-1);
        $totalprice = array($getcartIdcount-1);

        $totalquantity = array($getcartIdcount-1);

        for ($i=0; $i < $getcartIdcount-1; $i++) { 
            $totalprice[$i] = 0;
            $totalquantity[$i] = 0;
        }
        $i = 0;
       foreach ($getcartID as $item) {
        $historycarts[$i] = DB::table('cart_items')
        ->join('carts', 'cart_items.cart_id', '=', 'carts.id')
        ->join('products','cart_items.product_id','=','products.id')
        ->select('carts.updated_at as transdate', 'products.productname as productname', 'quantity', 'products.price as productprice')
        ->where('carts.user_id' ,'=', auth()->id())
        ->where('carts.id','=',$item->id)->get();

        $temp = cart::select('*')
        ->where('carts.user_id' ,'=', auth()->id())
        ->where('carts.id','=',$item->id)->get();

        // dd($temp);
            $historydates[$i] = $temp[0]['updated_at'];

       

        foreach ($historycarts[$i] as $price) {
            $totalprice[$i] += ($price->productprice*$price->quantity);
            $totalquantity[$i] += $price->quantity;
        }
        $i++;
       }

 
        // dd($historycarts);
        return view('history',[
            'category' => $categories,
            'title' => 'History',
            'cartcount' => $cartItems->count(),
            'historycarts' => $historycarts,
            'historydates' =>$historydates,
            'totalprice' => $totalprice,
            'totalquantity' => $totalquantity
        ]);
    }
    


    
}
