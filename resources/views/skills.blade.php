@extends('layouts.app')

@section('title', 'Skills')
@section('content')
    <h1 class="mb-4">My Skills</h1>
    <div class="row">
        @foreach($skills as $skill)
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $skill['name'] }}</h5>
                        <div class="progress skill-progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{ $skill['level'] }}%"
                                aria-valuenow="{{ $skill['level'] }}" aria-valuemin="0" aria-valuemax="100">
                                {{ $skill['level'] }}%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection