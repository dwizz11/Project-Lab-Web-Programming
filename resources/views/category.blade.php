@extends('layouts.layout')

@section('content')

<div class="container mt-5">
   
      {{-- Category --}}
      <div class="container mt-5 bg-white position-relative" style="border-radius: 20px; box-shadow: 0px 0px 20px 10px rgba(0, 0, 0, 0.2); text-align: center; padding: 20px !important">
        <h3 style="display: inline;">{{ $title }}</h3>
      
        
        <div class="container mt-3 category1 d-flex justify-content-center flex-wrap" style="text-align: left">


          {{-- Products --}}
          @foreach ($category_items as $product_item)
          <div class="card" style="width: 18rem;position: relative;">
            <img src="{{ asset('storage/' . $product_item->productphoto) }}" class="card-img-top" alt="{{ asset('storage/' .'img2.jpg') }}" width="100%" height="160rem" style="object-fit: cover">
            <div class="card-body">
              <p style="margin: 0">{{ $product_item->productname }}</p>
              <p style="font-weight: 700; margin: 0">Rp. {{ $product_item->price }},-</p>
              <p class="card-text">{{ $product_item->productdesc }}</p>
             {{-- <form action="/home/{{ $currentcategory }}/{{ $product_item->productslug }}" method="get">
             @csrf
              <button type="submit" class="btn btn-secondary">Details</button>
            </form> --}}
            </div>

            <a href="/home/{{ $currentcategory }}/{{ $product_item->productslug }}">
              <span class="link"></span>
            </a>
          </div>
          @endforeach
            
          {{-- Products --}}

        
             
              
  
        
    </div>
      {{ $category_items->links() }}
      </div>

      

    {{-- Category --}}
</div>

@endsection