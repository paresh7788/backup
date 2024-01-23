@extends('layout.app')

@section('title', 'home')

@section('content')


<div class="bg-gray-200 p-6 rounded-lg shadow-md  ">
    <h1 class="text-2xl font-bold mb-4">Add Student</h1>

    <form action="adstu" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-sm font-semibold text-gray-600">Student Name</label>
            <input type="text" name="name" id="name" class="form-input mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold text-gray-600">Email</label>
            <input type="email" name="email" id="email" class="form-input mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="profile_pic" class="block text-sm font-semibold text-gray-600">Profile Picture</label>
            <input type="file" name="profile" id="profile_pic" class="form-input mt-1 block w-full">
        </div>

        <div class="mt-6">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-800">
                Add Student
            </button>
        </div>
    </form>
</div>


@endsection