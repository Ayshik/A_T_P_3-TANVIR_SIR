@extends('layouts.body')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Dob</th>
            <th></th>
        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->id}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->dob}}</td>
                <td><a href="/updatestudent/{{$student->id}}/{{$student->name}}">Edit</a></td>
            </tr>
        @endforeach
    </table>
@endsection