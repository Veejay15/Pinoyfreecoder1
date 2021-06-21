@extends('layouts.app')

@section('content')
<div class="container">
   
@foreach($posts as $post)
<div class="row">
<div class="col-6 offset-3 pt-4 pb-2">
 
<a href="/profile/ {{ $post->user->id }}">


<div class="d-flex align-items-center">
<div class="pr-3 pt-2">
<img src="/storage/{{ $post->user->profile->image}}" class="rounded-circle w-100" style="max-width: 50px;">

</div>
<div class="pt-2">
<h5 class="font-weight-bold">
<a href="/profile/{{$post->user->id}}"><span class="text-dark">{{ $post->user->username }}</span></a>

</h5>

</div>

</div>

<hr>

<p class="pt-1 pb-1"><span class="font-weight-bold"><a href="/profile/{{$post->user->id}} ">
<span class="text-dark">{{ $post->user->username }}</span> </a>
</span> {{ $post->caption }} </p>



</div>
</div>
</div>


<div class="row">
<div class="col-6 offset-3 pt-4 pb-2">

<a href="/profile/ {{ $post->user->id }}">
<img src="/storage/{{ $post->image }}" class="w-100">
</a>
</div>
</div>

@endforeach




@endsection
