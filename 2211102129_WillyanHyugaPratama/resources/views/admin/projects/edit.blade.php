@extends('layouts.admin')

@section('title', isset($project) ? 'Edit Item' : 'Add New Project/Achievement')

@section('content')
<div class="max-w-3xl">
    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
        <div class="p-10">
            <form action="{{ isset($project) ? route('admin.projects.update', $project->id) : route('admin.projects.store') }}" method="POST" class="space-y-6">
                @csrf
                @if(isset($project)) @method('PUT') @endif
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700 uppercase tracking-wider">Title</label>
                        <input type="text" name="title" value="{{ old('title', $project->title ?? '') }}" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 outline-none transition-all font-medium" required>
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700 uppercase tracking-wider">Type</label>
                        <select name="type" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 outline-none transition-all font-medium">
                            <option value="project" {{ (old('type', $project->type ?? '') == 'project') ? 'selected' : '' }}>Project</option>
                            <option value="achievement" {{ (old('type', $project->type ?? '') == 'achievement') ? 'selected' : '' }}>Achievement</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700 uppercase tracking-wider">Role</label>
                        <input type="text" name="role" value="{{ old('role', $project->role ?? '') }}" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 outline-none transition-all font-medium" placeholder="e.g. Front-End">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700 uppercase tracking-wider">Year</label>
                        <input type="text" name="year" value="{{ old('year', $project->year ?? '') }}" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 outline-none transition-all font-medium" placeholder="e.g. 2024">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-700 uppercase tracking-wider">Description</label>
                    <textarea name="description" rows="4" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 outline-none transition-all font-medium" required>{{ old('description', $project->description ?? '') }}</textarea>
                </div>

                <div class="flex justify-end pt-4 space-x-4">
                    <a href="{{ route('admin.projects.index') }}" class="px-8 py-4 rounded-2xl font-bold text-slate-500 hover:bg-slate-50 transition-all">Cancel</a>
                    <button type="submit" class="bg-indigo-600 text-white px-10 py-4 rounded-2xl font-bold hover:bg-indigo-700 transition-all shadow-lg shadow-indigo-100">
                        {{ isset($project) ? 'Update Item' : 'Create Item' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
