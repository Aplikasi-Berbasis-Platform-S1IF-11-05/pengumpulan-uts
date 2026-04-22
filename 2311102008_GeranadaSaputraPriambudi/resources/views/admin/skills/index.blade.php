@extends('layouts.admin')

@section('title', 'Manage Skills')

@section('content')
    <div class="mb-8">
        <a href="{{ route('admin.skills.create') }}" class="flat-btn bg-blue-600 text-white px-8 py-3 font-black uppercase tracking-widest inline-block">Add New Skill</a>
    </div>

    <div class="flat-card overflow-hidden">
        <table class="w-full text-left">
            <thead>
                <tr class="bg-black text-white uppercase text-xs tracking-widest">
                    <th class="p-6">Name</th>
                    <th class="p-6">Category</th>
                    <th class="p-6 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y-4 divide-black">
                @foreach($skills as $skill)
                    <tr class="hover:bg-gray-50">
                        <td class="p-6 font-black uppercase tracking-tight text-xl">{{ $skill->name }}</td>
                        <td class="p-6">
                            <span class="bg-black text-white px-3 py-1 text-[10px] font-black uppercase tracking-widest">{{ $skill->category }}</span>
                        </td>
                        <td class="p-6 text-right space-x-4">
                            <a href="{{ route('admin.skills.edit', $skill->id) }}" class="font-bold uppercase text-xs tracking-widest border-b-2 border-black hover:text-blue-600 transition-colors">Edit</a>
                            <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-bold uppercase text-xs tracking-widest border-b-2 border-red-600 text-red-600 hover:bg-red-600 hover:text-white transition-all px-1" onclick="return confirm('Delete this skill?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
