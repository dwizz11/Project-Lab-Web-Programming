<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class productcontroller extends Controller
{

    public function showProduct($category,product $product){
        $categories = category::all();

        $cartItems = product::all();
        if(Auth::check()){
            $latestcart = DB::table('carts')->where('carts.user_id','=',auth()->id())->latest()->first();

            $cartItems = DB::table('cart_items')
            ->join('carts', 'cart_items.cart_id', '=', 'carts.id')
            ->join('products','cart_items.product_id','=','products.id')
            ->where('carts.user_id' ,'=', auth()->id())
            ->where('carts.id','=',$latestcart->id)->get();
        }


        return view('details',[
            'category' => $categories,
            'title' => ucfirst($category),
            'product_item' => $product,
            'cartcount' => $cartItems->count()
        ]);
    }


    public function updateproduct(product $product,Request $request){
        $messages = [
            'productname.required' => 'Product name is required',
            'productcategory.required' => 'Product category is required',
            'productdesc.required' => 'Product detail is required',
            'productprice.required' => 'Product name is required',
            'productprice.numeric' => 'Product price must be numeric',
            'productphoto.mimes' => 'Product photo must be in jpg,jpeg,png format',

        ];

        $validated = $request->validate([
            'productname' => ['required'],
            'productcategory' => ['required'],
            'productdesc' => ['required'],
            'productprice' => ['required', 'numeric', 'integer'],
            'productphoto' => ['image', 'mimes:jpg,png,jpeg']
        ],$messages);

        if($request->productphoto)  $pathAndUpload = $request->file('productphoto')->store('img');

       


        $product->productname = $request->productname;
        $product->category_id = $request->productcategory;
        $product->productdesc = $request->productdesc;
        $product->productslug = Str::slug($request->productname);
        $product->price = $request->productprice;

        if($request->productphoto)  $product->productphoto = $pathAndUpload;
       


        $product->save();

        return redirect('/manage')->with('updated', $request->productname);


    }
    
    public function storeproduct(Request $request){


        $messages = [
            'productname.required' => 'Product name is required',
            'productcategory.required' => 'Product category is required',
            'productdesc.required' => 'Product detail is required',
            'productprice.required' => 'Product name is required',
            'productprice.numeric' => 'Product price must be numeric',
            'productphoto.required' => 'Product photo is required',
            'productphoto.mimes' => 'Product photo must be in jpg,jpeg,png format',

        ];

        $validated = $request->validate([
            'productname' => ['required'],
            'productcategory' => ['required'],
            'productdesc' => ['required'],
            'productprice' => ['required', 'numeric', 'integer'],
            'productphoto' => ['required', 'image', 'mimes:jpg,png,jpeg']
        ],$messages);

        $pathAndUpload = $request->file('productphoto')->store('img');

        // dd($pathAndUpload);


        $newproduct = new product();

        $newproduct->productname = $request->productname;
        $newproduct->category_id = $request->productcategory;
        $newproduct->productdesc = $request->productdesc;
        $newproduct->price = $request->productprice;
        $newproduct->productslug = Str::slug($request->productname);
        $newproduct->productphoto = $pathAndUpload;

        $newproduct->save();

        return redirect('/manage')->with('newproductadded',$request->productname . 'has been added to Barbatos Shop');
    }


    public function destroyproduct(product $product){
        $productname = $product->productname;

        $product->delete();

        return redirect('/manage')->with('deleted', $productname);
    }
}
