<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<x-NAV>Tracks</x-NAV>
    <h1 class="text-bold w-50 mt-5 m-auto"> <img src="{{ asset('uploads/tracks/' . $track->image) }} " style="width: 200px; border-radius: 30%; height: auto;" >{{$track->name}} Track</h1>
    <table class="table w-75 m-auto table-bordered mt-5">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">location</th>
            <th scope="col">Type</th>
            <th scope="col">Phone</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>

        
            <tr>
              
                <td>{{ $track->id }}</td>
                <td>{{ $track->name }}</td>
                <td>{{ $track->location }}</td>
                <td>{{ $track->type }}</td>
                
                <td>{{ $track->phone }}</td>
                <td>
                   
                   <a href="{{route('tracks.index',$track->id)}}"> <button class="btn btn-warning">Back</button></a>
                   

                </td>
            </tr>
    </tbody>
</table>

<h1 class="text-bold w-50 mt-5 m-auto">Courses in {{$track->name}} Track</h1>
@if (count($courses)>0)
    

    <table class="table w-75 m-auto table-bordered mt-5">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Total Grade</th>
          
        </tr>
    </thead>
    <tbody>

    @foreach ($courses as $course)
            <tr>
        
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->totalgrade }}</td>

            </tr>
            @endforeach
    </tbody>
</table>
@endif 
@if (count($courses)== 0)
<h3 class="text-center p-5 m-5 text-danger"> this Track has no Courses </h3>
@endif

<h1 class="text-bold w-50 mt-5 m-auto">Students in {{$track->name}} Track</h1>
@if (count($students)>0)
    

    <table class="table w-75 m-auto table-bordered mt-5">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Profile</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
          
        </tr>
    </thead>
    <tbody>

    @foreach ($students as $student)
            <tr>
        
                <td>{{ $student->id }}</td>
                <td>
                    @if($student->image)
                        <img src="{{ asset('uploads/students/' . $student->image) }}" alt="Student Image" style="width: 40px; border-radius: 50%; height: auto;">
                    @else
                        No Image
                    @endif
                </td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>

            </tr>
            @endforeach
    </tbody>
</table>
@endif 
@if (count($students)== 0)
<h3 class="text-center p-5 m-5 text-danger"> this Track has no Student </h3>
@endif





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
