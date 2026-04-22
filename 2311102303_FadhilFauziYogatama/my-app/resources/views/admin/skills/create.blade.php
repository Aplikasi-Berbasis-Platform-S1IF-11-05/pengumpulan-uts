@extends('layouts.admin')

@section('content')
<h2>Tambah Skill</h2>

<form method="POST" action="{{ route('skills.store') }}">
    @csrf

    <div class="mb-3">
        <label>Nama Skill</label>
        <input type="text" name="nama_skill" class="form-control">
    </div>

    <div class="mb-3">
        <label>Level (%)</label>
        <input type="number" name="level" class="form-control">
    </div>

    <button class="btn btn-success">Simpan</button>
</form>
@endsection