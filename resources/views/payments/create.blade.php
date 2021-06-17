@extends('layout')
@section('content')
<section>
    <div class="container">
        <form method="post" action="/payments/store">
            @csrf
            <div class="row mt-5">
                <div class="col-md-6 mb-4">
                    <select name="student_id" class="form-control">
                        @foreach($students as $student)
                        <option value="{{$student->id}}">
                            {{$student->username}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-4">
                    <input name="amount" type="number" step=".01" placeholder="Amount" class="form-control">
                </div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-success w-100">Add Payment</button>
                </div>
                <div class="col-md-4">
                    <a href="/payments" class="btn btn-primary w-100">Go Back</a>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection