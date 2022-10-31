<!DOCTYPE html>
<html lang="en">
<head>




  {{-- <link rel="stylesheet" href="sweetalert2.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />




    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Barbatos | {{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Barbatos Shop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav align-items-center mx-5">
              
              <li class="nav-item">
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      @if (strpos(Route::current()->uri(), 'home/') !== false)
                      {{ $title }}
                      @else
                      Category
                      @endif
                    </button>
                    <ul class="dropdown-menu">
                      @if(strpos(Route::current()->uri(), 'home/') !== false )
                      <li><a class="dropdown-item" href="/home">Home</a></li>
                      @endif
                      @foreach ($category as $item)
                      <li><a class="dropdown-item" href="/home/{{ $item->category_slug }}">{{ $item->category_name }}</a></li>
                      @endforeach
                    </ul>
                  </div>
              </li>
              @can('admin')
              <li class="nav-item mx-2">
                <a class="nav-link" href="/manage">Manage Product</a>
              </li> 
              @endcan
              
            </ul>

            

            <ul class="navbar-nav align-items-center me-5">
             
              @guest
              
              <li class="nav-item mx3 ">
                <a href="/register" class="nav-link">Register <i class="fa-solid fa-user-plus" ></i></a>
            </li>
              <li class="nav-item mx3">
                <a href="/login" class="nav-link">Login <i class="fa-solid fa-right-to-bracket"></i></a>
            </li>
              @endguest
                

                @auth
                @if (auth()->user()->isadmin == 0)
                <li class="nav-item mx3 " onclick="checkCart()" style="position: relative;"><i class="fa-solid fa-cart-shopping" style="font-size: 1.5rem; margin-right: 1rem; margin-top: 5px;color: white;cursor: pointer;"><p class="bg-danger text-center rounded-circle" style="font-size: 0.7rem; width: 1rem; height: 1rem;position: absolute;top: 0;right: 10px;padding-top: 1.2px">{{ $cartcount }}</p></i></li>
                @endif
                
                <div class="btn-group">
                  <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> Hi, {{ auth()->user()->name }}  </button>
          
                  <ul class="dropdown-menu dropdown-menu-dark ms-5 w-75 mt-3">
                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                    @if (auth()->user()->isadmin == 0)
                    <li><span class="dropdown-item" onclick="checkHistory()" style="cursor: pointer">History</span></li>
                    @endif
                    
                    <li> 
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout <i class="fa-solid fa-right-from-bracket"></i></button>
                      </form>
                    </li>
                   
                   
                  </ul>
                </div>
                @endauth
                
            </ul>
          </div>
        </div>
      </nav>

      @yield('content')
    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
<script type="text/javascript" src="{{ asset('index.js') }}"></script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
 var toastMixin = Swal.mixin({
  width: '30%',
  toast: true,
  icon: 'success',
  title: 'General Title',
  animation: false,
  position: 'top',
  showConfirmButton: false,
  timer: 1200,
  timerProgressBar: true,
  // showCancelButton: true,
  // didOpen: (toast) => {
  //   toast.addEventListener('mouseclick', Swal.close)
  //   toast.addEventListener('mouseleave', Swal.resumeTimer)
  // }
});

 </script> 
@if (session()->has('welcome'))


 <script>
    toastMixin.fire({
      animation: true,
      title: '{{ session('welcome') }}'
    });
  
  </script>

@elseif (Auth::viaRemember())
<script>
  toastMixin.fire({
    animation: true,
    title: 'Welcome back, {{ auth()->user()->name }}'
  });

</script>

@elseif (session()->has('addedproduct'))
<script>
  toastMixin.fire({
    animation: true,
    position: 'top-end',
    title: '{!! session('addedproduct') !!}'
  });

</script>

@elseif (session()->has('newproductadded'))
<script>
  toastMixin.fire({
    animation: true,
    position: 'top-end',
    title: '{{ session('newproductadded') }}'
  });

</script>

@elseif (session()->has('updated'))
<script>
  toastMixin.fire({
    animation: true,
    position: 'top-end',
    title: '{{ session('updated') }} updated !'
  });

</script>

@elseif (session()->has('deleted'))
<script>
  toastMixin.fire({
    icon: 'warning',
    animation: true,
    position: 'top-end',
    title: '{{ session('deleted') }} has been deleted !'
  });

</script>

@elseif (session()->has('purchasesuccess'))
<script>
  toastMixin.fire({
    animation: true,
    position: 'top-end',
    title: '{{ session('purchasesuccess') }}'
  });

</script>

@elseif (session()->has('emptycart'))
<script>
  toastMixin.fire({
      icon: 'info',
      animation: true,
      title: 'Your cart is empty, please purchase any item'
    });

</script>

@elseif (session()->has('unauthorized'))
<script>
  toastMixin.fire({
      icon: 'warning',
      animation: true,
      title: '{{ session('unauthorized') }}'
    });

</script>

@elseif (session()->has('nohistory'))
<script>
 toastMixin.fire({
    icon: 'info',
    animation: true,
    title: 'There are no transaction history'
  });

</script>



@endif



<script type="text/javascript" src="{{ asset('ajax.js') }}"></script>






</html>