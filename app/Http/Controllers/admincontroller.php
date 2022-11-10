<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class admincontroller extends Controller
{
    public function index(){
        $category = category::all();

        $products = product::select("*")->orderBy("created_at", "desc")->get();

        return view('manage',[
            'products' => $products,
            'category' => $category,
            'title' => 'Manage Product',

        ]);
    }

    public function addproduct(){


        $category = category::all();

        return view('addproduct',[
            'category' => $category,
            'title' => 'Add New Product',
        ]);
    }


    public function editproduct(product $product){

        $latestcart = DB::table('carts')->where('carts.user_id','=',auth()->id())->latest()->first();

        $cartItems = DB::table('cart_items')
        ->join('carts', 'cart_items.cart_id', '=', 'carts.id')
        ->join('products','cart_items.product_id','=','products.id')
        ->where('carts.user_id' ,'=', auth()->id())
        ->where('carts.id','=',$latestcart->id)->get();


        $category = category::all();

        return view('updateproduct',[
            'category' => $category,
            'title' => 'Update New Product',
            'cartcount' => $cartItems->count(),
            'product' => $product
        ]);
    }

    


   
}
