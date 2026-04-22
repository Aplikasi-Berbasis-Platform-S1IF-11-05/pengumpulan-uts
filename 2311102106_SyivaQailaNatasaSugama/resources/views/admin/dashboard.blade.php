@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12">
    <div class="flex justify-between items-center mb-12">
        <h1 class="text-5xl font-black uppercase">Admin Dashboard</h1>
        @if(session('success'))
            <div class="px-6 py-3 bg-green-500 text-white font-bold neo-brutalism-button">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        <!-- Profile Management -->
        <div class="lg:col-span-2">
            <div class="neo-brutalism-card p-8 bg-white mb-12">
                <h2 class="text-3xl font-black mb-8 uppercase border-b-4 border-black pb-2">Profile Details</h2>
                <form action="{{ route('admin.profile.update') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block font-bold uppercase mb-2">Full Name</label>
                            <input type="text" name="name" value="{{ $profile->name }}" class="w-full p-3 border-4 border-black font-bold outline-none focus:bg-yellow-100">
                        </div>
                        <div>
                            <label class="block font-bold uppercase mb-2">Role</label>
                            <input type="text" name="role" value="{{ $profile->role }}" class="w-full p-3 border-4 border-black font-bold outline-none focus:bg-yellow-100">
                        </div>
                    </div>
                    <div>
                        <label class="block font-bold uppercase mb-2">Bio</label>
                        <textarea name="bio" rows="4" class="w-full p-3 border-4 border-black font-bold outline-none focus:bg-yellow-100">{{ $profile->bio }}</textarea>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block font-bold uppercase mb-2">Email</label>
                            <input type="email" name="email" value="{{ $profile->email }}" class="w-full p-3 border-4 border-black font-bold outline-none focus:bg-yellow-100">
                        </div>
                        <div>
                            <label class="block font-bold uppercase mb-2">LinkedIn</label>
                            <input type="url" name="linkedin" value="{{ $profile->linkedin }}" class="w-full p-3 border-4 border-black font-bold outline-none focus:bg-yellow-100">
                        </div>
                        <div>
                            <label class="block font-bold uppercase mb-2">GitHub</label>
                            <input type="url" name="github" value="{{ $profile->github }}" class="w-full p-3 border-4 border-black font-bold outline-none focus:bg-yellow-100">
                        </div>
                    </div>
                    <button type="submit" class="px-8 py-3 bg-red-custom text-white font-black neo-brutalism-button uppercase">Update Profile</button>
                </form>
            </div>

            <!-- Achievements CRUD -->
            <div class="neo-brutalism-card p-8 bg-white">
                <h2 class="text-3xl font-black mb-8 uppercase border-b-4 border-black pb-2">Manage Achievements</h2>
                
                <!-- Add Achievement Form -->
                <form action="{{ route('admin.achievements.store') }}" method="POST" class="p-6 bg-gray-100 border-4 border-black mb-8 space-y-4">
                    @csrf
                    <h3 class="font-black uppercase mb-4 text-xl">Add New Achievement</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" name="title" placeholder="Title" class="p-3 border-2 border-black font-bold" required>
                        <input type="text" name="year" placeholder="Year" class="p-3 border-2 border-black font-bold" required>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" name="company" placeholder="Institution/Company" class="p-3 border-2 border-black font-bold">
                        <input type="text" name="role" placeholder="Role/Recognition" class="p-3 border-2 border-black font-bold">
                    </div>
                    <textarea name="description" placeholder="Description" rows="3" class="w-full p-3 border-2 border-black font-bold" required></textarea>
                    <button type="submit" class="px-6 py-2 bg-blue-custom text-white font-black neo-brutalism-button uppercase">Add Achievement</button>
                </form>

                <div class="space-y-6">
                    @foreach($achievements as $ach)
                        <div class="p-6 border-4 border-black flex justify-between items-start hover:bg-yellow-50">
                            <div>
                                <h4 class="text-xl font-black uppercase">{{ $ach->title }} ({{ $ach->year }})</h4>
                                <p class="text-sm font-medium mt-2">{{ Str::limit($ach->description, 100) }}</p>
                            </div>
                            <form action="{{ route('admin.achievements.destroy', $ach) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 font-black hover:underline" onclick="return confirm('Delete this?')">DELETE</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Skills Management -->
        <div class="lg:col-span-1">
            <div class="neo-brutalism-card p-8 bg-yellow-custom">
                <h2 class="text-3xl font-black mb-8 uppercase border-b-4 border-black pb-2">Skills</h2>
                
                <form action="{{ route('admin.skills.store') }}" method="POST" class="mb-8 space-y-4">
                    @csrf
                    <input type="text" name="name" placeholder="Skill Name" class="w-full p-3 border-4 border-black font-bold outline-none" required>
                    <input type="text" name="category" placeholder="Category (e.g. Design)" class="w-full p-3 border-4 border-black font-bold outline-none">
                    <button type="submit" class="w-full py-3 bg-black text-white font-black neo-brutalism-button uppercase">Add Skill</button>
                </form>

                <div class="space-y-4">
                    @foreach($skills as $skill)
                        <div class="p-4 bg-white border-4 border-black flex justify-between items-center">
                            <span class="font-black uppercase">{{ $skill->name }}</span>
                            <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 font-bold hover:scale-125 transition-transform">×</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
