@extends('layout.main')

@section('container')

    <h1>Isi Post</h1>
    <br> 

    <p>
        <a href="/categories">Lihat Semua Kategori</a>
    </p>
    
    @foreach ($posts as $post)
        <article class="mb-5" style="border-left: 5px solid blue; padding-left: 10px">
        <h2><a href="test/{{ $post["slug"] }}" class="text-decoration-none">{{ $post["title"] }}</a></h2>
        <h5 style="color: gray">By: {{ $post->users["name"] }}</h5>
        <p>{{ $post["excerpt"]}}</p>
        <p><a href="test/{{ $post["slug"] }}" class="text-decoration-none">Read more...</a></p>
        </article>

    @endforeach

@endsection