@extends('layout.main')

@section('container')

    <h1>Isi Posts</h1>
    <br> <p></p>
    
    @foreach ($posts as $post)
        <article class="mb-5">
        <h2><a href="test/{{ $post["slug"] }}">{{ $post["title"] }}</a></h2>
        <h5 style="color: gray">By: {{ $post["author"] }}</h5>
        <p>{{ $post["content"] }}</p>
        </article>
    @endforeach

@endsection