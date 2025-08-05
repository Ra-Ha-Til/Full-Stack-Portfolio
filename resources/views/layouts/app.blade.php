<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            padding-top: 56px;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .education-img {
            height: 100px;
            object-fit: contain;
        }

        .skill-progress {
            height: 25px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Ra Ha Til</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('education') }}">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('skills') }}">Specialization</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects') }}">Projects</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- New Footer Section for Home Page Only -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5>Connect With Me</h5>
                    <ol class="list-unstyled d-flex flex-wrap gap-3">
                        <li>
                            <a href="mailto:your@email.com" class="text-white text-decoration-none">
                                <i class="bi bi-envelope-fill me-2"></i> Email
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/yourusername" class="text-white text-decoration-none">
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
                    </ol>
                </div>
                <div class="col-md-4 text-md-end">
                    <p class="mb-1">© {{ date('Y') }}Ra Ha Til. All rights reserved.</p>
                    <p class="mb-0">Built it by Ra Ha Til</p>
                </div>
            </div>
        </div>
    </footer>

    <style>
        footer a {
            transition: all 0.3s ease;
        }

        footer a:hover {
            color: var(--bs-primary) !important;
            transform: translateX(5px);
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>