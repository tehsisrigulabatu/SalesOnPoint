@extends('layout')
@section('title', 'Transaction')
@section('content-title', 'Transaction')
@section('content')

<div class="row">
    <div class="col-md-8">
        <a class="btn btn-success" href="">Add</a>
        <table class="table">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>User ID</th>
                <th>Date</th>
                <th>Total</th>
                <th>Pay Total</th>
            </tr>
            <tr>
            @forelse ($transactions as $transaction)
                <td>{{$loop->iteration}}</td>
                <td>{{$transaction->id}}</td>
                <td>{{$transaction->user_id}}</td>
                <td>{{$transaction->date}}</td>
                <td>{{$transaction->total}}</td>
                <td>{{$transaction->pay_total}}</td>
                
                <td>
                    <a class="btn btn-warning" href="">edit</a>
                    <a class="btn btn-danger" href="">delete</a>
                </td>
            </tr>
            @empty
                <div class="alert alert-danger">
                    Data not found

                </div>
            @endforelse
                
        </table>
    </div>

    <div class="col-md-4">
        
    </div>
</div>
@endsection

