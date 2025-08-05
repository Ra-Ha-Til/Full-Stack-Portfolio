@extends('layouts.app')

@section('title', 'Specialization')
@section('content')
    <h1 class="mb-4">My Technical Specializations</h1>
    <div class="row">
        @foreach($technologies as $tech)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi bi-code-square fs-1"></i>
                        <h5 class="card-title mt-2">{{ $tech }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection