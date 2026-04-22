<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Portfolio Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
            @endif
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <header class="mb-4">
                    <h2 class="text-lg font-medium text-gray-900"> Update Profile & Personal Info </h2>
                </header>
                <form method="post" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $profile->name ?? '')" required />
                        </div>
                        <div>
                            <x-input-label for="role" :value="__('Role')" />
                            <x-text-input id="role" name="role" type="text" class="mt-1 block w-full" :value="old('role', $profile->role ?? '')" required />
                        </div>
                        <div class="md:col-span-2">
                            <x-input-label for="about" :value="__('About')" />
                            <textarea id="about" name="about" rows="4" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required>{{ old('about', $profile->about ?? '') }}</textarea>
                        </div>
                        <div>
                            <x-input-label for="photo" :value="__('Photo Profile (Optional)')" />
                            <input type="file" id="photo" name="photo" class="mt-1 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                        </div>
                        <div>
                            <x-input-label for="email" :value="__('Email Address')" />
                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $profile->email ?? '')" />
                        </div>
                        <div><x-input-label for="nim" :value="__('NIM')" /><x-text-input id="nim" name="nim" type="text" class="mt-1 block w-full" :value="old('nim', $profile->nim ?? '')" /></div>
                        <div><x-input-label for="program_studi" :value="__('Program Studi')" /><x-text-input id="program_studi" name="program_studi" type="text" class="mt-1 block w-full" :value="old('program_studi', $profile->program_studi ?? '')" /></div>
                        <div><x-input-label for="universitas" :value="__('Universitas')" /><x-text-input id="universitas" name="universitas" type="text" class="mt-1 block w-full" :value="old('universitas', $profile->universitas ?? '')" /></div>
                        <div><x-input-label for="ipk" :value="__('IPK')" /><x-text-input id="ipk" name="ipk" type="text" class="mt-1 block w-full" :value="old('ipk', $profile->ipk ?? '')" /></div>
                        <div><x-input-label for="cv_link" :value="__('CV Link URL')" /><x-text-input id="cv_link" name="cv_link" type="text" class="mt-1 block w-full" :value="old('cv_link', $profile->cv_link ?? '')" /></div>
                        <div><x-input-label for="github" :value="__('GitHub URL')" /><x-text-input id="github" name="github" type="text" class="mt-1 block w-full" :value="old('github', $profile->github ?? '')" /></div>
                        <div><x-input-label for="linkedin" :value="__('LinkedIn URL')" /><x-text-input id="linkedin" name="linkedin" type="text" class="mt-1 block w-full" :value="old('linkedin', $profile->linkedin ?? '')" /></div>
                        <div><x-input-label for="whatsapp" :value="__('WhatsApp Link')" /><x-text-input id="whatsapp" name="whatsapp" type="text" class="mt-1 block w-full" :value="old('whatsapp', $profile->whatsapp ?? '')" /></div>
                        <div><x-input-label for="telegram" :value="__('Telegram Link')" /><x-text-input id="telegram" name="telegram" type="text" class="mt-1 block w-full" :value="old('telegram', $profile->telegram ?? '')" /></div>
                        <div><x-input-label for="web" :value="__('Website Link')" /><x-text-input id="web" name="web" type="text" class="mt-1 block w-full" :value="old('web', $profile->web ?? '')" /></div>

                    </div>
                    <div class="flex items-center gap-4 mt-6">
                        <x-primary-button>{{ __('Save Profile') }}</x-primary-button>
                    </div>
                </form>
            </div>
            @php
            $sections = [
                ['title'=>'Experiences & Projects', 'items'=>$experiences, 'route_store'=>'admin.experiences.store', 'route_destroy'=>'admin.experiences.destroy', 'fields'=>[
                    ['name'=>'company', 'label'=>'Company/Instansi', 'type'=>'text'],
                    ['name'=>'year', 'label'=>'Year', 'type'=>'text'],
                    ['name'=>'role', 'label'=>'Role', 'type'=>'text'],
                    ['name'=>'tech_stack', 'label'=>'Tech Stack', 'type'=>'text'],
                    ['name'=>'description', 'label'=>'Description', 'type'=>'textarea'],
                ]],
                ['title'=>'Sertifikasi', 'items'=>$certifications, 'route_store'=>'admin.certifications.store', 'route_destroy'=>'admin.certifications.destroy', 'fields'=>[
                    ['name'=>'name', 'label'=>'Name', 'type'=>'text'],
                    ['name'=>'year', 'label'=>'Year (Optional)', 'type'=>'text'],
                ]],
                ['title'=>'Organisasi', 'items'=>$organizations, 'route_store'=>'admin.organizations.store', 'route_destroy'=>'admin.organizations.destroy', 'fields'=>[
                    ['name'=>'name', 'label'=>'Name', 'type'=>'text'],
                    ['name'=>'year', 'label'=>'Year (Optional)', 'type'=>'text'],
                ]],
                ['title'=>'Skills', 'items'=>$skills, 'route_store'=>'admin.skills.store', 'route_destroy'=>'admin.skills.destroy', 'fields'=>[
                    ['name'=>'name', 'label'=>'Skill Name', 'type'=>'text'],
                    ['name'=>'proficiency', 'label'=>'Proficiency (%)', 'type'=>'number'],
                ]],
                ['title'=>'Tools & Software', 'items'=>$tools, 'route_store'=>'admin.tools.store', 'route_destroy'=>'admin.tools.destroy', 'fields'=>[
                    ['name'=>'name', 'label'=>'Tool Name', 'type'=>'text'],
                ]],
                ['title'=>'Problem Solving', 'items'=>$problemSolvings, 'route_store'=>'admin.problem_solvings.store', 'route_destroy'=>'admin.problem_solvings.destroy', 'fields'=>[
                    ['name'=>'aspect', 'label'=>'Aspect Title', 'type'=>'text'],
                    ['name'=>'description', 'label'=>'Description', 'type'=>'textarea'],
                ]],
                ['title'=>'Career Target', 'items'=>$careerTargets, 'route_store'=>'admin.career_targets.store', 'route_destroy'=>'admin.career_targets.destroy', 'fields'=>[
                    ['name'=>'term', 'label'=>'Term (Pendek/Menengah/Panjang)', 'type'=>'text'],
                    ['name'=>'goal', 'label'=>'Goal Description', 'type'=>'textarea'],
                ]],
            ];
            @endphp

            @foreach($sections as $sec)
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg flex flex-col md:flex-row gap-8">
                <div class="w-full md:w-1/2">
                    <header class="mb-4">
                        <h2 class="text-lg font-medium text-gray-900"> Add {{ $sec['title'] }} </h2>
                    </header>
                    <form method="post" action="{{ route($sec['route_store']) }}" class="space-y-4">
                        @csrf
                        @foreach($sec['fields'] as $field)
                        <div>
                            <x-input-label for="{{$field['name']}}" :value="__($field['label'])" />
                            @if($field['type'] == 'textarea')
                            <textarea name="{{$field['name']}}" rows="3" class="border-gray-300 focus:border-indigo-500 rounded-md mt-1 block w-full"></textarea>
                            @else
                            <x-text-input name="{{$field['name']}}" type="{{$field['type']}}" class="mt-1 block w-full" required />
                            @endif
                        </div>
                        @endforeach
                        <div class="pt-2">
                            <x-primary-button>Add Item</x-primary-button>
                        </div>
                    </form>
                </div>
                <div class="w-full md:w-1/2 mt-8 md:mt-0">
                    <header class="mb-4">
                        <h2 class="text-lg font-medium text-gray-900"> Manage {{ $sec['title'] }} </h2>
                    </header>
                    <ul class="divide-y divide-gray-100 flex flex-col gap-2">
                        @forelse($sec['items'] as $item)
                        <li class="py-3 flex justify-between items-start gap-4">
                            <div class="text-gray-800 text-sm">
                                @if(isset($item->company) || isset($item->name) || isset($item->aspect) || isset($item->term))
                                    <strong>{{ $item->company ?? $item->name ?? $item->aspect ?? $item->term }}</strong>
                                @endif
                                @if(isset($item->role)) <br><span class="text-gray-500">{{$item->role}}</span> @endif
                                @if(isset($item->description) || isset($item->goal)) <br><span class="text-xs text-gray-400">{{ \Illuminate\Support\Str::limit($item->description ?? $item->goal, 50) }}</span> @endif
                            </div>
                            <form method="post" action="{{ route($sec['route_destroy'], $item) }}" class="inline shrink-0">
                                @csrf @method('delete')
                                <button type="submit" class="text-red-600 hover:text-red-900 text-sm font-medium" onclick="return confirm('Delete this?');">Delete</button>
                            </form>
                        </li>
                        @empty
                        <li class="py-3 text-gray-500 text-sm">Belum ada data ditambahkan.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</x-app-layout>