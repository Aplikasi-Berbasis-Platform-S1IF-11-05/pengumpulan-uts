@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <!-- HERO -->
    <div class="text-center mb-5">
        <h1 class="fw-bold display-4">{{ $profile->nama }}</h1>
        <p class="lead text-muted">Web Developer | Computer Engineering</p>
    </div>

    <!-- ABOUT -->
    <div class="card shadow-lg border-0 p-4 mb-4">
        <h3 class="mb-3">About Me</h3>

        <p><strong>Asal:</strong> {{ $profile->asal }}</p>
        <p><strong>Sekolah:</strong> {{ $profile->sekolah }}</p>
        <p><strong>Tanggal Lahir:</strong>
            {{ \Carbon\Carbon::parse($profile->tanggal_lahir)->format('d M Y') }}
        </p>

        <hr>

        <p class="text-muted">
            {{ $profile->deskripsi }}
        </p>
    </div>

</div>

@endsection