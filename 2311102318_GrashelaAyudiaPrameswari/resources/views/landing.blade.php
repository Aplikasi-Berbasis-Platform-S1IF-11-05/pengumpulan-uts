@extends('layouts.app')

@section('title', 'Grashela Ayudia Prameswari - Portfolio')

@section('content')
    {{-- Hero: foto di kiri, teks di kanan (beda dari Rafli yang center semua) --}}
    <div class="row align-items-center py-5">
        <div class="col-md-4 text-center">
            <img src="{{ asset('shela.jpeg') }}" alt="Grashela Ayudia" class="rounded-circle img-fluid mb-3"
                style="width: 200px; height: 200px; object-fit: cover; border: 4px solid #e91e90;">
        </div>
        <div class="col-md-8">
            <h1 class="display-5 fw-bold">Grashela Ayudia Prameswari</h1>
            <p class="lead text-muted">Aspiring Developer & Tech Enthusiast</p>
            <hr>
            <p>Hello! I'm Grashela, a passionate learner interested in web development and technology.
                I enjoy building creative solutions and exploring new frameworks to expand my skill set.</p>
            @auth
                <a href="{{ route('admin.skills.index') }}" class="btn btn-primary">View Admin Panel</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Login to Admin</a>
            @endauth
        </div>
    </div>

    {{-- Contact: inline list (beda dari Rafli yang paragraf) --}}
    <div class="card mb-4">
        <div class="card-body">
            <h4 class="card-title">Contact Me</h4>
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><strong>Email:</strong> <a href="mailto:grashelaayudia19@gmail.com">grashelaayudia19@gmail.com</a></li>
                <li class="list-inline-item">|</li>
                <li class="list-inline-item"><strong>LinkedIn:</strong> <a href="#">grashela-ayudia</a></li>
            </ul>
        </div>
    </div>

    {{-- Skills: tabel (beda dari Rafli yang card grid) --}}
    <h2 class="mb-3">Skills</h2>
    <div class="table-responsive mb-4">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Skill Name</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($skills as $skill)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $skill->name }}</td>
                        <td><span class="badge bg-primary">{{ $skill->level }}</span></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center text-muted">No skills yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Achievements: list group (beda dari Rafli yang card grid) --}}
    <h2 class="mb-3">Achievements</h2>
    <div class="list-group mb-5">
        @forelse ($achievements as $achievement)
            <div class="list-group-item">
                <h5 class="mb-1">{{ $achievement->name }}</h5>
                <p class="mb-0 text-muted">{{ $achievement->description }}</p>
            </div>
        @empty
            <div class="list-group-item text-center text-muted">No achievements yet.</div>
        @endforelse
    </div>
@endsection
