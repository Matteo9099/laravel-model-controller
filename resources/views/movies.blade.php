@extends('layout.base')

@section('title', 'Movies')
    

@section('content')

    @foreach ($movies as $movie)
            
        <div class="card"> 
            {{-- titolo --}}
            <div class="title-item">
                <h3>Titolo: {{ $movie->title }}</h3>
            </div>
            {{-- tabella info --}}
            <div class="table-card">
                
                <p class="underline">Tiotolo originale: {{ $movie->original_title }}</p>
                <p class="underline">Nazionalità: {{ $movie->nationality }}</p>
                <p class="underline">Data di uscita: {{ $movie->date }}</p>
                <p class="underline">Voto: {{ $movie->vote }}</p>
              
            </div>
            <br>
        </div>

    @endforeach

@endsection