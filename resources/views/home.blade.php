@extends('layouts.app')

@section('title', 'Home')
@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1>Hello, I'm John Doe</h1>
            <p class="lead">Full Stack Developer specializing in Laravel and Flutter</p>
            <p>I build web and mobile applications with clean, efficient code and modern design principles.</p>
            <a href="{{ route('about') }}" class="btn btn-primary">Learn More About Me</a>
        </div>
        <div class="col-md-6 text-center">
            <img src="{{ asset('storage/profile.jpg') }}" alt="Profile Photo" class="img-fluid rounded-circle profile-img">
        </div>
    </div>
@endsection