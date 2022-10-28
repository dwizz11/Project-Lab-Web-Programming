@extends('layouts.layout')

@section('content')


<h3 style="text-align: center;" class="mt-4">My Cart</h3>
<div class="container mt-2 p-5 cart w-50" style="max-height: 40rem !important; overflow-y: scroll; overflow-x: hidden">
   
      {{-- Category --}}
      @foreach ($cartitems as $item)
      <div class="container mb-5 bg-white d-flex w-100 align-items-center" style="border-radius: 20px; box-shadow: 0px 0px 20px 10px rgba(0, 0, 0, 0.2); text-align: center; padding: 20px !important; position: relative;">

        <div class="container w-50 rounded-3 overflow-hidden">
          <img src="{{ asset('storage/' . $item->productphoto) }}" class="card-img-top" alt="{{ asset('storage/' .'img2.jpg') }}">
        </div>
        
        <div class="container ms-3">
          <p style="margin: 0;text-align: start;font-weight: 700">{{ $item->productname}}</p>
          <p style="margin: 0;text-align: start">Quantity : {{ $item->quantity}}</p>
          <p style="margin: 0;text-align: start">Total Price :  <b>IDR {{ number_format(($item->price*$item->quantity),2,",",".")}}</b></p>
          
      
            <button type="button" class="btn btn-danger" style="position: absolute;right: 2rem;top: 2rem" value="{{ $item->cart_id }}/{{ $item->product_id }}" id="deletecartitem" onclick="deletecartitem()"><i class="fa-solid fa-trash"></i></button>
         
        </div>

      
      
        
     
      
      </div>
      @endforeach
     

      

    {{-- Category --}}
</div>

<!-- Footer -->
<footer class="bg-dark text-muted position-absolute  bottom-0 start-50 translate-middle-x w-100 p-3">

  <div class="container d-flex align-items-center justify-content-center">
    <p style="font-weight: normal; color: white;margin: 0" class="me-2">Total Price :</p>
    <p style="margin: 0;text-align: start;font-weight: 500;color: white" class="me-3">  IDR {{ number_format($totalprice,2,",",".")  }}</p>
 
    <form action="/cart/purchase" method="post">
      @csrf
       <button type="submit" class="btn btn-secondary ">Purchase</button>
     </form>
  </div>
  
 
</footer>
<!-- Footer -->



@endsection