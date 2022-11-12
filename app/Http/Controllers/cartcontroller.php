<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\cart_items;
use App\Models\category;
use App\Models\product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cartcontroller extends Controller
{
    public function addtoCart(Request $request){

       $validate = $request->validate([
            'quantity' => ['required']
        ]);

        

       $getCartId = DB::table('carts')->select('id')->where('user_id','=', auth()->id())->latest()->first();

       $checkitemifexist = cart_items::where('cart_id', '=', $getCartId->id)->where('product_id','=',$request->id)->first();

       if($checkitemifexist){
        $checkitemifexist->quantity+=$request->quantity;
        $checkitemifexist->save();
       }else{
        $newItem = new cart_items();

        $newItem->cart_id = $getCartId->id;
 
        $newItem->product_id = $request->id;
 
        $newItem->quantity = $request->quantity;
 

        $newItem->save();
       }
       

    return redirect('/home')->with('addedproduct', '<b>' . $request->quantity .'</b>'  .' '. $request->productname . ' added to your cart');
    }


    public function checkCart(){
        $latestcart = DB::table('carts')->where('carts.user_id','=',auth()->id())->latest()->first();

        $cartItems = DB::table('cart_items')
        ->join('carts', 'cart_items.cart_id', '=', 'carts.id')
        ->join('products','cart_items.product_id','=','products.id')
        ->where('carts.id','=',$latestcart->id)->get();

        if($cartItems->isEmpty()) return response()->json(array('empty'=> true), 200);
    }


    public function showCart(){
 

        $usercart = cart::where('user_id','=',auth()->id())->latest()->first();
        
        if(auth()->user()->isadmin == 1) return back()->with('unauthorized', 'Admin cannot use cart feature');
        if($usercart->cart_items->isEmpty() && auth()->user()->isadmin == 0) return redirect('/home')->with('emptycart', 'your cart is empty');


        $categories = category::all();
        

        return view('cart',[
            'category' => $categories,
            'title' => 'Cart',
            'usercart' => $usercart
        ]);
    }


    public function destroycartitems($cart_id, $product_id){

        $product = product::findOrfail($product_id);

         DB::table('cart_items')
                   ->where('cart_id','=',$cart_id)
                   ->where('product_id','=',$product_id)
                   ->delete();
                   


        return redirect('/cart')->with([
            'itemdeleted'=> $product->productname,
        ]);
    }


    public function purchasecartitems(){

        $currentcart = cart::where('carts.user_id','=',auth()->id())->latest()->first();
        $currentcart->updated_at = Carbon::now();
        $currentcart->save();
        $newcart = new cart();

        $newcart->user_id = auth()->id();

        $newcart->save();


        return redirect('/home')->with('purchasesuccess', 'All items have been purchased');
    }
}
