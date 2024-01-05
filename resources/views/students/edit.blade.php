@extends('layout')

@section('content')
<center>

        <h3><strong>Modify Student Informations</strong></h3>

        <form action="{{ url('students/'.$student->id) }}" method="post" enctype="multipart/form-data">

            @csrf
            @method('put')

            <div class="form-group mb-4 col-md-8 mt-4 text-md-start">
                <label for="name">Name: </label>
                <input type="text" name="name" value="{{ $student->name }}" class="form-control" required>
            </div>

            <div class="form-group mb-4 col-md-8 text-md-start">
                <label for="email">Email: </label>
                <input type="email" name="email" value="{{ $student->email }}" class="form-control" required>
            </div>

            <div class="form-group mb-4 col-md-8 text-md-start">
                <label for="phone">Phone: </label>
                <input type="phone" name="phone" value="{{ $student->phone }}" class="form-control" required maxlength="9">
            </div>

            <div class="form-group mb-4 col-md-8 text-md-start">
                <label for="section">Section: </label>
                <input type="text" name="section" value="{{ $student->section }}" class="form-control" required>
            </div>

            <!-- <div class="form-group mb-5 col-md-8 text-md-start">
                <label for="image">Image: </label>
                <input type="file" name="image" class="form-control" required>
            </div> -->

            <button type="submit" class="btn btn-primary btn-sm mt-3">Update Student</button>

        </form>

    </center>
@endsection