@extends('layouts.app')

@section('home')
    <div class="container mt-3 text-center">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h1>{{ $greeting }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
