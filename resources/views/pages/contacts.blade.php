@extends('pages.parent')

@section('content')
<div class="container">
    <h1 class="display-4">Welcome to Contacts Page</h1>
    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam totam optio repellat incidunt voluptas possimus beatae ipsam dolor neque, mollitia harum ullam reprehenderit quas nulla facilis similique dolorem, vitae obcaecati.</p>
    <ul>
        @foreach ($mailinglist as $email)
        <li> {{ $email }} </li>
        @endforeach
    </ul>
</div>
@endsection