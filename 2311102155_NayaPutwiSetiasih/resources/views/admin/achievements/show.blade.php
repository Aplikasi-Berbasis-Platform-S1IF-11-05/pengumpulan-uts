@extends('layouts.app')

@section('title', 'Achievement Details')

@section('content')
    <div class="max-w-md">
        <h2 class="text-xl font-semibold mb-6">Achievement Details</h2>

        <div class="bg-white border border-gray-200 rounded p-5">
            <h3 class="font-medium text-lg">{{ $achievement->name }}</h3>
            <p class="mt-2 text-sm text-gray-600">{{ $achievement->description }}</p>
            <p class="mt-2 text-sm text-gray-400">Created: {{ $achievement->created_at->format('d M Y, H:i') }}</p>
        </div>

        <div class="mt-4 flex gap-3">
            <a href="{{ route('admin.achievements.edit', $achievement) }}" class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">Edit</a>
            <a href="{{ route('admin.achievements.index') }}" class="px-4 py-2 bg-gray-100 text-gray-600 text-sm rounded hover:bg-gray-200">Back</a>
        </div>
    </div>
@endsection
