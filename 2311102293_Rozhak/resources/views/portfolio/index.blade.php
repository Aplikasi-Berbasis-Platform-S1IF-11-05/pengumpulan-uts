@extends('layouts.main')

@section('title', 'Portofolio Rozhak')

@section('content')
    <!-- Hero Section -->
    <div class="row py-5 mb-5 border-bottom">
        <div class="col-lg-8">
            @if ($dataDiri->id ?? false)
                <h1 class="display-3 fw-bold tracking-tight mb-3" style="letter-spacing: -0.04em;">{{ $dataDiri->name }}</h1>
                <p class="lead text-muted mb-4" style="font-size: 1.25rem;">{{ $dataDiri->bio }}</p>
                <div class="d-flex gap-3 text-muted small fw-medium">
                    <span>{{ $dataDiri->email }}</span>
                    <span>&bull;</span>
                    <span>{{ $dataDiri->phone }}</span>
                </div>
                <div class="mt-4">
                    @if ($dataDiri->github_url)
                        <a href="{{ $dataDiri->github_url }}" target="_blank" class="btn btn-dark">GitHub</a>
                    @endif
                    @if ($dataDiri->linkedin_url)
                        <a href="{{ $dataDiri->linkedin_url }}" target="_blank" class="btn btn-outline-dark border-1 ms-2">LinkedIn</a>
                    @endif
                </div>
            @else
                <h1 class="display-3 fw-bold mb-3">Welcome.</h1>
                <p class="lead text-muted">Selamat datang di portofolio saya. Silakan isi data di admin panel.</p>
            @endif
        </div>
    </div>

    <!-- Content Sections -->
    <div class="row">
        <!-- Skills -->
        <div class="col-md-6 mb-4">
            <h4 class="fw-bold mb-4">Skills</h4>
            <div class="d-flex flex-column gap-3">
                @forelse ($skills as $skill)
                    <div class="v-card">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-semibold">{{ $skill->name }}</span>
                            <span class="badge rounded-pill text-dark border fw-medium" style="background: #f0f0f0; font-size: 0.75rem;">{{ $skill->level }}</span>
                        </div>
                    </div>
                @empty
                    <p class="text-muted small">No skills listed yet.</p>
                @endforelse
            </div>
        </div>

        <!-- Achievements -->
        <div class="col-md-6 mb-4">
            <h4 class="fw-bold mb-4">Achievements</h4>
            <div class="d-flex flex-column gap-3">
                @forelse ($pencapaians as $achievement)
                    <div class="v-card">
                        <div class="text-muted small mb-1">{{ \Carbon\Carbon::parse($achievement->date)->format('M Y') }}</div>
                        <h6 class="fw-bold mb-2">{{ $achievement->name }}</h6>
                        <p class="small text-muted mb-0">{{ $achievement->description }}</p>
                    </div>
                @empty
                    <p class="text-muted small">No achievements listed yet.</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
