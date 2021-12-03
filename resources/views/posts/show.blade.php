@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-4">{{ $post->title }}</h1>
    <p class="lead">{{ $post->body }}</p>
    <hr>
    Posted by {{ $post->user->first_name}} {{ $post->user->last_name}} on {{ date_format(date_create($post->created_at), "F d, Y g:iA")}}
</div>
@endsection