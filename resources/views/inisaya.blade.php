@extends('layout.main')

@section('container')
    <h1>Ini Saya</h1>
    
    <br>

    <h3>{{ $name }}</h3>
    <p>{{$nim}}</p>
    <p>Semester&nbsp;: {{$semester}}</p>
    <img src="img/{{$image}}" alt="{{$name}}" width="200" class="img-thumbnail rounded-circle">
 @endsection