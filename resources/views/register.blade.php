@extends('layouts.layout')

@section('content')
<div class="container mx-auto mt-5 w-25 pb-5">
    
      <h1 class="text-center">Register</h1>
      <form action="/register" method="POST" id="register">
          @csrf

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid  @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{ old('name') }}" autofocus>
            
            <div class="invalid-feedback">
              @error('name')
             {{ $message }}
             @enderror
            </div>
            
            
          </div>
          
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid  @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
            
            <div class="invalid-feedback">
              @error('email')
             {{ $message }}
             @enderror
            </div>
            
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password">
            <div class="invalid-feedback">
            @error('password')
             {{ $message }}
             @enderror
            </div>
          </div>


          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="exampleInputPassword1" name="password_confirmation">
            <div class="invalid-feedback">
            @error('password_confirmation')
             {{ $message }}
             @enderror
            </div>
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Gender</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
            <label class="form-check-label" for="flexRadioDefault1">
              Male
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female">
            <label class="form-check-label" for="flexRadioDefault2">
              Female
            </label>
          </div>
        </div>

        @error('gender')
        <div class="error" style="color: red">
          {{ $message }}
        </div>
        @enderror

        <div class="mb-3">

          <label class="control-label" for="date">Birthdate</label>
          <input type="date" name="date" class="form-check" style="width: 20rem; height: 2rem; text-align: center; font-weight: bold">
          @error('date')
        <div class="error" style="color: red">
          {{ $message }}
        </div>
        @enderror
        </div>
        
        

        <div class="mb-3">
          <label class="control-label" for="countries">Country</label>
          <select class="form-select @error('countries') is-invalid @enderror" aria-label="Default select example" id="countries" name="country" form="register">
            <option selected value = "">Select Country</option>
          </select>

         
          {{-- @if(session()->has('country'))
          <div class="error" style="color: red">
          {{ session('country') }}
        </div>
         @endif --}}

         @error('country')
         <div class="error" style="color: red">
          {{ $message }}
        </div>
         @enderror
          </div>

          
           

        
          <button type="submit" class="btn btn-dark">Submit</button>
        </form>
  </div>
@endsection