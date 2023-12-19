@extends('layout')

@section('content')

    <center>
        <h3>Student List</h3>
    </center>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>Id</th>
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
                                <a href="{{ route('students.show', $student->id)}}" class="btn btn-info">Show</a>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <a href="{{ route('students.edit', $student->id)}}" class="btn btn-primary">Edit</a>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <a href="{{ route('students.destroy', $student->id)}}" class="btn btn-danger">Delete</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection