@extends('layouts.admin')

@section('header', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center">
        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4 text-indigo-600">
            <i class="fas fa-code text-xl"></i>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500 uppercase">Total Skills</p>
            <p class="text-2xl font-bold text-gray-900">{{ \App\Models\Skill::count() }}</p>
        </div>
    </div>
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center">
        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4 text-indigo-600">
            <i class="fas fa-trophy text-xl"></i>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500 uppercase">Achievements</p>
            <p class="text-2xl font-bold text-gray-900">{{ \App\Models\Achievement::count() }}</p>
        </div>
    </div>
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center">
        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4 text-indigo-600">
            <i class="fas fa-eye text-xl"></i>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500 uppercase">Profile Status</p>
            <p class="text-2xl font-bold text-gray-900">Active</p>
        </div>
    </div>
</div>

<div class="mt-10 bg-white p-8 rounded-xl shadow-sm border border-gray-100">
    <h2 class="text-lg font-bold text-gray-900 mb-4">Welcome back, Admin!</h2>
    <p class="text-gray-600 leading-relaxed">
        This is your portfolio management system. You can update your personal information, manage your technical skills, and showcase your achievements from the sidebar menu.
    </p>
</div>
@endsection
