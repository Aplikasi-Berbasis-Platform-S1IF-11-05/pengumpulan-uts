@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
<div class="container py-5">

    {{-- HERO SECTION --}}
    <div class="text-center mb-5">
        <img src="{{ asset('Profil.jpg') }}" 
             class="rounded-circle shadow mb-3" 
             style="width:150px; height:150px; object-fit:cover;">

        <h1 class="fw-bold">Tegar Casper</h1>
        <p class="text-muted">Web Developer | Gaming | Bisnis</p>

        <a href="{{ route('admin.skills.index') }}" class="btn btn-dark px-4">
            Admin Panel
        </a>
    </div>

    {{-- ABOUT --}}
    <div class="mb-5">
        <h3 class="fw-semibold border-bottom pb-2">About Me</h3>
        <p class="text-muted mt-3">
            Saya seorang developer yang fokus pada pengembangan web dan aplikasi. 
            Tertarik pada solusi berbasis teknologi dan terus belajar untuk meningkatkan skill.
        </p>
    </div>

    {{-- CONTACT --}}
    <div class="mb-5">
        <h3 class="fw-semibold border-bottom pb-2">Contact</h3>
        <p class="mt-3">
            Email: 
            <a href="mailto:ahmadtegarka@gmail.com" class="text-decoration-none">
                ahmadtegarka@gmail.com
            </a>
            <br>
            LinkedIn:
            <a href="https://www.linkedin.com/in/ahmad-tegar-k-a-50134b405" target="_blank">
                Profile
            </a>
        </p>
    </div>

    {{-- SKILLS --}}
    <div class="mb-5">
        <h3 class="fw-semibold border-bottom pb-2">Skills</h3>
        <div class="row mt-3">
            @foreach ($skills as $skill)
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">{{ $skill->name }}</h5>
                            <span class="badge bg-primary mt-2">
                                {{ $skill->level }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- ACHIEVEMENTS --}}
    <div>
        <h3 class="fw-semibold border-bottom pb-2">Achievements</h3>
        <div class="row mt-3">
            @foreach ($achievements as $achievement)
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="fw-bold">{{ $achievement->name }}</h5>
                            <p class="text-muted small mt-2">
                                {{ $achievement->description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection