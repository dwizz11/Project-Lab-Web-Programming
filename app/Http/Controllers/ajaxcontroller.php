<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ajaxcontroller extends Controller
{
    

    public function searchproduct(Request $request){

        $products = product::where('productname', 'like', '%'.$request->productname.'%')->get();

        if($products->isEmpty()) {
            if($request->page === 'home'){
                return view('search',[
                    'found'=> false,
                    'query' => $request->productname
                   ]);
            }else{
                return view('managesearch',[
                    'found'=> false,
                    'query' => $request->productname
                   ]);
            }
            
        }else{
            if($request->page === 'home'){
                return view('search',[
                    'found' => true,
                    'products'=>$products
                   ]);
            }else{
                return view('managesearch',[
                    'found' => true,
                    'products'=>$products
                   ]);
            }
           
    }
    

        
    }

}
