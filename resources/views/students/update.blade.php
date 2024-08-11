@extends('layouts.layout')


@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-info text-center mb-4">Edit Student</h1>
                    
                    
                    <form action="{{ route('students.update', $student->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $student->name) }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $student->email) }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $student->address) }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <input type="text" class="form-control" id="gender" name="gender" value="{{ old('gender', $student->gender) }}" required>
                        </div>
                        
                        <div class="mb-3 text-center">
                            <label for="current_image" class="form-label">Current Picture</label>
                            <div>
                                <img src="{{ asset('uploads/students/' . $student->image) }}" alt="Student Image" width="150" height="150" class="img-thumbnail">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload New Picture (optional)</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        
                        <div class="mb-3">
                            <label for="grade" class="form-label">Grade</label>
                            <input type="text" class="form-control" id="grade" name="grade" value="{{ old('grade', $student->grade) }}" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection