@extends('layouts.admin')

@section('page_title', 'Manage Skills')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Add Skill Form -->
    <div class="lg:col-span-1">
        <form action="{{ route('admin.skills.store') }}" method="POST" class="bg-white border border-slate-200 rounded-2xl shadow-sm p-6 sticky top-24">
            @csrf
            <h3 class="font-bold text-slate-800 mb-6">Add New Skill</h3>
            <div class="space-y-4">
                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-500 uppercase">Skill Name</label>
                    <input type="text" name="name" required class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-2 focus:border-blue-500 outline-none">
                </div>
                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-500 uppercase">Category</label>
                    <select name="category" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-2 focus:border-blue-500 outline-none">
                        <option value="Technical">Technical</option>
                        <option value="Industry">Industry</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-500 uppercase">Proficiency (%)</label>
                    <input type="number" name="level" min="0" max="100" value="80" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-2 focus:border-blue-500 outline-none">
                </div>
                <button type="submit" class="w-full py-3 bg-slate-900 text-white font-bold rounded-lg hover:bg-slate-800 transition-all">
                    Add Skill
                </button>
            </div>
        </form>
    </div>

    <!-- Skills List -->
    <div class="lg:col-span-2">
        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200">
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Skill</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Category</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Level</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($skills as $skill)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4 font-medium text-slate-800">{{ $skill->name }}</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-blue-50 text-blue-600 text-[10px] font-bold uppercase rounded-md tracking-wider">
                                {{ $skill->category }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-16 h-1.5 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-blue-500" style="width: {{ $skill->level }}%"></div>
                                </div>
                                <span class="text-xs text-slate-500">{{ $skill->level }}%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-slate-400 hover:text-red-500 transition-colors" onclick="return confirm('Delete this skill?')">
                                    🗑️
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
