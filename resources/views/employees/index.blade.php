@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Employees of {{ $employer->name }}</h1>
    <form id="addEmployeeForm" method="POST" action="{{ route('employees.store', $employer->id) }}" enctype="multipart/form-data" class="mb-6">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" id="name" name="name" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" id="email" name="email" required>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" id="image" name="image">
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Add Employee</button>
    </form>

    <ul class="list-disc pl-5">
        @foreach($employer->employees as $employee)
        <li class="mb-2">
            <span class="font-semibold">{{ $employee->name }}</span> - {{ $employee->email }}
        </li>
        @endforeach
    </ul>
</div>
@endsection