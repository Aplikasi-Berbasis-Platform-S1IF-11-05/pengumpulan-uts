@extends('layouts.admin')

@section('title', 'Overview')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="flat-card p-8 bg-blue-50">
            <h3 class="text-xl font-black uppercase mb-4 tracking-tight">Skills</h3>
            <div class="text-5xl font-black mb-4">{{ \App\Models\Skill::count() }}</div>
            <a href="{{ route('admin.skills.index') }}" class="font-bold uppercase text-xs tracking-widest text-blue-600">Manage Skills &rarr;</a>
        </div>
        <div class="flat-card p-8 bg-green-50">
            <h3 class="text-xl font-black uppercase mb-4 tracking-tight">Achievements</h3>
            <div class="text-5xl font-black mb-4">{{ \App\Models\Achievement::count() }}</div>
            <a href="{{ route('admin.achievements.index') }}" class="font-bold uppercase text-xs tracking-widest text-green-600">Manage Achievements &rarr;</a>
        </div>
        <div class="flat-card p-8 bg-amber-50">
            <h3 class="text-xl font-black uppercase mb-4 tracking-tight">Public Site</h3>
            <div class="text-5xl font-black mb-4">LIVE</div>
            <a href="/" target="_blank" class="font-bold uppercase text-xs tracking-widest text-amber-600">View Website &rarr;</a>
        </div>
    </div>

    <div class="mt-12 flat-card p-8">
        <h3 class="text-2xl font-black uppercase mb-6 tracking-tight">Recent Profile Snapshot</h3>
        <div class="space-y-4">
            <div class="flex justify-between border-b-2 border-black pb-2">
                <span class="font-bold text-gray-500 uppercase text-xs">Name</span>
                <span class="font-black uppercase">{{ \App\Models\PersonalInfo::first()->name ?? 'N/A' }}</span>
            </div>
            <div class="flex justify-between border-b-2 border-black pb-2">
                <span class="font-bold text-gray-500 uppercase text-xs">Email</span>
                <span class="font-black">{{ \App\Models\PersonalInfo::first()->email ?? 'N/A' }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold text-gray-500 uppercase text-xs">Phone</span>
                <span class="font-black">{{ \App\Models\PersonalInfo::first()->phone ?? 'N/A' }}</span>
            </div>
        </div>
    </div>
@endsection
