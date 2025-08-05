@extends('layouts.app')

@section('title', 'Blog')
@section('content')
    <h1 class="mb-4">My Blog</h1>
    @foreach($posts as $post)
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">{{ $post['title'] }}</h2>
                <p class="text-muted">Posted on {{ $post['date'] }}</p>
                <p class="card-text">{{ $post['content'] }}</p>
            </div>
        </div>
    @endforeach
@endsection