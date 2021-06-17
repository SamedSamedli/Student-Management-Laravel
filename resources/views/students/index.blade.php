@extends('layout')
@section('content')
<section>
    <div class="container">
        <div class="custom-table-wrapper">
            <table class="table table-hover" id="d-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Mail</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Group</th>
                        <th>Fee</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->username}}</td>
                        <td>{{$student->mail}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->surname}}</td>
                        <td>{{$student->group}}</td>
                        <td>{{$student->fee}}</td>
                        <td>
                            <a href="/students/edit/{{$student->id}}" class="btn btn-primary">✎</a>
                            <a href="/students/delete/{{$student->id}}" class="btn btn-danger">🗑</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <p class="text-center mt-4">
            <a href="/students/create" class="btn btn-success">Add Student</a>
        </p>
    </div>
</section>
@endsection