@extends('layouts.app')

@section('title', 'Achievements')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold">Achievements</h2>
        <a href="{{ route('admin.achievements.create') }}" class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">Add Achievement</a>
    </div>

    <div class="space-y-3">
        @forelse ($achievements as $achievement)
            <div class="bg-white border border-gray-200 rounded p-4">
                <h3 class="font-medium">{{ $achievement->name }}</h3>
                <p class="mt-1 text-sm text-gray-500">{{ Str::limit($achievement->description, 100) }}</p>
                <div class="mt-3 flex gap-2 text-sm">
                    <a href="{{ route('admin.achievements.show', $achievement) }}" class="text-blue-600 hover:underline">Show</a>
                    <a href="{{ route('admin.achievements.edit', $achievement) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('admin.achievements.destroy', $achievement) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-gray-400 text-sm">No achievements found.</p>
        @endforelse
    </div>
@endsection
