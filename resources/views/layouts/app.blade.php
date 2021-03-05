<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind-dark.min.css"> -->
    
</head>
<body class='bg-gray-200'>
<nav class='bg-indigo-700 shadow-lg mb-6'>
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

</nav>
    @yield('content')
</body>
</html>
</html>
