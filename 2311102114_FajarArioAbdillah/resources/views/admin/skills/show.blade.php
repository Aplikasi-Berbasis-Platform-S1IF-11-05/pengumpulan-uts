@extends('layouts.admin')

@section('title', 'Skill Details')

@section('content')
    <h2>Skill Details</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $skill->name }}</h5>
            <p class="card-text"><strong>Level:</strong> {{ $skill->level }}</p>
            <p class="card-text"><small class="text-muted">Created: {{ $skill->created_at->format('d M Y, H:i') }}</small></p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('admin.skills.edit', $skill) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('admin.skills.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
