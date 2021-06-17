@extends('layout')
@section('content')
<section>
    <div class="container">
        <div class="custom-table-wrapper">
            <table class="table table-hover" id="d-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student ID</th>
                        <th>Student Username</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $payment)
                    <tr>
                        <td>{{$payment->id}}</td>
                        <td>{{$payment->student->id}}</td>
                        <td>{{$payment->student->username}}</td>
                        <td>{{$payment->amount}}</td>
                        <td>{{$payment->paid_date}}</td>
                        <td>
                            <a href="/payments/delete/{{$payment->id}}" class="btn btn-danger">🗑</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <p class="text-center mt-4">
            <a href="/payments/create" class="btn btn-success">Add Payment</a>
        </p>
    </div>
</section>
@endsection