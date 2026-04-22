@extends('layouts.admin')

@section('title', 'Add New Skill')

@section('content')
    <div class="flat-card p-10 max-w-xl">
        <form action="{{ route('admin.skills.store') }}" method="POST" class="space-y-8">
            @csrf
            <div class="space-y-2">
                <label class="font-black uppercase text-xs tracking-widest">Skill Name</label>
                <input type="text" name="name" class="w-full flat-input" placeholder="e.g. Laravel, UI/UX" required>
            </div>

            <div class="space-y-2">
                <label class="font-black uppercase text-xs tracking-widest">Category</label>
                <select name="category" class="w-full flat-input bg-white appearance-none cursor-pointer" required>
                    <option value="Technical">Technical</option>
                    <option value="Professional">Professional</option>
                    <option value="Languages">Languages</option>
                </select>
                <p class="text-xs font-bold text-gray-500 uppercase">Select where this skill belongs.</p>
            </div>

            <div class="pt-4 flex gap-4">
                <button type="submit" class="flat-btn bg-black text-white px-10 py-4 font-black uppercase tracking-widest">Create Skill</button>
                <a href="{{ route('admin.skills.index') }}" class="flat-btn bg-white px-10 py-4 font-black uppercase tracking-widest border-4 border-black">Cancel</a>
            </div>
        </form>
    </div>
@endsection
