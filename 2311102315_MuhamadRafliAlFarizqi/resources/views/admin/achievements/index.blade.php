@extends('layouts.app')

@section('title', 'Achievements')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Achievements</h2>
        <a href="{{ route('admin.achievements.create') }}" class="btn btn-primary">Add Achievement</a>
    </div>

    <div class="row">
        @forelse ($achievements as $achievement)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $achievement->name }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($achievement->description, 100) }}</p>
                        <div class="mt-auto">
                            <a href="{{ route('admin.achievements.show', $achievement) }}" class="btn btn-info btn-sm">Show</a>
                            <a href="{{ route('admin.achievements.edit', $achievement) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.achievements.destroy', $achievement) }}" method="POST" class="d-inline"
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
                    <div class="card-body text-center text-muted">No achievements found.</div>
                </div>
            </div>
        @endforelse
    </div>
@endsection
