@extends('layouts.app')

@section('title', 'Frequencies | Dashboard')

@section('content')
    <div class="main">
        <h1 class="m-4">Frequencies</h1>
        @auth
            @if(Auth::user()->teacher)
                @include('components.teachers.register-frequencies')
                @include('components.teachers.latest-frequencies')
            @elseif(Auth::user()->student)
                @include('components.students.view-frequencies')
            @endif
    </div>
    @endauth
@endsection
