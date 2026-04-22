@extends('layouts.admin')

@section('title', 'Add Skill')

@section('content')
    <h2>Add Skill</h2>

    <form action="{{ route('admin.skills.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <select name="level" id="level" class="form-select @error('level') is-invalid @enderror">
                <option value="">Select Level</option>
                @foreach (['Beginner', 'Intermediate', 'Advanced', 'Expert'] as $level)
                    <option value="{{ $level }}" {{ old('level') == $level ? 'selected' : '' }}>{{ $level }}</option>
                @endforeach
            </select>
            @error('level')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('admin.skills.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
