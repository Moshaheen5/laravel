@extends('layouts.layout')


@section('content')


<h1 class="text-dark fw-bold text-center w-50 mt-5 m-auto"> {{$course->name}}</h1> 
<table class="table w-75 m-auto table-bordered mt-5 ">
    <thead>
        <tr>
            <th class=" text-center">id</th>
            <th class=" text-center">Name</th>
            <th class=" text-center">description</th>
            <th class=" text-center">total_degree</th>
            <th class=" text-center">Actions</th>
           
        </tr>
    </thead>
    <tbody class="text-center">
            <tr>
               
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->description }}</td>
                <td>{{ $course->total_degree }}</td>
            
               
                
                
                <td>
                   <a href="{{route('courses.index')}}">
                     <button class="btn btn-warning">Back</button>
                    </a>
                </td>
            </tr>


    </tbody>
</table>


@endsection

