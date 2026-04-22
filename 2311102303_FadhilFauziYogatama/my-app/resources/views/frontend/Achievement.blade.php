@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <h2 class="mb-4 text-center">Achievements</h2>

    <div class="row">
        @foreach($achievements as $item)
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold">{{ $item->judul }}</h5>
                        <p class="text-muted">{{ $item->deskripsi }}</p>
                    </div>
                    <div class="card-footer bg-white text-muted">
                        {{ $item->tanggal }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection