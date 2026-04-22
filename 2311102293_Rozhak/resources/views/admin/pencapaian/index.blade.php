@extends('layouts.main')

@section('title', 'Kelola Pencapaian')

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
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0 fw-bold">Daftar Pencapaian</h5>
                <a href="{{ route('admin.pencapaian.create') }}" class="btn btn-dark btn-sm"> Tambah Pencapaian</a>
            </div>
            <div class="card-body">
                @if (count($pencapaians) > 0)
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Nama Pencapaian</th>
                                    <th>Tanggal</th>
                                    <th>Kategori</th>
                                    <th class="text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pencapaians as $achievement)
                                    <tr>
                                        <td>
                                            <div class="fw-bold">{{ $achievement->name }}</div>
                                            <small class="text-muted">{{ Str::limit($achievement->description, 50) }}</small>
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($achievement->date)->format('d M Y') }}</td>
                                        <td><span class="badge bg-info text-dark">{{ $achievement->category ?? '-' }}</span></td>
                                        <td class="text-end">
                                            <a href="{{ route('admin.pencapaian.edit', $achievement) }}" class="btn btn-outline-dark btn-sm me-1">Edit</a>
                                            <form method="POST" action="{{ route('admin.pencapaian.destroy', $achievement) }}" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-5">
                        <p class="text-muted">Belum ada data pencapaian.</p>
                        <a href="{{ route('admin.pencapaian.create') }}" class="btn btn-dark">Tambah Sekarang</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
