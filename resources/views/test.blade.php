@extends('layout.main')

@section('container')

    <h1>Isi Post</h1>
    <br> <p></p>
    
    @foreach ($posts as $post)
        <article class="mb-5">
        <h2><a href="test/{{ $post["slug"] }}">{{ $post["title"] }}</a></h2>
        <h5 style="color: gray">By: {{ $post["author"] }}</h5>
        <p>{{ $post["excerpt"]}}</p>
        <p>{{ $post["content"] }}</p>
        </article>

        {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim repudiandae excepturi velit laboriosam. 
        
        Quasi accusantium aliquam repudiandae magni. Possimus repellendus, voluptate nostrum porro voluptates ducimus fugit veniam velit at. Necessitatibus ut ratione unde quasi beatae eos voluptate iste ipsam voluptatum! Eos, nulla cumque nisi quas eveniet, 
        
        
        expedita ullam aliquid atque blanditiis rerum enim, quod quisquam. --}}
    @endforeach

@endsection