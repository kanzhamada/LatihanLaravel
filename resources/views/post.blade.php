@extends('layout.main')

@section('container')

    <article class="mb-5">
        <h2>{{ $post["title"] }}</h2>
        <h5 style="color: gray">By: {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>

        <p>
            
            <a href="{{ url()->previous() }}">Go Back</a>
        </p>
    </article>

    
@endsection