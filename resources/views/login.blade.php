@extends('layouts.layout')

@section('content')
<div class="container mx-auto mt-5 w-50">
  @if(session()->has('LoginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session('LoginError') }}</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  @elseif(session()->has('Register-Success'))
  <div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
      {{ session('Register-Success') }} has been registered, Please login.
    </div>
  </div>
  @endif
  
    <h1 class="text-center">Login</h1>
    <form action="/login" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control @error('email') is-invalid  @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ Cookie::get('emailcookie') !== null ? Cookie::get('emailcookie') : "" }}" autofocus>
          
          <div class="invalid-feedback">
            @error('email')
           {{ $message }}
           @enderror
          </div>
          
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password" value="{{ Cookie::get('passwordcookie') !== null ? Cookie::get('passwordcookie') : "" }}">
          <div class="invalid-feedback">
          @error('password')
           {{ $message }}
           @enderror
          </div>

         
          
        </div>
        
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" checked={{ Cookie::get('emailcookie') !== null }}>
          <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>

        
        <button type="submit" class="btn btn-dark">Submit</button>
      </form>
</div>

@endsection