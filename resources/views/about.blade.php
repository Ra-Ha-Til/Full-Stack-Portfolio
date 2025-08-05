@extends('layouts.app')

@section('title', 'About Me')
@section('content')
    <div class="row">
        <div class="col-md-4 text-center mb-4">
            <img src="{{ asset('profile.jpg') }}" alt="Profile Photo" class="img-fluid rounded-circle profile-img">

        </div>
        <div class="col-md-8">
            <h1>About Me</h1>

            <p>Hello! I'm Md Rahatil Rahaman, a passionate Flutter Developer at the beginner level and the Founder & CEO of
                Ra Ha Til Academy. I’m currently pursuing a degree in Computer Science and Engineering at Daffodil
                International University.

                My journey into tech began with a deep interest in mobile app development. I love building beautiful and
                functional apps using Flutter, and I’m working toward becoming a full-stack developer. I believe in
                continuous learning and enjoy solving real-world problems through code.

                Outside of coding, you’ll find me playing indoor games and exploring new tech. I'm always up for a challenge
                and excited to grow as a developer every single day.</p>

            <h3 class="mt-4">Contact</h3>
            <ul class="list-unstyled">
                <li><i class="bi bi-envelope"></i> rahatil880@gmail.com </li>
                <li><i class="bi bi-linkedin"></i> https://www.linkedin.com/in/rahatil4769/</li>
                <li><i class="bi bi-github"></i> https://github.com/Ra-Ha-Til</li>

            </ul>
        </div>
    </div>
@endsection