@extends('layout.app')


@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h1>Film : {{ $movie->id }}</h1>
                            <h5 class="card-title">Titolo : {{ $movie->title }}</h5>
                            <p class="card-text">Titolo Originale : {{ $movie->original_title }}</p>
                            <p class="card-text">Nazionalità : {{ $movie->nationality }}</p>
                            <p class="card-text">Data usicta : {{ $movie->date }}</p>
                            <p class="card-text">Voto :{{ $movie->vote }}</p>
                            <a href="#" class="btn btn-primary">Guarda</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
