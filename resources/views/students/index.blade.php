@extends('layout')

@section('content')

    <div class="table-wrapper">

        <!-- quick menu -->

        <div class="flex-container mt-2">
            <img src="img/manageStudents.png" height="150" width="150" alt="">

            <div class="col-8">
                <a class="btn btn-primary btn-sm col-10" href="{{ url('/students/create')}}">Add Student</a>
                
                <div class="col-md mt-2">
                    <a class="btn btn-info btn-sm col-5" href="#">Export Data</a>
                    <a class="btn btn-info btn-sm col-5" href="#">Import Data</a>
                </div>
                
                <!-- <a class="btn btn-danger btn-sm col-10 mt-2" id="deleteAllSelectedStudents" href="#">Clear Selected Students</a> -->
            </div>

        </div>

        <!-- students list -->

        <table class="fl-table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Section</th>
                    <th>Image</th>
                    <th>Show</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>

            </thead>

            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id}}</td>
                        <td>{{ $student->name}}</td>
                        <td>{{ $student->email}}</td>
                        <td>{{ $student->phone}}</td>
                        <td>{{ $student->section}}</td>
                        <td><img src="/image/{{ $student->image}}" width="50" height="50"/></td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                <a href="{{ route('students.show', $student->id)}}" class="btn btn-info btn-sm">Show</a>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('students.edit', $student->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                        <td>
                            <form action="{{ url('students/'.$student->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection


