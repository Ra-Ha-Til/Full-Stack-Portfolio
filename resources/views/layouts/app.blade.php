<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of Ra Ha Til - Flutter Developer and Tech Enthusiast">
    <title>My Portfolio - @yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    <!-- Favicon (optional) -->
    <link rel="icon" href="{{ asset('storage/profile/favicon.ico') }}" type="image/x-icon">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">Ra Ha Til</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ active_menu('home') }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_menu('about') }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_menu('education') }}" href="{{ route('education') }}">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_menu('skills') }}" href="{{ route('skills') }}">Specialization</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_menu('blog') }}" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_menu('projects') }}" href="{{ route('projects') }}">Projects</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mt-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5 class="mb-3">Connect With Me</h5>
                    <ul class="social-list list-unstyled d-flex flex-wrap gap-3">
                        <li>
                            <a href="mailto:your@email.com" class="text-white text-decoration-none">
                                <i class="bi bi-envelope-fill me-2"></i> Email
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/Ra-Ha-Til" class="text-white text-decoration-none">
                                <i class="bi bi-github me-2"></i> GitHub
                            </a>
                        </li>
                        <li>
                            <a href="https://linkedin.com/in/yourprofile" class="text-white text-decoration-none">
                                <i class="bi bi-linkedin me-2"></i> LinkedIn
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/yourhandle" class="text-white text-decoration-none">
                                <i class="bi bi-twitter me-2"></i> Twitter
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <p class="mb-1">© {{ date('Y') }} Ra Ha Til. All rights reserved.</p>
                    <p class="mb-0">Built with passion by Ra Ha Til</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>