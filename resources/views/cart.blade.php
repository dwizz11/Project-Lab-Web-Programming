@extends('layouts.layout')

@section('content')


<h3 style="text-align: center;" class="mt-4">My Cart</h3>
<div class="container mt-2 p-5 cart w-50" style="max-height: 40rem !important; overflow-y: scroll; overflow-x: hidden">


  @php
      $totalprice = 0;
  @endphp
      {{-- Category --}}
      @foreach ($usercart->cart_items as $item)
      <div class="container mb-5 bg-white d-flex w-100 align-items-center" style="border-radius: 20px; box-shadow: 0px 0px 20px 10px rgba(0, 0, 0, 0.2); text-align: center; padding: 20px !important; position: relative;">

  
          <img src="{{ asset('storage/' . $item->product->productphoto) }}" class="card-img-top" alt="{{ asset('storage/' .'img2.jpg') }}" height="130rem" style="object-fit: contain;width: 40%!important" >
       

        <div class="container ms-3">
          <p style="margin: 0;text-align: start;font-weight: 700;width: 70%">{{ $item->product->productname}}</p>
          <p style="margin: 0;text-align: start">Quantity : {{ $item->quantity}}</p>
          <p style="margin: 0;text-align: start">Total Price :  <b>IDR {{ number_format(($item->product->price*$item->quantity),2,",",".")}}</b></p>




            <form action="/cart/delete/{{ $usercart->id }}/{{ $item->product_id }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" style="position: absolute;right: 2rem;top: 2rem"><i class="fa-solid fa-trash"></i></button>
            </form>


        </div>






      </div>

      @php
          $totalprice+=$item->quantity*$item->product->price
      @endphp
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
