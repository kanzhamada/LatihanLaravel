@extends('layout.main')

@section('container')

    <h1>Isi Category</h1>
    <br> <p></p>

    <p>
        <a href="/test">Lihat Semua Postingan</a>
    </p>

    <p>
        <a href="/categories">Lihat Semua Kategori</a>
    </p>
    
    <ul>
    @foreach ($category as $categories)
        <li>
        <h2><a href="/categories/{{ $categories["slug"] }}">{{ $categories["name"] }}</a></h2>
       
        </li>
    @endforeach
    </ul>

@endsection