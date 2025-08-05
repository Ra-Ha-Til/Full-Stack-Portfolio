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


@endsection