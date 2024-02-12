@extends('layout.main')

@section('container')

    <article class="mb-5">
        <h2>{{ $post["title"] }}</h2>
        <h5 style="color: gray">By: {{ $post["author"] }}</h5>
        <h6>Category: <a href="../categories/{{ $post->category->slug }}">{{ $post->category["name"]}}</a></h6>
        <p>{{ $post["body"] }}</p>

        <p>
            
            <a href="{{ url()->previous() }}">Go Back</a>
        </p>
    </article>

    
@endsection