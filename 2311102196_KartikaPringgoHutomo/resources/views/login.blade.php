@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">Login Admin</div>
            <div class="card-body">
                <form method="POST" action="/admin">
                    @csrf
                    <input type="password" name="password" class="form-control mb-3" placeholder="Password">
                    <button class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection