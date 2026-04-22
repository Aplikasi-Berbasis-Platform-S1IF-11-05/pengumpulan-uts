@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-6">Dashboard</h1>

<div class="grid grid-cols-3 gap-6">

    <div class="bg-white p-5 shadow rounded">
        <h2 class="text-xl font-semibold">Total Skill</h2>
        <p class="text-2xl mt-2">{{ $skills->count() }}</p>
    </div>

    <div class="bg-white p-5 shadow rounded">
        <h2 class="text-xl font-semibold">Achievement</h2>
        <p class="text-2xl mt-2">{{ $achievements->count() }}</p>
    </div>

    <div class="bg-white p-5 shadow rounded">
        <h2 class="text-xl font-semibold">Profile</h2>
        <p class="text-2xl mt-2">{{ $profile ? 'Ada' : 'Kosong' }}</p>
    </div>

</div>

@endsection