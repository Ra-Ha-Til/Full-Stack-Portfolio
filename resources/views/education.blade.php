@extends('layouts.app')

@section('title', 'Education')
@section('content')
    <h1 class="mb-4">My Education</h1>
    <div class="row">
        @foreach($education as $edu)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('storage/education/' . $edu['image']) }}" class="card-img-top education-img p-3"
                        alt="{{ $edu['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $edu['title'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $edu['institution'] }}</h6>
                        <p class="card-text">Completed in {{ $edu['year'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
@endsection