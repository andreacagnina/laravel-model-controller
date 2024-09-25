@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2>Ecco i Film della nostra piattaforma:</h2>
            </div>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-3 g-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header">
                                <span><strong>Titolo:</strong></span> {{ $movie->title }}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span><strong>Titolo
                                            originale:</strong></span> {{ $movie->original_title }}</li>
                                <li class="list-group-item"><span><strong>Nazionalità:</strong></span>
                                    {{ $movie->nationality }}
                                </li>
                                <li class="list-group-item"><span><strong>Data di uscita:</strong></span>
                                    {{ $movie->date }}</li>
                                <li class="list-group-item"><span><strong>Voto:</strong></span> {{ $movie->vote }}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
