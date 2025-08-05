@extends('layouts.app')

@section('title', 'Specializations & Skills')
@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-5">My Technical Expertise</h1>

        <div class="row">
            <!-- Specializations Section -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h5 mb-0">
                            <i class="bi bi-stars me-2"></i>Specializations
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="row row-cols-2 row-cols-md-3 g-4">
                            @foreach(['Laravel', 'PHP', 'Flutter', 'Dart', 'JavaScript', 'Python', 'C++', 'MySQL'] as $tech)
                                <div class="col">
                                    <div class="tech-card text-center p-3 border rounded hover-effect">
                                        <i class="bi bi-code-square fs-3 text-primary mb-2"></i>
                                        <h3 class="h6 mb-0">{{ $tech }}</h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skills Section -->
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h2 class="h5 mb-0">
                            <i class="bi bi-graph-up me-2"></i>Skills Proficiency
                        </h2>
                    </div>
                    <div class="card-body">
                        @foreach([
                                ['name' => 'Laravel', 'level' => 85, 'color' => 'bg-primary'],
                                ['name' => 'PHP', 'level' => 80, 'color' => 'bg-info'],
                                ['name' => 'Flutter', 'level' => 75, 'color' => 'bg-success'],
                                ['name' => 'JavaScript', 'level' => 70, 'color' => 'bg-warning'],
                                ['name' => 'Python', 'level' => 65, 'color' => 'bg-secondary'],
                                ['name' => 'MySQL', 'level' => 75, 'color' => 'bg-danger']
                            ] as $skill)
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="fw-medium">{{ $skill['name'] }}</span>
                                    <span>{{ $skill['level'] }}%</span>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar {{ $skill['color'] }} progress-bar-striped progress-bar-animated"
                                        role="progressbar" style="width: {{ $skill['level'] }}%"
                                        aria-valuenow="{{ $skill['level'] }}" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Skills Section -->
        <div class="card mt-4 shadow-sm">
            <div class="card-header bg-info text-white">
                <h2 class="h5 mb-0">
                    <i class="bi bi-tools me-2"></i>Additional Capabilities
                </h2>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    @foreach([
                            'REST API Development',
                            'Firebase Integration',
                            'Git Version Control',
                            'Bootstrap Framework',
                            'Problem Solving',
                            'Agile Methodologies'
                        ] as $skill)
                            <div class="col-md-4 col-6">
                                <div class="d-flex align-items-center">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>{{ $skill }}</span>
                                </div>
                            </div>
                    @endforeach
                </div>
                </div>
            </div>
        </div>

    <style>
        .hover-effect {
            transition: all 0.3s ease;
        }

    .hover-effect:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .tech-card {
        transition: all 0.3s ease;
        cursor: default;
    }

    .progress-bar {
        border-radius: 5px;
    }
    </style>
@endsection