@extends('layouts.admin')

@section('header', 'Manage Skills')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Add Skill Form -->
    <div class="lg:col-span-1">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <h2 class="text-lg font-bold text-gray-900 mb-6">Add New Skill</h2>
            <form action="{{ route('admin.skills.store') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Skill Name</label>
                        <input type="text" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Level (0-100)</label>
                        <input type="number" name="level" min="0" max="100" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <button type="submit" class="w-full bg-indigo-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-indigo-700 transition">
                        Add Skill
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Skills List -->
    <div class="lg:col-span-2">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-gray-50 border-b border-gray-100">
                    <tr>
                        <th class="px-6 py-4 text-sm font-semibold text-gray-600">Skill Name</th>
                        <th class="px-6 py-4 text-sm font-semibold text-gray-600">Level</th>
                        <th class="px-6 py-4 text-sm font-semibold text-gray-600 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($skills as $skill)
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-900 font-medium">{{ $skill->name }}</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-24 bg-gray-200 rounded-full h-2 mr-3">
                                    <div class="bg-indigo-600 h-2 rounded-full" style="width: {{ $skill->level }}%"></div>
                                </div>
                                <span class="text-sm text-gray-600">{{ $skill->level }}%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right space-x-3">
                            <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 text-sm font-medium" onclick="return confirm('Delete this skill?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
