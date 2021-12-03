@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-4">Rendering the Posts</h1>
    @if (count($posts) > 0)
        <table class="table table-bordered table-sm table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->first_name }} {{$post->user->last_name }}</td>
                    <td>
                        <a class="btn btn-outline-primary btn-sm" href="{{ route('posts.show', ['id' => $post->id]) }}">View</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    @else
        <p>No post found.</p>
    @endif
    
</div>
@endsection