@extends('layouts.admin')

@section('title', 'Manage Achievements')

@section('content')
    <div class="mb-8">
        <a href="{{ route('admin.achievements.create') }}" class="flat-btn bg-purple-600 text-white px-8 py-3 font-black uppercase tracking-widest inline-block">Add New Achievement</a>
    </div>

    <div class="flat-card overflow-hidden">
        <table class="w-full text-left">
            <thead>
                <tr class="bg-black text-white uppercase text-xs tracking-widest">
                    <th class="p-6">Title</th>
                    <th class="p-6">Type</th>
                    <th class="p-6">Organization</th>
                    <th class="p-6 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y-4 divide-black">
                @foreach($achievements as $achievement)
                    <tr class="hover:bg-gray-50">
                        <td class="p-6">
                            <div class="font-black uppercase tracking-tight text-lg">{{ $achievement->title }}</div>
                            <div class="text-xs font-bold text-gray-400 uppercase tracking-widest">{{ $achievement->date }}</div>
                        </td>
                        <td class="p-6">
                            <span class="bg-purple-100 text-purple-900 border-2 border-purple-900 px-3 py-1 text-[10px] font-black uppercase tracking-widest">{{ str_replace('_', ' ', $achievement->type) }}</span>
                        </td>
                        <td class="p-6 font-bold uppercase text-sm">{{ $achievement->organization }}</td>
                        <td class="p-6 text-right space-x-4">
                            <a href="{{ route('admin.achievements.edit', $achievement->id) }}" class="font-bold uppercase text-xs tracking-widest border-b-2 border-black hover:text-purple-600 transition-colors">Edit</a>
                            <form action="{{ route('admin.achievements.destroy', $achievement->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-bold uppercase text-xs tracking-widest border-b-2 border-red-600 text-red-600 hover:bg-red-600 hover:text-white transition-all px-1" onclick="return confirm('Delete this achievement?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
