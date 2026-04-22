@extends('layouts.admin')

@section('content')
<h2>Edit Skill</h2>

<form method="POST" action="{{ route('skills.update', $skill->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Skill</label>
        <input type="text" name="nama_skill" value="{{ $skill->nama_skill }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Level (%)</label>
        <input type="number" name="level" value="{{ $skill->level }}" class="form-control">
    </div>

    <button class="btn btn-success">Update</button>
</form>
@endsection