@extends('layouts.app')

@section('title', 'Edit Achievement')

@section('content')
    <div class="max-w-md">
        <h2 class="text-xl font-semibold mb-6">Edit Achievement</h2>

        <form action="{{ route('admin.achievements.update', $achievement) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input type="text" name="name" id="name"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @error('name') border-red-400 @enderror"
                    value="{{ old('name', $achievement->name) }}">
                @error('name')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" id="description" rows="4"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @error('description') border-red-400 @enderror">{{ old('description', $achievement->description) }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">Update</button>
                <a href="{{ route('admin.achievements.index') }}" class="px-4 py-2 bg-gray-100 text-gray-600 text-sm rounded hover:bg-gray-200">Cancel</a>
            </div>
        </form>
    </div>
@endsection
