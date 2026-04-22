@extends('layouts.admin')

@section('page_title', 'Manage Profile')

@section('content')
<div class="max-w-4xl">
    <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data" class="bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden">
        @csrf
        @method('PUT')
        
        <div class="p-8 border-b border-slate-100">
            <h3 class="font-bold text-slate-800 mb-6">Basic Information</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-500 uppercase tracking-widest">Full Name</label>
                    <input type="text" name="name" value="{{ $profile->name }}" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all">
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-500 uppercase tracking-widest">Technical Focus</label>
                    <input type="text" name="focus" value="{{ $profile->focus }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all">
                </div>
                <div class="md:col-span-2 space-y-2">
                    <label class="text-sm font-bold text-slate-500 uppercase tracking-widest">Short Bio</label>
                    <textarea name="bio" rows="2" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all">{{ $profile->bio }}</textarea>
                </div>
                <div class="md:col-span-2 space-y-2">
                    <label class="text-sm font-bold text-slate-500 uppercase tracking-widest">Extended About</label>
                    <textarea name="about" rows="4" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all">{{ $profile->about }}</textarea>
                </div>
            </div>
        </div>

        <div class="p-8 border-b border-slate-100 bg-slate-50/50">
            <h3 class="font-bold text-slate-800 mb-6">Contact & Presence</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-500 uppercase tracking-widest">Email</label>
                    <input type="email" name="email" value="{{ $profile->email }}" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all">
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-500 uppercase tracking-widest">Phone</label>
                    <input type="text" name="phone" value="{{ $profile->phone }}" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all">
                </div>
                <div class="md:col-span-2 space-y-2">
                    <label class="text-sm font-bold text-slate-500 uppercase tracking-widest">Location</label>
                    <input type="text" name="address" value="{{ $profile->address }}" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all">
                </div>
            </div>
        </div>

        <div class="p-8 bg-slate-50 flex justify-end">
            <button type="submit" class="px-8 py-3 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition-all shadow-lg shadow-blue-500/20 transform active:scale-95">
                Save Changes
            </button>
        </div>
    </form>
</div>
@endsection
