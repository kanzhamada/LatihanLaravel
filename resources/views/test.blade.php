

@extends('layout.main')

@section('container')

    
    @if($posts->count())



        <div class="card bg-dark text-white border-0 rounded-lg">
            <img class="card-img rounded-lg" src="https://source.unsplash.com/1200x690?programming" alt="{{ $posts[0]["title"]}}">
            <div style="background-color: rgba(0, 0, 0, 0.7)" class="rounded-lg card-img-overlay d-flex flex-column justify-content-center align-items-center">
              <h3 class="card-title">{{ $posts[0]["title"] }}</h3>
              <p class="card-text">{{ $posts[0]["excerpt"]}}</p>
              <p class="card-text"><small class="text-muted">By. {{ $posts[0]->author["name"] }} • {{ $posts[0]["created_at"]->diffForHumans() }}</small></p>
              <a href="/../test/{{ $posts[0]["slug"] }}" class="text-decoration-none btn btn-primary rounded-pill">Read More</a>
            </div>
          </div>


    

    <br>

    <h1 class="mt-4">{{ $title }}</h1>

    <br>

    <div class="container" style="padding: 0;">
        <div class="row mb-4">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4">
                
                <?php
                $formattedDate = date("j F Y", strtotime($post["created_at"]));
                ?>
                    <a href="/../test/{{ $post["slug"] }}" class="text-decoration-none" style="color: inherit;">
                    <div class="card mb-4 border-0 pl-0">
                        
                        <img class="card-img-top rounded-lg" src="https://source.unsplash.com/900x510?{{ $post->category["name"]}}" alt="{{ $post["title"]}}">
                        <div class="card-body pt-0 pl-0">
                        <p class="card-text mt-1 mb-2 text-muted pt-1"><small style="font-size: 12px;">{{ $post->author["name"] }} | <?= $formattedDate ?></small></p>
                        <h6 class="card-subtitle">{{ $post["title"] }}</h6>
                        </div>
                    </div>
                    </a>
                
            </div>
            @endforeach
        </div>
    </div>

    @else
    <div>
        <h5 class="justify-content-center align-items-center d-flex flex-column">There is no post</h5>
    </div>
    @endif

@endsection