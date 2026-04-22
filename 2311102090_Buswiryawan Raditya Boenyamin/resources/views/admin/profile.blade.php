@extends('layouts.admin')

@section('header', 'Manage Profile')

@section('content')
<div class="max-w-3xl">
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data" class="p-8">
            @csrf
            <div class="space-y-6">
                <div class="bg-gray-50 p-6 rounded-xl border border-dashed border-gray-300 mb-8">
                    <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-8">
                        <div class="flex-shrink-0">
                            <p class="text-xs font-semibold text-gray-500 uppercase mb-2 text-center">Preview Foto</p>
                            @if($profile->profile_picture)
                                <div class="h-32 w-32 md:h-48 md:w-48 overflow-hidden rounded-full border-4 border-white shadow-lg">
                                    <img class="h-full w-full object-cover" src="{{ asset('storage/' . $profile->profile_picture) }}" alt="Current photo">
                                </div>
                            @else
                                <div class="h-32 w-32 md:h-48 md:w-48 rounded-full bg-indigo-100 flex items-center justify-center border-4 border-white shadow-lg">
                                    <i class="fas fa-user text-5xl text-indigo-300"></i>
                                </div>
                            @endif
                        </div>
                        <div class="flex-1">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Ganti Foto Profil</label>
                            <input type="file" name="profile_picture" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-600 file:text-white hover:file:bg-indigo-700 transition">
                            @error('profile_picture')
                                <p class="mt-2 text-sm text-red-600 font-medium">{{ $message }}</p>
                            @enderror
                            <div class="mt-3 space-y-1">
                                <p class="text-xs text-gray-500"><i class="fas fa-info-circle mr-1"></i> Gunakan foto dengan rasio 1:1 (kotak) untuk hasil terbaik.</p>
                                <p class="text-xs text-gray-500"><i class="fas fa-file-image mr-1"></i> Format: JPG, PNG, JPEG (Maks. 2MB).</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                    <input type="text" name="name" value="{{ $profile->name }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" name="email" value="{{ $profile->email }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input type="text" name="phone" value="{{ $profile->phone }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                    <input type="text" name="address" value="{{ $profile->address }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">About Me</label>
                    <textarea name="about_me" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">{{ $profile->about_me }}</textarea>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-gray-100">
                <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-indigo-700 transition">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
