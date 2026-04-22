@extends('layouts.admin')

@section('title', 'Achievements')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Achievements</h2>
        <a href="{{ route('admin.achievements.create') }}" class="btn btn-primary">Add Achievement</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($achievements as $achievement)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $achievement->name }}</td>
                    <td>{{ Str::limit($achievement->description, 80) }}</td>
                    <td>
                        <a href="{{ route('admin.achievements.show', $achievement) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('admin.achievements.edit', $achievement) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.achievements.destroy', $achievement) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No achievements found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
