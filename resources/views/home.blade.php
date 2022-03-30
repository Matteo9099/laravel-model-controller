@extends('layout.base')

@section('title', 'Movies')
    

@section('content')

@foreach ($movies as $movie)
        
<h3>{{ $movie->title }}</h3>

@endforeach

@endsection