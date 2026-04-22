@extends('layouts.app')

@section('title', 'Achievement Details')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h4 class="mb-0">Achievement Details</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $achievement->name }}</h5>
                    <p class="card-text">{{ $achievement->description }}</p>
                    <p class="card-text"><small class="text-muted">Created: {{ $achievement->created_at->format('d M Y, H:i') }}</small></p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.achievements.edit', $achievement) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('admin.achievements.index') }}" class="btn btn-secondary btn-sm">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
