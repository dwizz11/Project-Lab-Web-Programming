


@if ($found)
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
    
            <button type="button" class="btn btn-danger" style="position: absolute;right: 2rem;"><i class="fa-solid fa-trash"></i></button>
            <button type="button" class="btn btn-warning" style="position: absolute;right: 5rem;"><i class="fa-solid fa-pen-to-square"></i></button>
        </div>
        @endforeach

@else

<h3 style="display: inline;">"{{ $query }}"</h3>
    <h5>is not available in Barbatos Shop</h5>
    
@endif