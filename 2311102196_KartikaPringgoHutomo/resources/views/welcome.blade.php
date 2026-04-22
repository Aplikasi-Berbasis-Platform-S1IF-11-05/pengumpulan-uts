@extends('layouts.app')

@section('content')

<div class="card mb-4">
    <div class="card-body">
        <h3>Data Diri</h3>
        <p><b>Nama:</b> {{ $profile->name }}</p>
        <p><b>Umur:</b> {{ $profile->age }} Tahun</p>
        <p>{{ $profile->bio }}</p>
    </div>
</div>

<div class="card mb-4">
    <div class="card-body">
        <h3>Skill</h3>
        <ul>
            @foreach($skills as $skill)
                <li>{{ $skill->name }}</li>
            @endforeach
        </ul>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h3>Achievement</h3>
        <ul>
            @foreach($achievements as $a)
                <li><b>{{ $a->title }}</b> - {{ $a->description }}</li>
            @endforeach
        </ul>
    </div>
</div>

@endsection