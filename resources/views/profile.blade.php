@extends('layouts.layout')

@section('content')
<div class="container mx-auto mt-5 w-25 pb-5">
    
      <h1 class="text-center">Profile</h1>
      <form action="#" method="POST" id="register">

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{ $user->name }}" disabled>
            
           
            
            
          </div>
          
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ $user->email }}" disabled>
            
           
            
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Gender</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Gender" value="{{ $user->gender }}" disabled>
            
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Gender" value="{{ $user->birthdate }}" disabled>
        </div>



        <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Country</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Gender" value="{{ $user->country }}" disabled>
        </div>
        
          

        </form>
  </div>
@endsection