<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
     <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet"> 
     <link rel="stylesheet" href="../css/templatemo-digital-trend.css">


</head>
<body>

<nav class="navbar navbar-dark navbar-expand-lg" id='camp'>
        <div class="container">
            <a class="navbar-brand text-white" href="/">
              <i class="fa fa-line-chart text-white"></i>
              Storm Services
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color:#fff; font-size:20px;"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" id='woke'>
                        <a href="/" class="nav-link smoothScroll text-white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard')}}" class="nav-link smoothScroll text-white">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('service')}}" class="nav-link text-white">Services</a>
                    </li>
                  



                    @auth
<li class='nav-item'>
<a href="" class='nav-link text-white'>{{ auth()->user()->name}}</a>
</li>


<li class='nav-item p-2'>
<form action="{{ route('logout')}}" method='post' class='inline text-white'>
@csrf
<button type='submit'>Logout</button>
</form>
</li>
@endauth

@guest
<li class='nav-item'>
<a href="{{ route('login')}}" class='nav-link text-white'>Login</a>
</li>

<li class='nav-item'>
<a href="{{ route('register')}}" class='nav-link text-white'>Register</a>
</li>
@endguest


                </ul>
            </div>
        </div>
    </nav>



<!-- <nav class='bg-indigo-700 shadow-lg mb-6'>
<div class='container mx-auto'>
<div class='sm:flex justify-center'>
<a href="/" class='text-white text-xl font-bold p-3'>Home</a>

<ul class='text-gray-400 sm:self-center text-xl border-t sm:border-none'>

<li class='sm:inline-block'>
<a href="{{ route('dashboard')}}" class='p-3 hover:text-white text-white'>Dashboard</a>
</li>


<li class='sm:inline-block'>
<a href="{{ route('service')}}" class='p-3 hover:text-white text-white'>Services</a>
</li>

@auth
<li class='sm:inline-block'>
<a href="" class='p-3 text-white'>{{ auth()->user()->name}}</a>
</li>

<li class='sm:inline-block'>
<form action="{{ route('logout')}}" method='post' class='p-3 inline text-white'>
@csrf
<button type='submit'>Logout</button>
</form>
</li>
@endauth

@guest
<li class='sm:inline-block'>
<a href="{{ route('login')}}" class='p-3 hover:text-white text-white'>Login</a>
</li>

<li class='sm:inline-block'>
<a href="{{ route('register')}}" class='p-3 hover:text-white text-white'>Register</a>
</li>
@endguest
</ul>

</div>
</div>

</nav> -->


<div class='flex justify-center'>
<div class='w-10/12 '>
<div class='p-6 '>
<h1 class='text-2xl font-medium mb-1 '>{{ $user->name}}</h1>
<p>Posted {{ $posts->count()}} {{ Str::plural('service', $posts->count())}}
and received {{ $user->receivedLikes->count()}} {{ Str::plural('subscriber', $user->count())}}
 </p>
</div>

<div class='bg-white p-6 rounded-lg'>

@if($posts->count())
@foreach ($posts as $post)

<x-post :post='$post'/>

@endforeach

{{ $posts->links()}}

@else

<p>{{ $user->name }} doesnot have any services</p>
@endif
</div>


</div>
</div>

<script src="{{ asset('js/jquery.min.js') }}" defer></script>
     <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
     <script src="{{ asset('js/aos.js') }}" defer></script>
     <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
     <script src="{{ asset('js/smoothscroll.js') }}" defer></script>
     <script src="{{ asset('js/custom.js') }}" defer></script>
     <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>