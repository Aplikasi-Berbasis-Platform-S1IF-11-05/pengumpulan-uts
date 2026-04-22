@extends('layouts.admin')

@section('title', 'Technical Skills')

@section('content')
<div class="flex justify-between items-center mb-8">
    <p class="text-slate-500">Manage your expertise levels and categories.</p>
    <a href="{{ route('admin.skills.create') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-indigo-700 transition-all flex items-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
        Add New Skill
    </a>
</div>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <table class="w-full text-left">
        <thead>
            <tr class="bg-slate-50 border-b border-slate-100">
                <th class="px-8 py-5 text-sm font-bold text-slate-700 uppercase tracking-wider">Skill Name</th>
                <th class="px-8 py-5 text-sm font-bold text-slate-700 uppercase tracking-wider">Category</th>
                <th class="px-8 py-5 text-sm font-bold text-slate-700 uppercase tracking-wider">Level</th>
                <th class="px-8 py-5 text-sm font-bold text-slate-700 uppercase tracking-wider text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-50">
            @foreach($skills as $skill)
            <tr class="hover:bg-slate-50/50 transition-colors">
                <td class="px-8 py-6">
                    <span class="font-bold text-slate-800 text-lg">{{ $skill->name }}</span>
                </td>
                <td class="px-8 py-6">
                    <span class="px-3 py-1 bg-indigo-50 text-indigo-600 text-xs font-bold rounded-full uppercase tracking-tighter">{{ $skill->category }}</span>
                </td>
                <td class="px-8 py-6">
                    <div class="flex items-center space-x-3">
                        <div class="flex-1 h-2 bg-slate-100 rounded-full w-32 overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-indigo-500 to-violet-500" style="width: {{ $skill->level }}%"></div>
                        </div>
                        <span class="text-sm font-bold text-slate-500">{{ $skill->level }}%</span>
                    </div>
                </td>
                <td class="px-8 py-6 text-right">
                    <div class="flex justify-end space-x-2">
                        <a href="{{ route('admin.skills.edit', $skill->id) }}" class="p-2 text-slate-400 hover:text-indigo-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </a>
                        <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST" onsubmit="return confirm('Delete this skill?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-2 text-slate-400 hover:text-red-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
