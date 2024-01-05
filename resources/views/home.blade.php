@extends('layout')

@section('content')

    <table border="0" style="width: 800px; margin: 50px;">
        <tr>
            <td>
                <a href="/students">
                    <!-- <img onclick="window.location.href='http://example.com'" class="alignnone size-full wp-image-1303" src="image-source" alt="" width="850" height="1250" /> -->
                    <!-- <img src="img/student.jpg" onclick="window.location.href='/students'" height="150" width="150" alt="" srcset=""> -->
                    <img src="img/student.jpg" height="150" width="150" alt="" srcset="">
                    <h3>Manage Student</h3>
                </a>
            </td>

            <td>
                <a href="#">
                    <img src="img/teacher.png" height="150" width="150" alt="" srcset="">
                    <h3>Manage Teachers</h3>
                </a>
            </td>
        </tr>

        <tr>
            <td>
                <a href="#">
                    <img src="img/library.png" height="150" width="150" alt="" srcset="">
                    <h3>Manage Libraries</h3>
                </a>
            </td>

            <td>
                <a href="#">
                    <img src="img/administrator.png" height="150" width="150" alt="" srcset="">
                    <h3>Administrators</h3>
                </a>
            </td>
        </tr>
    </table>

@endsection