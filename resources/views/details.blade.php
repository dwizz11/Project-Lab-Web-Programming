@extends('layouts.layout')

@section('content')

<div class="container mt-5">
   

      {{-- Category --}}
      <div class="container m-auto bg-white d-flex position-absolute top-50 start-50 translate-middle w-50" style="border-radius: 20px; box-shadow: 0px 0px 20px 10px rgba(0, 0, 0, 0.2); text-align: center; padding: 20px !important;">


          <img src="{{ asset('storage/' . $product_item->productphoto) }}" class="card-img-top" alt="{{ asset('storage/' .'img2.jpg') }}" width="100%" height="195rem" style="object-fit: contain">

        
        <div class="container align-self-center ms-4">
          <p style="margin: 0;text-align: start;font-weight: 700">{{ $product_item->productname}}</p>
          <p style="margin: 0;text-align: start">IDR {{ number_format($product_item->price,2,",",".")}}</p>
          <p style="margin: 0;text-align: start">{{ $product_item->productdesc}}</p>

          @auth
          @if (auth()->user()->isadmin == 0)
          <form action="/home/buy" method="post">
            @csrf
            <input type="hidden" name="productname" value="{{ $product_item->productname }}">
            <input type="hidden" name="id" value="{{ $product_item->id }}">
            <input type="number" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Quantity" name="quantity" min=0>

            @error('quantity')
            <div class="error" style="color: red">
              {{ $message }}
            </div>
            @enderror
            <button type="submit" class="btn btn-secondary" style="text-align: start">Purchase</button>
          </form>
          @endif
          
          @endauth
          
        </div>

      
      
        
     
      
      </div>

      

    {{-- Category --}}
</div>

@endsection