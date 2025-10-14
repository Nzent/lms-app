@extends('layouts.app')

@section('title', $user->name . ' - LMS')

@section('content')
    <div class="mb-8">
        <a href="{{ route('users.index') }}" class="text-slate-600 hover:text-slate-900 flex items-center mb-4">
            ← Back to Students
        </a>
        <h1 class="text-4xl font-bold text-slate-800">{{ $user->name }}</h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Personal Details Card -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold text-slate-800 mb-4 border-b pb-3">Personal Details</h2>
                <div class="space-y-4">
                    <div>
                        <p class="text-slate-600 text-sm font-semibold uppercase">Name</p>
                        <p class="text-slate-900 font-medium">{{ $user->name }}</p>
                    </div>
                    <div>
                        <p class="text-slate-600 text-sm font-semibold uppercase">Email</p>
                        <p class="text-slate-900 font-medium">{{ $user->email }}</p>
                    </div>
                    <div>
                        <p class="text-slate-600 text-sm font-semibold uppercase">Registration Number</p>
                        <p class="text-slate-900 font-medium">{{ $user->registration_number }}</p>
                    </div>
                    <div>
                        <p class="text-slate-600 text-sm font-semibold uppercase">Phone</p>
                        <p class="text-slate-900 font-medium">{{ $user->phone ?? 'N/A' }}</p>
                    </div>
                    <div>
                        <p class="text-slate-600 text-sm font-semibold uppercase">Date of Birth</p>
                        <p class="text-slate-900 font-medium">{{ $user->date_of_birth ?? 'N/A' }}</p>
                    </div>
                    <div>
                        <p class="text-slate-600 text-sm font-semibold uppercase">Address</p>
                        <p class="text-slate-900 font-medium">{{ $user->address ?? 'N/A' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course & Batch Details Card -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Batch Details -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold text-slate-800 mb-4 border-b pb-3">Batch Details</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-slate-600 text-sm font-semibold uppercase">Batch</p>
                        <p class="text-slate-900 font-medium text-lg">{{ $user->batch }}</p>
                    </div>
                    <div>
                        <p class="text-slate-600 text-sm font-semibold uppercase">Registration Date</p>
                        <p class="text-slate-900 font-medium">{{ $user->created_at->format('M d, Y') }}</p>
                    </div>
                </div>
            </div>

            <!-- Course Details -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold text-slate-800 mb-4 border-b pb-3">Enrolled Courses</h2>
                @forelse($user->courses as $course)
                    <div class="mb-4 pb-4 border-b last:border-b-0 last:mb-0 last:pb-0">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-bold text-slate-900">{{ $course->name }}</h3>
                                <p class="text-slate-600 text-sm">Code: {{ $course->code }}</p>
                                <p class="text-slate-700 text-sm mt-1">{{ $course->description }}</p>
                            </div>
                            <span
                                class="inline-block bg-green-200 text-green-800 px-3 py-1 rounded-full text-xs font-semibold">
                                {{ $course->credits }} Credits
                            </span>
                        </div>
                    </div>
                @empty
                    <p class="text-slate-500">No courses enrolled</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
