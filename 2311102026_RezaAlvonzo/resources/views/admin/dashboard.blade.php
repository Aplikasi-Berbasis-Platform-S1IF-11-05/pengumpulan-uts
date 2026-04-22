@extends('layouts.admin')

@section('page_title', 'Dashboard Overview')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <span class="p-3 bg-blue-50 text-blue-600 rounded-xl text-2xl">🛠️</span>
            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Active Skills</span>
        </div>
        <div class="text-4xl font-bold text-slate-800">{{ $skillCount }}</div>
    </div>

    <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <span class="p-3 bg-indigo-50 text-indigo-600 rounded-xl text-2xl">💼</span>
            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Projects</span>
        </div>
        <div class="text-4xl font-bold text-slate-800">{{ $projectCount }}</div>
    </div>

    <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <span class="p-3 bg-emerald-50 text-emerald-600 rounded-xl text-2xl">👁️</span>
            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Status</span>
        </div>
        <div class="text-xl font-bold text-emerald-600">LIVE</div>
    </div>
</div>

<div class="mt-12">
    <h3 class="text-lg font-bold text-slate-800 mb-6">Quick Actions</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <a href="{{ route('admin.profile') }}" class="group p-6 bg-white border border-slate-200 rounded-2xl flex items-center hover:border-blue-500 hover:shadow-md transition-all">
            <div class="mr-4 text-2xl">📝</div>
            <div>
                <p class="font-bold text-slate-800 group-hover:text-blue-600">Edit Profile Bio</p>
                <p class="text-sm text-slate-500">Update your name, bio and focus areas.</p>
            </div>
        </a>
        <a href="{{ route('admin.projects') }}" class="group p-6 bg-white border border-slate-200 rounded-2xl flex items-center hover:border-blue-500 hover:shadow-md transition-all">
            <div class="mr-4 text-2xl">➕</div>
            <div>
                <p class="font-bold text-slate-800 group-hover:text-blue-600">Add New Project</p>
                <p class="text-sm text-slate-500">Showcase your latest work experience.</p>
            </div>
        </a>
    </div>
</div>
@endsection
