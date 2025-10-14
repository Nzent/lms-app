@extends('layouts.app')

@section('title', 'Users List - LMS')

@section('content')
    <div class="mb-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">Students Directory</h1>
        <p class="text-gray-600">Total Students: {{ count($users) }}</p>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-blue-600 text-white">
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
                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $user->id }}</td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $user->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $user->email }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $user->registration_number }}</td>
                            <td class="px-6 py-4 text-sm">
                                <span
                                    class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-semibold">
                                    {{ $user->batch }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="{{ route('users.show', $user) }}"
                                    class="inline-block bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
                                    View
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                                No users found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
