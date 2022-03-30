@extends('layout.base')

@section('title', 'Movies')
    

@section('content')

    @foreach ($movies as $movie)
            
        {{-- <div class="card"> css da creare --}}
            <h3>Titolo: {{ $movie->title }}</h3>
            <h4>Tiotolo originale: {{ $movie->original_title }}</h4>
            <p>Nazionalità: {{ $movie->nationality }}</p>
            <p>Data di uscita: {{ $movie->date }}</p>
            <p>Voto: {{ $movie->vote }}</p>
            <hr>
        {{-- </div> --}}

    @endforeach

@endsection