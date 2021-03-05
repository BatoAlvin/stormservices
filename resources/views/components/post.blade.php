@props(['post' => $post])
<div >
    
<div class='mb-4'> 
<a href="{{ route('users.service', $post->user)}}" class='font-bold'>{{ $post->user->name}}</a>
<span class='text-gray-600 text-sm'>{{ $post->created_at->diffForHumans()}}</span>
<p class='mb-2'>{{ $post->body}}</p>

@auth
@if ($post->ownedBy(auth()->user()))
<div>
<form action="{{ route('service.destroy', $post) }}" method="post">
@csrf
@method('DELETE')
<button type='submit' class='text-blue-500'>Delete</button>
</form>
</div>
@endif
@endauth

<div class='flex items-center'>
@auth
@if (!$post->likedBy(auth()->user()))
<form action="{{ route('service.likes', $post) }}" method='post' class='mr-1'>
@csrf
<button type='submit' class='text-blue-500'>subscribe</button>
</form>
@else
<form action="{{ route('service.likes', $post) }}" method='post' class='mr-1'>
@csrf
@method('DELETE')
<button type='submit' class='text-blue-500'>unsubscribe</button>
</form>
@endif
@endauth

<span> {{ $post->likes->count() }} {{ Str::plural('subscriber',
$post->likes->count())}} </span>

</div>


</div>


</div>