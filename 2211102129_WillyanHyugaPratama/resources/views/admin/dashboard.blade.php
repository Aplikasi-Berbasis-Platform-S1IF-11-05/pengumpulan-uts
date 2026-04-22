@extends('layouts.admin')

@section('title', 'Dashboard Overview')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
    <div class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm">
        <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
        </div>
        <div class="text-3xl font-bold text-slate-800 mb-1">{{ $skillCount }}</div>
        <div class="text-slate-500 font-medium">Total Skills</div>
    </div>
    <div class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm">
        <div class="w-12 h-12 bg-violet-50 text-violet-600 rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
        </div>
        <div class="text-3xl font-bold text-slate-800 mb-1">{{ $projectCount }}</div>
        <div class="text-slate-500 font-medium">Total Projects</div>
    </div>
    <div class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm">
        <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
        </div>
        <div class="text-3xl font-bold text-slate-800 mb-1">Active</div>
        <div class="text-slate-500 font-medium">System Status</div>
    </div>
</div>

<div class="bg-gradient-to-br from-indigo-600 to-violet-700 rounded-[2.5rem] p-12 text-white shadow-xl shadow-indigo-200">
    <div class="max-w-2xl">
        <h3 class="text-3xl font-bold mb-4">Welcome back, Willy!</h3>
        <p class="text-indigo-100 text-lg leading-relaxed mb-8">Your portfolio is currently live and showcasing your latest achievements. You can update your skills, projects, and personal data using the navigation menu on the left.</p>
        <div class="flex space-x-4">
            <a href="{{ route('admin.profile.index') }}" class="bg-white text-indigo-600 px-6 py-3 rounded-xl font-bold hover:bg-indigo-50 transition-colors">Edit Profile</a>
            <a href="{{ route('admin.projects.create') }}" class="bg-indigo-500 text-white border border-indigo-400 px-6 py-3 rounded-xl font-bold hover:bg-indigo-400 transition-colors">Add Project</a>
        </div>
    </div>
</div>
@endsection
