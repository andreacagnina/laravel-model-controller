@extends('layouts.app')

@section('home')
    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="content text-center">
                    <h1>{{ $greeting }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
