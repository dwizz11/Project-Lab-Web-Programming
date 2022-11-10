@extends('layouts.layout')

@section('content')


<h3 style="text-align: center;" class="mt-4">Transaction History</h3>
<div class="container mt-2 p-5 cart w-50" style="max-height: 40rem !important; overflow-y: scroll; overflow-x: hidden">

 
@foreach ($cart as $item)
@php
  $totalqty = 0;
  $totalprice = 0;   
@endphp  
<div class="container">
  <div class="container bg bg-info">
    <p style="font-size: 1.1rem;margin: 0"><span>Transaction Date: </span>{{ $item->updated_at }}</p>
  </div>

 
  <table class="table bg bg-white">
    <thead>
      <tr>

        <th scope="col">Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Sub Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($item->cart_items as $data)
        <tr>
          <td>{{ $data->product->productname }}</td>
          <td>{{ $data->quantity }}</td>
          <td>IDR {{ number_format($data->quantity*$data->product->price,2,",",".") }}</td>
        </tr>
        @php
          $totalprice+=$data->quantity*$data->product->price;   
          $totalqty+=$data->quantity;
        @endphp  
      @endforeach
      <tr>
        <td>Total</td>
        <td>{{  $totalqty }} Items(s)</td>
        <td>IDR {{ number_format($totalprice,2,",",".") }} </td>
      </tr>
      
    </tbody>
  </table>

</div>

@endforeach

  
      

</div>





@endsection