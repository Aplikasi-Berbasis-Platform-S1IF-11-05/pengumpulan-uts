@extends('layouts.main')

@section('content')

<h3 class="mb-4">Manage Skills</h3>

<!-- Form Tambah -->
<div class="card mb-4 shadow">
    <div class="card-body">
        <form action="/skills" method="POST" class="row g-2">
            @csrf

            <div class="col-md-5">
                <input type="text" name="name" class="form-control"
                    placeholder="Nama Skill" required>
            </div>

            <div class="col-md-3">
                <input type="number" name="level" class="form-control"
                    placeholder="Level (%)" required>
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary w-100">Tambah</button>
            </div>
        </form>
    </div>
</div>

<!-- Table -->
<div class="card shadow">
    <div class="card-body">

        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>Skill</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
            @foreach($skills as $skill)
                <tr>
                    <td>{{ $skill->name }}</td>
                    <td>{{ $skill->level }}%</td>
                    <td>
                        <form action="/skills/{{ $skill->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

    </div>
</div>

@endsection