@extends('layouts.admin')

@section('title', 'Manage Profile')

@section('content')
<div class="max-w-4xl">
    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
        <div class="p-8 border-b border-slate-50 flex justify-between items-center">
            <div>
                <h3 class="text-xl font-bold text-slate-800">Personal Information</h3>
                <p class="text-slate-500 text-sm">Update your public bio and contact details.</p>
            </div>
        </div>
        <div class="p-10">
            <form action="{{ route('admin.profile.update', $profile->id) }}" method="POST" class="space-y-8">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700 uppercase tracking-wider">Full Name</label>
                        <input type="text" name="name" value="{{ old('name', $profile->name) }}" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 outline-none transition-all font-medium" required>
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700 uppercase tracking-wider">Email Address</label>
                        <input type="email" name="email" value="{{ old('email', $profile->email) }}" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 outline-none transition-all font-medium">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-700 uppercase tracking-wider">Professional Bio</label>
                    <textarea name="bio" rows="5" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 outline-none transition-all font-medium" required>{{ old('bio', $profile->bio) }}</textarea>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-700 uppercase tracking-wider">Location</label>
                    <input type="text" name="location" value="{{ old('location', $profile->location) }}" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 outline-none transition-all font-medium">
                </div>

                <div class="flex justify-end pt-4">
                    <button type="submit" class="bg-indigo-600 text-white px-10 py-4 rounded-2xl font-bold hover:bg-indigo-700 transition-all shadow-lg shadow-indigo-100">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
