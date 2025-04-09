@extends('layouts.app')

@section('title', 'Tasks | Dashboard')

@section('content')
    <div class="main">
        <h1 class="m-4">Tasks</h1>
        @auth
            @if(Auth::user()->teacher)
                @include('components.teachers.register-tasks')
                @include('components.teachers.view-tasks')
            @elseif(Auth::user()->student)

            @endif
    </div>
    @endauth
@endsection
