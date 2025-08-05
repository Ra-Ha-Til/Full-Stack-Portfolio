@extends('layouts.app')

@section('title', 'My Projects')
@section('content')
    <div class="container">
        <h1 class="text-center mb-5">My Projects</h1>

        <div class="row g-4">
            <!-- Hotel Booking System -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Hotel Booking System</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 text-center">
                            <i class="bi bi-building fs-1 text-primary"></i>
                        </div>
                        <p class="card-text">
                            A full-featured hotel management system built with Laravel. This project includes room booking,
                            admin dashboard, payment integration, and user management. Developed with MVC architecture
                            and MySQL database.
                        </p>
                        <div class="tech-stack mb-3">
                            <span class="badge bg-secondary me-1">Laravel</span>
                            <span class="badge bg-secondary me-1">Bootstrap</span>
                            <span class="badge bg-secondary me-1">MySQL</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="https://github.com/Ra-Ha-Til/Hotel-Booking-System-By-Laravel" target="_blank"
                            class="btn btn-outline-primary w-100">
                            <i class="bi bi-github me-2"></i>View on GitHub
                        </a>
                    </div>
                </div>
            </div>

            <!-- E-dokan -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">E-dokan</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 text-center">
                            <i class="bi bi-cart fs-1 text-success"></i>
                        </div>
                        <p class="card-text">
                            An e-commerce mobile application developed with Flutter. Features include product listing,
                            shopping cart, user authentication, and order tracking. Built with Firebase backend for
                            real-time data synchronization.
                        </p>
                        <div class="tech-stack mb-3">
                            <span class="badge bg-secondary me-1">Flutter</span>
                            <span class="badge bg-secondary me-1">Dart</span>
                            <span class="badge bg-secondary me-1">Firebase</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="https://github.com/Ra-Ha-Til/E-Dokan" target="_blank"
                            class="btn btn-outline-success w-100">
                            <i class="bi bi-github me-2"></i>View on GitHub
                        </a>
                    </div>
                </div>
            </div>

            <!-- Basic Calculator -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header bg-info text-white">
                        <h5 class="card-title mb-0">Basic Calculator</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 text-center">
                            <i class="bi bi-calculator fs-1 text-info"></i>
                        </div>
                        <p class="card-text">
                            A simple yet functional calculator application demonstrating fundamental programming concepts.
                            Performs basic arithmetic operations with clean UI. Perfect example of beginner-friendly
                            application development.
                        </p>
                        <div class="tech-stack mb-3">
                            <span class="badge bg-secondary me-1">Dart</span>
                            <span class="badge bg-secondary me-1">Flutter</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="https://github.com/Ra-Ha-Til/basic_calculator" target="_blank"
                            class="btn btn-outline-info w-100">
                            <i class="bi bi-github me-2"></i>View on GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 10px;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .tech-stack {
            min-height: 50px;
        }
    </style>
@endsection