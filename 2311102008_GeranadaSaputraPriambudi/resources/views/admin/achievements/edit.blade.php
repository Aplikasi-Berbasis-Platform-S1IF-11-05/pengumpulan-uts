@extends('layouts.admin')

@section('title', 'Edit Achievement')

@section('content')
    <div class="flat-card p-10 max-w-3xl">
        <form action="{{ route('admin.achievements.update', $achievement->id) }}" method="POST" class="space-y-8">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <label class="font-black uppercase text-xs tracking-widest">Type</label>
                    <select name="type" class="w-full flat-input bg-white appearance-none cursor-pointer" required>
                        <option value="project" {{ $achievement->type == 'project' ? 'selected' : '' }}>Project</option>
                        <option value="certification" {{ $achievement->type == 'certification' ? 'selected' : '' }}>Certification</option>
                        <option value="work_experience" {{ $achievement->type == 'work_experience' ? 'selected' : '' }}>Work Experience</option>
                        <option value="community" {{ $achievement->type == 'community' ? 'selected' : '' }}>Community</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <label class="font-black uppercase text-xs tracking-widest">Date / Period</label>
                    <input type="text" name="date" value="{{ old('date', $achievement->date) }}" class="w-full flat-input">
                </div>
            </div>

            <div class="space-y-2">
                <label class="font-black uppercase text-xs tracking-widest">Title</label>
                <input type="text" name="title" value="{{ old('title', $achievement->title) }}" class="w-full flat-input" required>
            </div>

            <div class="space-y-2">
                <label class="font-black uppercase text-xs tracking-widest">Organization / Provider</label>
                <input type="text" name="organization" value="{{ old('organization', $achievement->organization) }}" class="w-full flat-input">
            </div>

            <div class="space-y-2">
                <label class="font-black uppercase text-xs tracking-widest">Description</label>
                <textarea name="description" class="w-full flat-input h-32">{{ old('description', $achievement->description) }}</textarea>
            </div>

            <div class="pt-4 flex gap-4">
                <button type="submit" class="flat-btn bg-black text-white px-10 py-4 font-black uppercase tracking-widest">Update Achievement</button>
                <a href="{{ route('admin.achievements.index') }}" class="flat-btn bg-white px-10 py-4 font-black uppercase tracking-widest border-4 border-black">Cancel</a>
            </div>
        </form>
    </div>
@endsection
