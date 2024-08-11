@extends('layouts.layout')


@section('content')


<h1 class="text-info fw-bold text-center w-50 my-4 m-auto">All Students</h1>

<table class="table w-75 m-auto table-bordered table  table-striped mt-3">
    <thead class="text-center  ">
        <tr>
            <th class="text-center  " scope="col">ID</th>
            <th class="text-center" scope="col">Name</th>
            <th class="text-center" scope="col">Email</th>
            <th class="text-center" scope="col">Address</th>
            <th class="text-center" scope="col">Gender</th>
            <th class="text-center" scope="col">Picture</th>
            <th class="text-center" scope="col">Grade</th>
            <th class="text-center" scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr class="text-center">
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->gender }}</td>
            <td>
                @if($student->image)
                <img src="{{ asset('uploads/students/' . $student->image) }}" alt="Student Image" style="width: 40px;  height: auto;">
                @else
                No Image
                @endif
            </td>
            <td>{{ $student->grade }}</td>
            <td>
                <div class="d-flex gap-3 justify-content-center">
                    <a href="{{ route('students.view', $student->id) }}"> 
                        <button class="btn btn-info">View</button>
                    </a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    <a href="{{ route('students.edit', $student->id) }}"> 
                        <button class="btn btn-warning">Update</button>
                    </a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="container mt-5">
    <div class="d-flex justify-content-center g-4">
        <a href="{{ route('students.create') }}">
            <button class="btn btn-info">Create New Student</button>
        </a>
    </div>
</div>
@endsection