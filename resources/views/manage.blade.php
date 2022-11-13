@extends('layouts.layout')

@section('content')



<div class="container mt-3 pt-3  rounded-3 d-flex flex-column" style="border-radius: 20px;">
    <div class="container d-flex mx-auto w-50 justify-content-between align-items-center">
        <div class="container w-50">

                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="managesearch">

        </div>

        <button class="btn btn-secondary"  style="height: 2.4rem"  onclick="location.href='/manage/add';"> <i class="fa-solid fa-circle-plus"></i> Add Product</button>
    </div>

    <div class="container d-flex flex-column align-items-center mt-2 pb-0" style="border-radius: 20px; overflow-y: scroll;max-height: 40rem !important;" id="managecontent">
        @foreach ($products as $products)
        <div class="container bg-white d-flex w-50 mt-3 mb-2" style="border-radius: 20px; box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.2); text-align: center; padding: 20px !important; margin-left: 0 !important; margin-right: 0 !important; position: relative;">
    
            <div class="container w-50">
              <img src="{{ asset('storage/' . $products->productphoto) }}" class="card-img-top" alt="{{ asset('storage/' .'img2.jpg') }}" width="100%" height="150rem" style="object-fit: cover">
            </div>
            
            <div class="container d-flex flex-column justify-content-center">
              <h5 style="margin: 0;text-align: start">{{ $products->productname}}</h5>
              <p style="margin: 0;text-align: start">IDR {{ number_format($products->price,2,",",".")}}</p>
              <p style="margin: 0;text-align: start">{{ $products->productdesc}}</p>
    
              
            </div>
    
            <form action="/manage/update/{{ $products->productslug }}" method="get">
              <button type="submit" class="btn btn-warning" style="position: absolute;right: 5rem;" ><i class="fa-solid fa-pen-to-square"></i></button>
            </form>
           
            <form action="/manage/delete/{{ $products->productslug }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" style="position: absolute;right: 2rem;"><i class="fa-solid fa-trash"></i></button>
            </form>
            
          </div>
        @endforeach
    </div>
 
</div>

@endsection