
@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h1 class="display-4 fw-bold">Rakha Yudhistira</h1>
    <p class="text-muted">Skill dan Achievement</p>
</div>

<div class="row">
    @foreach($portos as $porto)
    <div class="col-md-4 mb-4">
        <div class="card shadow-lg ">
            <div class="card-body text-center">
                <h5 class="fw-bold">{{ $porto->name }}</h5>
                <p class="text-muted small">{{ $porto->description }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection