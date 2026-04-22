<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Skills') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <div class="mb-4">
                    <a href="{{ route('admin.skills.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        + Tambah Skill Baru
                    </a>
                </div>

                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr>
                            <th class="border-b py-2 font-bold uppercase text-sm text-gray-600">No</th>
                            <th class="border-b py-2 font-bold uppercase text-sm text-gray-600">Nama Skill</th>
                            <th class="border-b py-2 font-bold uppercase text-sm text-gray-600">Persentase</th>
                            <th class="border-b py-2 font-bold uppercase text-sm text-gray-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($skills as $index => $skill)
                        <tr>
                            <td class="border-b py-2">{{ $index + 1 }}</td>
                            <td class="border-b py-2">{{ $skill->nama_skill }}</td>
                            <td class="border-b py-2">
                                <div class="w-full bg-gray-200 rounded-full h-2.5 max-w-[150px]">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{ $skill->persentase }}%"></div>
                                </div>
                                <span class="text-xs text-gray-500">{{ $skill->persentase }}%</span>
                            </td>
                            <td class="border-b py-2 flex space-x-2">
                                <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 text-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-gray-500">Belum ada data skill.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</x-app-layout>