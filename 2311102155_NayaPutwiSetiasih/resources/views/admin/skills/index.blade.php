@extends('layouts.app')

@section('title', 'Skills')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold">Skills</h2>
        <a href="{{ route('admin.skills.create') }}" class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">Add Skill</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
        @forelse ($skills as $skill)
            <div class="bg-white border border-gray-200 rounded p-4">
                <div class="flex justify-between items-center mb-3">
                    <span class="font-medium">{{ $skill->name }}</span>
                    <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded">{{ $skill->level }}</span>
                </div>
                <div class="flex gap-2 text-sm">
                    <a href="{{ route('admin.skills.show', $skill) }}" class="text-blue-600 hover:underline">Show</a>
                    <a href="{{ route('admin.skills.edit', $skill) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-gray-400 text-sm col-span-full">No skills found.</p>
        @endforelse
    </div>
@endsection
