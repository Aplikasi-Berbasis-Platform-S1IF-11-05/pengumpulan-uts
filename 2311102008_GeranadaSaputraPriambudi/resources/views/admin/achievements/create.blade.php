@extends('layouts.admin')

@section('title', 'Add Achievement')

@section('content')
    <div class="flat-card p-10 max-w-3xl">
        <form action="{{ route('admin.achievements.store') }}" method="POST" class="space-y-8">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <label class="font-black uppercase text-xs tracking-widest">Type</label>
                    <select name="type" class="w-full flat-input bg-white appearance-none cursor-pointer" required>
                        <option value="project">Project</option>
                        <option value="certification">Certification</option>
                        <option value="work_experience">Work Experience</option>
                        <option value="community">Community</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <label class="font-black uppercase text-xs tracking-widest">Date / Period</label>
                    <input type="text" name="date" class="w-full flat-input" placeholder="e.g. 2025 or April - Sept 2022">
                </div>
            </div>

            <div class="space-y-2">
                <label class="font-black uppercase text-xs tracking-widest">Title</label>
                <input type="text" name="title" class="w-full flat-input" placeholder="Achievement or Project Title" required>
            </div>

            <div class="space-y-2">
                <label class="font-black uppercase text-xs tracking-widest">Organization / Provider</label>
                <input type="text" name="organization" class="w-full flat-input" placeholder="e.g. Telkom University, MySkill">
            </div>

            <div class="space-y-2">
                <label class="font-black uppercase text-xs tracking-widest">Description</label>
                <textarea name="description" class="w-full flat-input h-32" placeholder="Details about this achievement..."></textarea>
            </div>

            <div class="pt-4 flex gap-4">
                <button type="submit" class="flat-btn bg-black text-white px-10 py-4 font-black uppercase tracking-widest">Create Achievement</button>
                <a href="{{ route('admin.achievements.index') }}" class="flat-btn bg-white px-10 py-4 font-black uppercase tracking-widest border-4 border-black">Cancel</a>
            </div>
        </form>
    </div>
@endsection
