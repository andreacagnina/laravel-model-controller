@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <h2>Ecco i Film della nostra piattaforma:</h2>
            </div>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-3 g-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header">
                                <span><strong>Titolo:</strong></span>{{ $movie->id }} {{ $movie->title }}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span><strong>Titolo
                                            originale:</strong></span> {{ $movie->original_title }}</li>
                                <li class="list-group-item text-capitalize"><span><strong>Nazionalità:</strong></span>
                                    {{ $movie->nationality }}
                                </li>
                                <li class="list-group-item"><span><strong>Data di uscita:</strong></span>
                                    {{ $movie->date }}</li>
                                <li class="list-group-item"><span><strong>Voto:</strong></span> {{ $movie->vote }}</li>
                                <li class="list-group-item"><span><strong>Clicca e scopri di più sul film:</strong></span>
                                    <a href="{{ Route('movies_show_more', ['id' => $movie->id]) }}">🔍</a>

                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
