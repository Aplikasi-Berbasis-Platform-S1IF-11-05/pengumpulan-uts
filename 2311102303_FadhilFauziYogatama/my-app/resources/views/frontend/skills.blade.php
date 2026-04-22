@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <h2 class="mb-4 text-center">My Skills</h2>

    @foreach($skills as $skill)
        <div class="mb-4">
            <div class="d-flex justify-content-between">
                <strong>{{ $skill->nama_skill }}</strong>
                <span>{{ $skill->level }}%</span>
            </div>

            <div class="progress" style="height: 20px;">
                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                     style="width: {{ $skill->level }}%">
                </div>
            </div>
        </div>
    @endforeach

</div>

@endsection