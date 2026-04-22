@extends('layouts.app')

@section('title', 'Skills')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Skills</h2>
        <a href="{{ route('admin.skills.create') }}" class="btn btn-primary">Add Skill</a>
    </div>

    <div class="row">
        @forelse ($skills as $skill)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $skill->name }}</h5>
                        <span class="badge bg-primary mb-3 align-self-start">{{ $skill->level }}</span>
                        <div class="mt-auto">
                            <a href="{{ route('admin.skills.show', $skill) }}" class="btn btn-info btn-sm">Show</a>
                            <a href="{{ route('admin.skills.edit', $skill) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center text-muted">No skills found.</div>
                </div>
            </div>
        @endforelse
    </div>
@endsection
