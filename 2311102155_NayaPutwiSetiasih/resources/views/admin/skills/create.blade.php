@extends('layouts.app')

@section('title', 'Add Skill')

@section('content')
    <div class="max-w-md">
        <h2 class="text-xl font-semibold mb-6">Add Skill</h2>

        <form action="{{ route('admin.skills.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input type="text" name="name" id="name"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @error('name') border-red-400 @enderror"
                    value="{{ old('name') }}">
                @error('name')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="level" class="block text-sm font-medium text-gray-700 mb-1">Level</label>
                <select name="level" id="level"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @error('level') border-red-400 @enderror">
                    <option value="">Select Level</option>
                    @foreach (['Beginner', 'Intermediate', 'Advanced', 'Expert'] as $level)
                        <option value="{{ $level }}" {{ old('level') == $level ? 'selected' : '' }}>{{ $level }}</option>
                    @endforeach
                </select>
                @error('level')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">Save</button>
                <a href="{{ route('admin.skills.index') }}" class="px-4 py-2 bg-gray-100 text-gray-600 text-sm rounded hover:bg-gray-200">Cancel</a>
            </div>
        </form>
    </div>
@endsection
