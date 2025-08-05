@extends('layouts.app')

@section('title', 'Projects')
@section('content')
    <h1 class="mb-4">My Projects</h1>
    <div class="list-group">
        @foreach($projects as $project)
            <a href="{{ $project['url'] }}" target="_blank" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $project['name'] }}</h5>
                    <small><i class="bi bi-box-arrow-up-right"></i></small>
                </div>
                <p class="mb-1">{{ $project['description'] }}</p>
                <small>View on GitHub</small>
            </a>
        @endforeach
    </div>
@endsection