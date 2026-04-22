@extends('layouts.admin')

@section('title', 'Projects & Achievements')

@section('content')
<div class="flex justify-between items-center mb-8">
    <p class="text-slate-500">Manage your projects and professional achievements.</p>
    <a href="{{ route('admin.projects.create') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-indigo-700 transition-all flex items-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
        Add New Item
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    @foreach($projects as $project)
    <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm relative group">
        <div class="flex justify-between items-start mb-4">
            <span class="px-4 py-1 {{ $project->type == 'achievement' ? 'bg-amber-50 text-amber-600' : 'bg-indigo-50 text-indigo-600' }} text-xs font-bold rounded-full uppercase tracking-widest">
                {{ $project->type }}
            </span>
            <span class="text-sm font-bold text-slate-400">{{ $project->year }}</span>
        </div>
        <h3 class="text-xl font-bold text-slate-800 mb-2">{{ $project->title }}</h3>
        <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-3">
            {{ $project->description }}
        </p>
        <div class="flex justify-between items-center pt-6 border-t border-slate-50">
            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">{{ $project->role }}</span>
            <div class="flex space-x-2">
                <a href="{{ route('admin.projects.edit', $project->id) }}" class="p-2 text-slate-400 hover:text-indigo-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </a>
                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Delete this item?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="p-2 text-slate-400 hover:text-red-600 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
