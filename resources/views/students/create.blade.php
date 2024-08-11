@extends('layouts.layout')



@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info mb-4">Create New Student</h1>
                    
                    <form method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="exampleInputName1" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputName1" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputgrade1" class="form-label">Grade</label>
                            <input name="grade" type="number" class="form-control" id="exampleInputgrade1" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputImage1" class="form-label">Image</label>
                            <input name="image" type="file" class="form-control" id="exampleInputImage1" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputAddress1" class="form-label">Address</label>
                            <input name="address" type="text" class="form-control" id="exampleInputAddress1" required>
                        </div>

                        <label class="form-label">Gender</label>
                        <div class="form-check">
                            <input name="gender" class="form-check-input" type="radio" id="flexRadioDefault1" value="male" required>
                            <label class="form-check-label" for="flexRadioDefault1">Male</label>
                        </div>
                        <div class="form-check">
                            <input name="gender" class="form-check-input" type="radio" id="flexRadioDefault2" value="female" required>
                            <label class="form-check-label" for="flexRadioDefault2">Female</label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mt-4">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

@endsection