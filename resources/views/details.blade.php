@extends('layouts.layout')

@section('content')

<div class="container mt-5">
   

      {{-- Category --}}
      <div class="container m-auto bg-white d-flex position-absolute top-50 start-50 translate-middle w-50" style="border-radius: 20px; box-shadow: 0px 0px 20px 10px rgba(0, 0, 0, 0.2); text-align: center; padding: 20px !important">

        <div class="container w-50 h-25" style="height: 13em !important; overflow: hidden;">
          <img src="{{ asset('storage/' . $product_item->productphoto) }}" class="card-img-top" alt="{{ asset('storage/' .'img2.jpg') }}">
        </div>
        
        <div class="container">
          <p style="margin: 0;text-align: start">{{ $product_item->productname}}</p>
          <p style="margin: 0;text-align: start">IDR {{ number_format($product_item->price,2,",",".")}}</p>
          <p style="margin: 0;text-align: start">{{ $product_item->productdesc}}</p>

          <form action="/home/buy/{{ $product_item->id }}" method="post">
            @csrf
            <input type="hidden" name="productname" value="{{ $product_item->productname }}">
            <input type="number" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Quantity" name="quantity" min=0>

            @error('quantity')
            <div class="error" style="color: red">
              {{ $message }}
            </div>
            @enderror
            <button type="submit" class="btn btn-secondary" style="text-align: start">Purchase</button>
          </form>
        </div>

      
      
        
     
      
      </div>

      

    {{-- Category --}}
</div>

@endsection