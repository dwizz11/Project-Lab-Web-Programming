@extends('layouts.layout')

@section('content')
<div class="container mt-5 p-2">
        <input class="form-control me-2" type="search" placeholder="Search product" aria-label="Search" id="searchbar">

      
      <div class="container  mt-5" id="content">
        {{-- Category --}}
        @foreach ($category as $category_item)
        <div class="container mt-5 bg-white position-relative" style="border-radius: 20px; box-shadow: 0px 0px 20px 10px rgba(0, 0, 0, 0.2); text-align: center; padding: 20px !important;">
          <h3 style="display: inline;">{{ $category_item->category_name}}</h3>
          <form action="/home/{{ $category_item->category_slug }}" method="get">
            @csrf
            <button type="submit" class="btn btn-dark" style="margin-right: ;position: absolute;top: 1em;right: 1em;">View All</button>
          </form>
          
          <div class="container mt-3 category1 d-flex justify-content-center flex-wrap" style="text-align: left;max-height: 18rem; overflow-y: scroll">
  
  
            {{-- Products --}}
            @foreach ($category_item->products as $product_item)
            <div class="card" style="width: 18rem; position: relative;">
              <img src="{{ asset('storage/' . $product_item->productphoto) }}" class="card-img-top" alt="{{ asset('storage/' .'img2.jpg') }}" width="100%" height="160rem" style="object-fit: cover">
              <div class="card-body">
                
                <p class="card-title m-0">{{ $product_item->productname }}</p>
                <p style="font-weight: 700; margin: 0; margin-bottom: 1rem">IDR {{ number_format($product_item->price,2,",",".") }}</p>
              </div>
              <a href="/home/{{ $category_item->category_slug }}/{{ $product_item->productslug }}">
                <span class="link"></span>
              </a>
            </div>

            

            
            @endforeach
              
            {{-- Products --}}
  
          
               
                
    
          
      </div>
        
        </div>
  
        @endforeach
        
  
      {{-- Category --}}
      </div>
    
</div>






        

@endsection