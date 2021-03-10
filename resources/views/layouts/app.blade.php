<!DOCTYPE html>
<html lang="en">
<head>

     <title>Digital Trend HTML Template</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
     <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet"> 

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../css/templatemo-digital-trend.css">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
              <i class="fa fa-line-chart"></i>
              Storm Services
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link smoothScroll">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard')}}" class="nav-link smoothScroll">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('service')}}" class="nav-link">Services</a>
                    </li>
                  



                    @auth
<li class='nav-item'>
<a href="" class='nav-link'>{{ auth()->user()->name}}</a>
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
<a href="{{ route('login')}}" class='nav-link'>Login</a>
</li>

<li class='nav-item'>
<a href="{{ route('register')}}" class='nav-link'>Register</a>
</li>
@endguest


                </ul>
            </div>
        </div>
    </nav>




     <script src="{{ asset('js/jquery.min.js') }}" defer></script>
     <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
     <script src="{{ asset('js/aos.js') }}" defer></script>
     <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
     <script src="{{ asset('js/smoothscroll.js') }}" defer></script>
     <script src="{{ asset('js/custom.js') }}" defer></script>
     <script src="{{ asset('js/app.js') }}" defer></script>

     @yield('content')
     
</body>
</html>