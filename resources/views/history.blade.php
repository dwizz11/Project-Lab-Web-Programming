@extends('layouts.layout')

@section('content')


<h3 style="text-align: center;" class="mt-4">Transaction History</h3>
<div class="container mt-2 p-5 cart w-50" style="max-height: 40rem !important; overflow-y: scroll; overflow-x: hidden">

@php
 $i=0;   
@endphp   
@foreach ($historycarts as $item)
<div class="container">
  <div class="container bg bg-info">
    <p style="font-size: 1.1rem;margin: 0"><span>Transaction Date: </span>{{ $historydates[$i] }}</p>
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
      @foreach ($item as $data)
        <tr>
          <td>{{ $data->productname }}</td>
          <td>{{ $data->quantity }}</td>
          <td>IDR {{ number_format($data->quantity*$data->productprice,2,",",".") }}</td>
        </tr>
      @endforeach
      <tr>
        <td>Total</td>
        <td>{{  $totalquantity[$i] }} Items(s)</td>
        <td>IDR {{ number_format($totalprice[$i],2,",",".") }} </td>
      </tr>
      
    </tbody>
  </table>

</div>
@php
$i++;   
@endphp  
@endforeach

  
      

</div>





@endsection