@extends('layout.app')

@section('title', 'Show Students')

@section('content')

<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Show Students</h1>

    <table class="table-auto w-full">
        <tr>
            <th class="border px-4 py-2">id</th>
            <th class="border px-4 py-2">Name</th>
            <th class="border px-4 py-2">Email</th>
            <th class="border px-4 py-2">Profile Picture</th>
        </tr>

        @foreach($uploads as $upload)
            <tr>
                <td class="border px-4 py-2">{{ $upload->id }}</td>
                <td class="border px-4 py-2">{{ $upload->name }}</td>
                <td class="border px-4 py-2">{{ $upload->email }}</td>
                <td class="border px-4 py-2">
                    <img src="{{ asset('storage/'.$upload->profile_pic) }}" alt="Profile Picture" class="w-40 h-35">
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection
