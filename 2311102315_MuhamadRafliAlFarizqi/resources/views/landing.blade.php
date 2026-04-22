@extends('layouts.app')

@section('title', 'Code With Rafli')

@section('content')
    <div class="container vh-75">
        <div class="row h-100 align-items-center">
            <div class="col text-center">
                <img src="{{ asset('profile.png') }}" alt="Profile Image" class="img-fluid rounded-circle mb-3"
                    style="max-width: 200px;">
                <h1 class="display-4">Welcome to My Portfolio</h1>
                <p class="lead">Showcasing my skills and achievements</p>
                <a href="{{ route('admin.skills.index') }}" class="btn btn-primary btn-lg">View Admin Panel</a>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="mb-4">About Me</h2>
        <p>Hello! I'm Rafli, a passionate developer with experience in web development, mobile apps, and more. I love
            creating innovative solutions and continuously learning new technologies.</p>

        <h2 class="mb-4">Contact Me</h2>
        <p>If you'd like to get in touch, feel free to reach out via email at <a href="mailto:codewithrafli@gmail.com">
                codewithrafli@gmail.com
            </a> or connect with me on <a href="https://www.linkedin.com/in/rafliaf/" target="_blank">LinkedIn</a>.</p>
    </div>


    <div class="container">
        <h2 class="mb-4">Skills</h2>
        <div class="row">
            @foreach ($skills as $skill)
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $skill->name }}</h5>
                            <p class="card-text">Level: {{ $skill->level }}</p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <div class="container">
        <h2 class="mb-4">Achievements</h2>
        <div class="row">
            @foreach ($achievements as $achievement)
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $achievement->name }}</h5>
                            <p class="card-text">Description: {{ $achievement->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
