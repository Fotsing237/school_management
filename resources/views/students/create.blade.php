@extends('layout')

@section('content')
    <center>

        <h3><strong>New Student</strong></h3>

        <form action="{{route('students.store')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group mb-4 col-md-8 mt-4 text-md-start">
                <label for="name">Name: </label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group mb-4 col-md-8 text-md-start">
                <label for="email">Email: </label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group mb-4 col-md-8 text-md-start">
                <label for="phone">Phone: </label>
                <input type="phone" name="phone" class="form-control" required maxlength="9">
            </div>

            <div class="form-group mb-4 col-md-8 text-md-start">
                <label for="section">Section: </label>
                <input type="text" name="section" class="form-control" required>
            </div>

            <div class="form-group mb-5 col-md-8 text-md-start">
                <label for="image">Image: </label>
                <input type="file" name="image" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary btn-sm mb-5">Add Student</button>

        </form>

    </center>

@endsection