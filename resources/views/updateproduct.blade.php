@extends('layouts.layout')

@section('content')
<button type="button" class="btn btn-secondary" style="position: absolute; top: 5rem; left: 30rem;"  onclick="location.href='/manage';">Back</button>
<div class="container mx-auto mt-5 w-25 pb-5">

    
    
      <h1 class="text-center">Update Product</h1>
      <form action="/manage/update/{{ $product->productslug }}" method="POST" id="updateproduct" enctype="multipart/form-data">
          @csrf
          @method('PUT')
        {{-- Product Name --}}
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control @error('productname') is-invalid  @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="productname" value="{{ $product->productname }}" autofocus>
            
            <div class="invalid-feedback">
              @error('productname')
             {{ $message }}
             @enderror
            </div>
            
            
          </div>
            {{-- Category --}}
          <div class="mb-3">
            <label class="control-label" for="date">Category</label>
            <select class="form-select @error('productcategory') is-invalid  @enderror" aria-label="Default select example" name="productcategory" form="updateproduct">
              <option selected value = "">Select a Category</option>

              @foreach ($category as $item)

              @if ($item->category_name === $product->category->category_name)
              <option value = "{{ $item->id }}" selected>{{ $item->category_name }}</option>

              @else
              <option value = "{{ $item->id }}">{{ $item->category_name }}</option>
              @endif
              
              @endforeach
            </select>
  
           
            <div class="invalid-feedback">
                @error('productcategory')
               {{ $message }}
               @enderror
              </div>
            
           
  
            </div>
          
            {{-- Detail --}}
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Detail</label>
            <textarea class="form-control @error('productdesc') is-invalid  @enderror" id="exampleFormControlTextarea1" rows="3" name="productdesc">{{ $product->productdesc }}</textarea>
            
            <div class="invalid-feedback">
              @error('productdesc')
             {{ $message }}
             @enderror
            </div>
            
          </div>

          {{-- Price --}}
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="text" class="form-control @error('productprice') is-invalid @enderror" id="exampleInputPassword1" name="productprice" value="{{ $product->price }}">
            <div class="invalid-feedback">
            @error('productprice')
             {{ $message }}
             @enderror
            </div>
          </div>


          <div class="mb-3">
            <label class="form-label" for="productimg">Photo</label>
            <input type="file" class="form-control  @error('productphoto') is-invalid @enderror" id="productimg" name="productphoto" />
            <div class="invalid-feedback">
            @error('productphoto')
             {{ $message }}
             @enderror
            </div>
          </div>

          
    
        
        

        

          
           

        
          <button type="submit" class="btn btn-dark">Submit</button>
        </form>
  </div>
@endsection