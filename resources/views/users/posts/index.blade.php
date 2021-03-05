@extends('layouts.app')

@section('content')
<div class='flex justify-center'>
<div class='w-10/12 '>
<div class='p-6'>
<h1 class='text-2xl font-medium mb-1'>{{ $user->name}}</h1>
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
@endsection