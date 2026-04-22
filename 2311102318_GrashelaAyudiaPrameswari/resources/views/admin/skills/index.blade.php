@extends('layouts.app')

@section('title', 'Skills')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Skills</h2>
        <a href="{{ route('admin.skills.create') }}" class="btn btn-primary">Add Skill</a>
    </div>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($skills as $skill)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $skill->name }}</td>
                    <td><span class="badge bg-primary">{{ $skill->level }}</span></td>
                    <td>
                        <a href="{{ route('admin.skills.show', $skill) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('admin.skills.edit', $skill) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No skills found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
