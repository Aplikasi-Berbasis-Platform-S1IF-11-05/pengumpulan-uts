@extends('layouts.app')

@section('content')

<h2 class="mb-4">Dashboard Admin</h2>

<div class="row">

<!-- PROFILE -->
<div class="col-md-4">
    <div class="card mb-4">
        <div class="card-header">Edit Profile</div>
        <div class="card-body">
            <form method="POST" action="/profile">
                @csrf
                <input name="name" value="{{ $profile->name }}" class="form-control mb-2">
                <input name="age" value="{{ $profile->age }}" class="form-control mb-2">
                <button class="btn btn-success w-100">Update</button>
            </form>
        </div>
    </div>
</div>

<!-- SKILL -->
<div class="col-md-4">
    <div class="card mb-4">
        <div class="card-header">Skill</div>
        <div class="card-body">
            <ul class="list-group mb-3">
                @foreach($skills as $skill)
                    <li class="list-group-item d-flex justify-content-between">
                        {{ $skill->name }}
                        <a href="/skill/delete/{{ $skill->id }}" class="btn btn-danger btn-sm">Hapus</a>
                    </li>
                @endforeach
            </ul>

            <form method="POST" action="/skill">
                @csrf
                <input name="name" class="form-control mb-2" placeholder="Tambah skill">
                <button class="btn btn-primary w-100">Tambah</button>
            </form>
        </div>
    </div>
</div>

<!-- ACHIEVEMENT -->
<div class="col-md-4">
    <div class="card mb-4">
        <div class="card-header">Achievement</div>
        <div class="card-body">
            <ul class="list-group mb-3">
                @foreach($achievements as $a)
                    <li class="list-group-item d-flex justify-content-between">
                        {{ $a->title }}
                        <a href="/achievement/delete/{{ $a->id }}" class="btn btn-danger btn-sm">Hapus</a>
                    </li>
                @endforeach
            </ul>

            <form method="POST" action="/achievement">
                @csrf
                <input name="title" class="form-control mb-2" placeholder="Judul">
                <input name="description" class="form-control mb-2" placeholder="Deskripsi">
                <button class="btn btn-primary w-100">Tambah</button>
            </form>
        </div>
    </div>
</div>

</div>
<a href="/skill/delete/{{ $skill->id }}" 
   class="btn btn-danger btn-sm"
   onclick="return confirm('Yakin hapus data ini?')">
   Hapus
</a>

@endsection