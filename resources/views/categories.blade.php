@extends('layout.main')

@section('container')

    <h1>Isi Category</h1>
    <br> 

    <p>
        <a href="/test">Lihat Semua Postingan</a>
    </p>
    
    <ul>
    @foreach ($category as $categories)
        <li>
        <h3><a href="../test?category={{ $categories["slug"] }}">{{ $categories["name"] }}</a></h3>
       
        </li>
    @endforeach
    </ul>

@endsection