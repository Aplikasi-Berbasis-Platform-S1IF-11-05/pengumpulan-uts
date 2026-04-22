@extends('layouts.admin')

@section('content')
<h2>Skills</h2>

<a href="{{ route('skills.create') }}" class="btn btn-primary mb-3">Tambah Skill</a>

<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <th>Level</th>
        <th>Aksi</th>
    </tr>

    @foreach($skills as $skill)
    <tr>
        <td>{{ $skill->nama_skill }}</td>
        <td>{{ $skill->level }}%</td>
        <td>
            <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-warning btn-sm">Edit</a>

            <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection