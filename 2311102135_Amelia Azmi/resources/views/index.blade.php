@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-6">Dashboard</h1>

<div class="grid grid-cols-3 gap-4">

    <div class="bg-white p-5 rounded shadow">
        <h2 class="text-lg">Total Skill</h2>
        <p class="text-2xl">{{ $skills->count() ?? 0 }}</p>
    </div>

    <div class="bg-white p-5 rounded shadow">
        <h2 class="text-lg">Achievement</h2>
        <p class="text-2xl">{{ $achievements->count() ?? 0 }}</p>
    </div>

    <div class="bg-white p-5 rounded shadow">
        <h2 class="text-lg">Profile</h2>
        <p class="text-2xl">{{ $profile ? 'Ada' : 'Kosong' }}</p>
    </div>

</div>

@endsection