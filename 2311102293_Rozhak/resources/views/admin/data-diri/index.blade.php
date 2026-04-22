@extends('layouts.main')

@section('title', 'Data Pribadi')

@section('content')
<div class="row">
    <div class="col-md-3 mb-4">
        <div class="list-group shadow-sm">
            <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">Dashboard Overview</a>
            <a href="{{ route('admin.data-diri.index') }}" class="list-group-item list-group-item-action active">Kelola Data Diri</a>
            <a href="{{ route('admin.skill.index') }}" class="list-group-item list-group-item-action">Kelola Skills</a>
            <a href="{{ route('admin.pencapaian.index') }}" class="list-group-item list-group-item-action">Kelola Pencapaian</a>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="card-title mb-0 fw-bold">Detail Data Pribadi</h5>
            </div>
            <div class="card-body p-4">
                @if ($dataDiri && $dataDiri->id)
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="text-muted small fw-bold text-uppercase">Nama</label>
                            <p class="fs-5">{{ $dataDiri->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted small fw-bold text-uppercase">Email</label>
                            <p class="fs-5">{{ $dataDiri->email ?? '-' }}</p>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted small fw-bold text-uppercase">Telepon</label>
                            <p class="fs-5">{{ $dataDiri->phone ?? '-' }}</p>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted small fw-bold text-uppercase">Alamat</label>
                            <p class="fs-5">{{ $dataDiri->alamat ?? '-' }}</p>
                        </div>
                        <div class="col-12">
                            <label class="text-muted small fw-bold text-uppercase">Bio</label>
                            <div class="bg-light p-3 rounded mt-1">{{ $dataDiri->bio ?? 'Belum ada bio.' }}</div>
                        </div>
                    </div>
                    <div class="mt-4 pt-3 border-top">
                        <a href="{{ route('admin.data-diri.edit') }}" class="btn btn-dark px-4">Edit Data</a>
                    </div>
                @else
                    <div class="text-center py-5">
                        <p class="text-muted">Data pribadi belum diisi.</p>
                        <a href="{{ route('admin.data-diri.edit') }}" class="btn btn-dark">Isi Data Sekarang</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
