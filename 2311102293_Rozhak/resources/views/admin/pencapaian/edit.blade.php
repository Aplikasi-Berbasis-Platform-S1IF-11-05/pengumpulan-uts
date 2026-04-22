@extends('layouts.main')

@section('title', 'Edit Pencapaian')

@section('content')
<div class="row">
    <div class="col-md-3 mb-4">
        <div class="list-group shadow-sm">
            <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">Dashboard Overview</a>
            <a href="{{ route('admin.data-diri.index') }}" class="list-group-item list-group-item-action">Kelola Data Diri</a>
            <a href="{{ route('admin.skill.index') }}" class="list-group-item list-group-item-action">Kelola Skills</a>
            <a href="{{ route('admin.pencapaian.index') }}" class="list-group-item list-group-item-action active">Kelola Pencapaian</a>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="card-title mb-0 fw-bold">Edit Pencapaian</h5>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('admin.pencapaian.update', $pencapaian) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Nama Pencapaian / Sertifikat</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $pencapaian->name) }}" required>
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label fw-bold">Tanggal Perolehan</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date', $pencapaian->date) }}" required>
                        @error('date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label fw-bold">Kategori (Opsional)</label>
                        <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" name="category" value="{{ old('category', $pencapaian->category) }}">
                        @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label fw-bold">Deskripsi Singkat (Opsional)</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description', $pencapaian->description) }}</textarea>
                        @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mt-4 border-top pt-3 text-end">
                        <a href="{{ route('admin.pencapaian.index') }}" class="btn btn-outline-secondary me-2">Batal</a>
                        <button type="submit" class="btn btn-dark px-4">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
