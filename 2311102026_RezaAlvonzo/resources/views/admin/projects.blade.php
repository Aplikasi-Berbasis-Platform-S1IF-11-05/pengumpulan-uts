@extends('layouts.admin')

@section('page_title', 'Manage Projects')

@section('content')
<div class="mb-12">
    <div class="bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden">
        <div class="p-8 border-b border-slate-100">
            <h3 class="font-bold text-slate-800">Add New Project</h3>
        </div>
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="p-8">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-500 uppercase">Project Title</label>
                    <input type="text" name="title" required class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-2 focus:border-blue-500 outline-none">
                </div>
                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-500 uppercase">Role</label>
                    <input type="text" name="role" placeholder="e.g. Lead Developer" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-2 focus:border-blue-500 outline-none">
                </div>
                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-500 uppercase">Year</label>
                    <input type="text" name="year" placeholder="e.g. 2025" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-2 focus:border-blue-500 outline-none">
                </div>
                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-500 uppercase">Project Image</label>
                    <input type="file" name="image" class="w-full text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </div>
                <div class="md:col-span-2 space-y-1">
                    <label class="text-xs font-bold text-slate-500 uppercase">Short Description</label>
                    <input type="text" name="description" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-2 focus:border-blue-500 outline-none">
                </div>
                <div class="md:col-span-2 space-y-1">
                    <label class="text-xs font-bold text-slate-500 uppercase">Highlights (One per line)</label>
                    <textarea name="highlights" rows="4" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-2 focus:border-blue-500 outline-none" placeholder="• Merancang arsitektur..."></textarea>
                </div>
            </div>
            <div class="mt-8 flex justify-end">
                <button type="submit" class="px-8 py-3 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition-all shadow-lg shadow-blue-500/20">
                    Create Project
                </button>
            </div>
        </form>
    </div>
</div>

<div class="space-y-6">
    <h3 class="font-bold text-slate-800">Existing Projects</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($projects as $project)
        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm p-6 relative group">
            <div class="flex justify-between items-start mb-4">
                <div>
                    <h4 class="font-bold text-slate-800">{{ $project->title }}</h4>
                    <p class="text-xs text-slate-500 uppercase tracking-widest">{{ $project->role }} ({{ $project->year }})</p>
                </div>
                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="p-2 text-slate-300 hover:text-red-500 transition-colors" onclick="return confirm('Delete this project?')">
                        🗑️
                    </button>
                </form>
            </div>
            <p class="text-sm text-slate-600 mb-4 line-clamp-2">{{ $project->description }}</p>
            @if($project->image)
                <img src="{{ asset('storage/' . $project->image) }}" class="w-full h-32 object-cover rounded-xl border border-slate-100">
            @else
                <div class="w-full h-32 bg-slate-50 rounded-xl flex items-center justify-center text-slate-300">
                    No image
                </div>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection
