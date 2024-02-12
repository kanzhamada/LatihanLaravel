@extends('layout.main')

@section('container')

    <h1>Isi Category: {{ $category }}</h1>
    <br> <p></p>

    <p>
        <a href="/test">Lihat Semua Postingan</a>
    </p>

    <p>
        <a href="/categories">Lihat Semua Kategori</a>
    </p>
    

        @foreach ($posts as $post)
            <h2><a href="/test/{{ $post["slug"] }}">{{ $post["title"] }}</a></h2>
            <h5 style="color: gray">By: {{ $post["author"] }}</h5>
            <p>{{ $post["excerpt"]}}</p>
        @endforeach


@endsection