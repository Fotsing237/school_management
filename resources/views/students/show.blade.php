@extends('layout')

@section('content')

    <center>
        <h3>Student Details</h3>

        <table style="border: 0px; margin-bottom: 20px">
            <tr>
                <td>
                    <p><b class="lbl">ID :</b> {{ $student->id }} </p>
                    <p><b class="lbl">Name :</b> {{ $student->name }} </p>
                    <p><b class="lbl">Phone :</b> {{ $student->phone }} </p>
                    <p><b class="lbl">Email :</b> {{ $student->email }} </p>
                    <p><b class="lbl">Section :</b> {{ $student->section }} </p>
                </td>

                <td style="padding-left: 100px;">
                    <img src="/image/{{$student->image}}" alt="" srcset="" width="180" height="180">
                </td>
            </tr>
        </table>
    </center>

@endsection