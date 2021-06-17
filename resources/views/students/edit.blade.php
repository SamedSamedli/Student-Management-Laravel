@extends('layout')
@section('content')
<section>
    <div class="container">
        <form method="post" action="/students/update">
            @csrf
            <input value="{{$student->id}}" name="id" type="hidden">
            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <input value="{{$student->username}}" name="username" type="text" placeholder="Username" class="form-control">
                </div>
                <div class="col-md-4 mb-4">
                    <input value="{{$student->mail}}" name="email" type="email" placeholder="Email" class="form-control">
                </div>
                <div class="col-md-4 mb-4">
                    <input value="{{$student->name}}" name="name" type="text" placeholder="Name" class="form-control">
                </div>
                <div class="col-md-4 mb-4">
                    <input value="{{$student->surname}}" name="surname" type="text" placeholder="Surname" class="form-control">
                </div>
                <div class="col-md-4 mb-4">
                    <input value="{{$student->group}}" name="group" type="text" placeholder="Group" class="form-control">
                </div>
                <div class="col-md-4 mb-4">
                    <input value="{{$student->fee}}" name="fee" type="number" step=".01" placeholder="Fee" class="form-control">
                </div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-success w-100">Edit Student</button>
                </div>
                <div class="col-md-4">
                    <a href="/students" class="btn btn-primary w-100">Go Back</a>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection