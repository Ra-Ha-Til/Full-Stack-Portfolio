@extends('layouts.app')

@section('title', 'About Me')
@section('content')
    <div class="row">
        <div class="col-md-4 text-center mb-4">
            <img src="{{ asset('storage/profile.jpg') }}" alt="Profile Photo" class="img-fluid rounded-circle profile-img">
        </div>
        <div class="col-md-8">
            <h1>About Me</h1>
            <p class="lead">Full Stack Developer with 5+ years of experience</p>

            <h3 class="mt-4">Bio</h3>
            <p>I'm a passionate developer who loves creating efficient, scalable web applications. My expertise lies in PHP,
                Laravel, and Flutter development. I enjoy solving complex problems and continuously learning new
                technologies.</p>

            <h3 class="mt-4">Contact</h3>
            <ul class="list-unstyled">
                <li><i class="bi bi-envelope"></i> john.doe@example.com</li>
                <li><i class="bi bi-linkedin"></i> linkedin.com/in/johndoe</li>
                <li><i class="bi bi-github"></i> github.com/johndoe</li>
                <li><i class="bi bi-phone"></i> +1 (123) 456-7890</li>
            </ul>
        </div>
    </div>
@endsection