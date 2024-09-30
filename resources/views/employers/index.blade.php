@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Employers</h1>
    <form id="addEmployerForm" method="POST" action="{{ route('employers.store') }}" class="mb-6">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" id="name" name="name" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" id="email" name="email" required>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Add Employer</button>
    </form>

    <ul class="list-disc pl-5">
        @foreach($employers as $employer)
        <li class="mb-2">
            <span class="font-semibold">{{ $employer->name }}</span> -
            <a href="{{ route('employees.index', $employer->id) }}" class="text-blue-500 hover:underline">View Employees</a>
        </li>
        @endforeach
    </ul>
</div>
@endsection