@extends('layouts.admin')

@section('title', 'Edit Skill')

@section('content')
    <div class="flat-card p-10 max-w-xl">
        <form action="{{ route('admin.skills.update', $skill->id) }}" method="POST" class="space-y-8">
            @csrf
            @method('PUT')
            <div class="space-y-2">
                <label class="font-black uppercase text-xs tracking-widest">Skill Name</label>
                <input type="text" name="name" value="{{ old('name', $skill->name) }}" class="w-full flat-input" required>
            </div>

            <div class="space-y-2">
                <label class="font-black uppercase text-xs tracking-widest">Category</label>
                <select name="category" class="w-full flat-input bg-white appearance-none cursor-pointer" required>
                    <option value="Technical" {{ $skill->category == 'Technical' ? 'selected' : '' }}>Technical</option>
                    <option value="Professional" {{ $skill->category == 'Professional' ? 'selected' : '' }}>Professional</option>
                    <option value="Languages" {{ $skill->category == 'Languages' ? 'selected' : '' }}>Languages</option>
                </select>
            </div>

            <div class="pt-4 flex gap-4">
                <button type="submit" class="flat-btn bg-black text-white px-10 py-4 font-black uppercase tracking-widest">Update Skill</button>
                <a href="{{ route('admin.skills.index') }}" class="flat-btn bg-white px-10 py-4 font-black uppercase tracking-widest border-4 border-black">Cancel</a>
            </div>
        </form>
    </div>
@endsection
