@extends('layouts.admin')

@section('title', 'Portofolio')

@section('content')
    <div class="container vh-75">
        <div class="row h-100 align-items-center">
            <div class="col text-center">
                <img src="{{ asset('Tegar.jpeg') }}" alt="Profile Image" class="img-fluid rounded-circle mb-3"
                    style="max-width: 200px;">
                <h1 class="display-4">Selamat Datang di Portofolio Saya</h1>
                <p class="lead">Skil dan Penghargaan Saya</p>
                <a href="{{ route('admin.skills.index') }}" class="btn btn-primary btn-lg">Admin Panel</a>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="mb-4">Tentang Saya</h2>
        <p>Hello! I'm Ario, saya bakat dibidang pembangunan Website dalam AI. Saya suka sebagai prompter.</p>

        <h2 class="mb-4">Kontak Saya</h2>
        <p>Jika ingin melihat Email, gratis untuk Anda <a href="mailto:arioabdillah05@gmail.com">
                arioabdillah05@gmail.com
            </a> atau koneksi Linkedin Saya <a href="https://www.linkedin.com/in/fajar-ario/" target="_blank">LinkedIn</a>.</p>
    </div>


    <div class="container">
        <h2 class="mb-4">Skil</h2>
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
        <h2 class="mb-4">Penghargaan</h2>
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
