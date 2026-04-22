@extends('layouts.main')

@section('title', 'Edit Skill')

@section('content')
<div class="row">
    <div class="col-md-3 mb-4">
        <div class="list-group shadow-sm">
            <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">Dashboard Overview</a>
            <a href="{{ route('admin.data-diri.index') }}" class="list-group-item list-group-item-action">Kelola Data Diri</a>
            <a href="{{ route('admin.skill.index') }}" class="list-group-item list-group-item-action active">Kelola Skills</a>
            <a href="{{ route('admin.pencapaian.index') }}" class="list-group-item list-group-item-action">Kelola Pencapaian</a>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="card-title mb-0 fw-bold">Edit Keahlian</h5>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('admin.skill.update', $skill) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Nama Skill</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $skill->name) }}" required>
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="level" class="form-label fw-bold">Level Kemampuan</label>
                        <select class="form-select @error('level') is-invalid @enderror" id="level" name="level" required>
                            <option value="Beginner" {{ old('level', $skill->level) == 'Beginner' ? 'selected' : '' }}>Beginner</option>
                            <option value="Intermediate" {{ old('level', $skill->level) == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                            <option value="Advanced" {{ old('level', $skill->level) == 'Advanced' ? 'selected' : '' }}>Advanced</option>
                            <option value="Expert" {{ old('level', $skill->level) == 'Expert' ? 'selected' : '' }}>Expert</option>
                        </select>
                        @error('level') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label fw-bold">Kategori (Opsional)</label>
                        <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" name="category" value="{{ old('category', $skill->category) }}">
                        @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mt-4 border-top pt-3 text-end">
                        <a href="{{ route('admin.skill.index') }}" class="btn btn-outline-secondary me-2">Batal</a>
                        <button type="submit" class="btn btn-dark px-4">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
