@extends('layouts.app')

@section('content')
    @include('layouts.sections.home')
    @include('layouts.sections.education')
    @include('layouts.sections.skills') {
    @include('layouts.sections.blog')
    @include('layouts.sections.projects')
    @include('layouts.sections.about')
@endsection