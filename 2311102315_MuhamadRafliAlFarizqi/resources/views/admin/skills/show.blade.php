@extends('layouts.app')

@section('title', 'Skill Details')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h4 class="mb-0">Skill Details</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $skill->name }}</h5>
                    <span class="badge bg-primary mb-3">{{ $skill->level }}</span>
                    <p class="card-text"><small class="text-muted">Created: {{ $skill->created_at->format('d M Y, H:i') }}</small></p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.skills.edit', $skill) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('admin.skills.index') }}" class="btn btn-secondary btn-sm">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
