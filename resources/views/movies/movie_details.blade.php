@extends('layouts.app')

@section('movie_details')
    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="content text-center">
                    <h2>Le informazioni per {{ $movie->title }} non sono disponibili</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
