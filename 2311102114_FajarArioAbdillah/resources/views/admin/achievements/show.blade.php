@extends('layouts.admin')

@section('title', 'Achievement Details')

@section('content')
    <h2>Achievement Details</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $achievement->name }}</h5>
            <p class="card-text">{{ $achievement->description }}</p>
            <p class="card-text"><small class="text-muted">Created: {{ $achievement->created_at->format('d M Y, H:i') }}</small></p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('admin.achievements.edit', $achievement) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('admin.achievements.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
