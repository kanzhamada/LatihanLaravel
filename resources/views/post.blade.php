<?php
    $formattedDate = date("l, j F Y", strtotime($post["created_at"]));
?>

@extends('layout.main')

@section('container')

    <article class="mt-4">
        <h2 class="mb-4" style="border-bottom: 1px solid gray; padding-bottom: 20px">{{ $post["title"] }}</h2>
        
        <p style="font-size: 14px; "><?= $formattedDate ?> • <a href="../categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category["name"]}}</a></p>
        
        <h6 style="color" class="mt-4">Author: <a href="../author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author["name"] }}</a></h6>
        <p>{{ $post["body"] }}</p>

        
        <p>
            
            <a href="{{ url()->previous() }}">Go Back</a>
        </p>
    </article>

    
@endsection