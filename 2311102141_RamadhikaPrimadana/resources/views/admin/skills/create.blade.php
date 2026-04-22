<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Skill Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 max-w-2xl">
                
                <form action="{{ route('admin.skills.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-4">
                        <label for="nama_skill" class="block text-gray-700 font-bold mb-2">Nama Skill</label>
                        <input type="text" name="nama_skill" id="nama_skill" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required placeholder="Contoh: PHP, Laravel, HTML">
                    </div>

                    <div class="mb-6">
                        <label for="persentase" class="block text-gray-700 font-bold mb-2">Persentase Penguasaan (1-100)</label>
                        <input type="number" name="persentase" id="persentase" min="1" max="100" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required placeholder="Contoh: 85">
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Simpan Skill
                        </button>
                        <a href="{{ route('admin.skills.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                            Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>