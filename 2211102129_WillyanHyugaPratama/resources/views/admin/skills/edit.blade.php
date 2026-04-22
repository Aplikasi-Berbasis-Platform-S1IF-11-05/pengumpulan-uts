@extends('layouts.admin')

@section('title', isset($skill) ? 'Edit Skill' : 'Add New Skill')

@section('content')
<div class="max-w-2xl">
    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
        <div class="p-10">
            <form action="{{ isset($skill) ? route('admin.skills.update', $skill->id) : route('admin.skills.store') }}" method="POST" class="space-y-6">
                @csrf
                @if(isset($skill)) @method('PUT') @endif
                
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-700 uppercase tracking-wider">Skill Name</label>
                    <input type="text" name="name" value="{{ old('name', $skill->name ?? '') }}" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 outline-none transition-all font-medium" placeholder="e.g. Machine Learning" required>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-700 uppercase tracking-wider">Category</label>
                    <input type="text" name="category" value="{{ old('category', $skill->category ?? '') }}" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 outline-none transition-all font-medium" placeholder="e.g. Technical">
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-700 uppercase tracking-wider">Level (%)</label>
                    <input type="number" name="level" value="{{ old('level', $skill->level ?? 100) }}" min="0" max="100" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 outline-none transition-all font-medium" required>
                </div>

                <div class="flex justify-end pt-4 space-x-4">
                    <a href="{{ route('admin.skills.index') }}" class="px-8 py-4 rounded-2xl font-bold text-slate-500 hover:bg-slate-50 transition-all">Cancel</a>
                    <button type="submit" class="bg-indigo-600 text-white px-10 py-4 rounded-2xl font-bold hover:bg-indigo-700 transition-all shadow-lg shadow-indigo-100">
                        {{ isset($skill) ? 'Update Skill' : 'Create Skill' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
