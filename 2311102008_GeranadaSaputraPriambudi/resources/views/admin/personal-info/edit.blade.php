@extends('layouts.admin')

@section('title', 'Edit Personal Info')

@section('content')
    <div class="flat-card p-10 max-w-3xl">
        <form action="{{ route('admin.personal-info.update', $personalInfo->id) }}" method="POST" class="space-y-8">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <label class="font-black uppercase text-xs tracking-widest">Full Name</label>
                    <input type="text" name="name" value="{{ old('name', $personalInfo->name) }}" class="w-full flat-input" required>
                </div>
                <div class="space-y-2">
                    <label class="font-black uppercase text-xs tracking-widest">Email Address</label>
                    <input type="email" name="email" value="{{ old('email', $personalInfo->email) }}" class="w-full flat-input" required>
                </div>
                <div class="space-y-2">
                    <label class="font-black uppercase text-xs tracking-widest">Phone Number</label>
                    <input type="text" name="phone" value="{{ old('phone', $personalInfo->phone) }}" class="w-full flat-input" required>
                </div>
                <div class="space-y-2">
                    <label class="font-black uppercase text-xs tracking-widest">LinkedIn URL</label>
                    <input type="text" name="linkedin" value="{{ old('linkedin', $personalInfo->linkedin) }}" class="w-full flat-input">
                </div>
            </div>

            <div class="space-y-2">
                <label class="font-black uppercase text-xs tracking-widest">Bio / Summary</label>
                <textarea name="bio" class="w-full flat-input h-32" required>{{ old('bio', $personalInfo->bio) }}</textarea>
            </div>

            <div class="space-y-2">
                <label class="font-black uppercase text-xs tracking-widest">Education (HTML or text)</label>
                <textarea name="education" class="w-full flat-input h-32" required>{{ old('education', $personalInfo->education) }}</textarea>
                <p class="text-xs font-bold text-gray-500 uppercase">Tip: Briefly list your schools and degrees.</p>
            </div>

            <div class="pt-4">
                <button type="submit" class="flat-btn bg-black text-white px-10 py-4 font-black uppercase tracking-widest">Save Changes</button>
            </div>
        </form>
    </div>
@endsection
