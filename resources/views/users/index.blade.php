@extends('layouts.app')

@section('title', 'Users List - LMS')

@section('content')
    <div class="mb-8">
        <h1 class="text-4xl font-bold text-slate-900 mb-2">Sterin LMS Users List</h1>
        <p class="text-slate-800 italic">Total Students: <span className="font-bold">{{ count($users) }}</span></p>
    </div>

    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-slate-900 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold">ID</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Name</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Email</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Registration Number</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Batch</th>
                        <th class="px-6 py-3 text-center text-sm font-semibold">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr class="border-b hover:bg-slate-50 transition">
                            <td class="px-6 py-4 text-sm text-slate-700">{{ $user->id }}</td>
                            <td class="px-6 py-4 text-sm font-medium text-slate-900">{{ $user->name }}</td>
                            <td class="px-6 py-4 text-sm text-slate-700">{{ $user->email }}</td>
                            <td class="px-6 py-4 text-sm text-slate-700">{{ $user->registration_number }}</td>
                            <td class="px-6 py-4 text-sm">
                                <span class="inline-block bg-green-200 text-green-800 px-3 py-1 rounded-full text-xs font-semibold">
                                    {{ $user->batch }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="{{ route('users.show', $user) }}"
                                    class="bg-slate-900 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium duration-500  justify-center items-center w-fit inline-block mx-auto">
                                    <button class="flex items-center justify-center space-x-2">
                                        <img src="{{ asset('icons/eye.svg') }}" alt="View user" class="w-5 h-5">
                                        <span>
                                            View
                                        </span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-slate-500">
                                No users found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
