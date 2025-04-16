@extends('layout')
@section('title', 'Transaction History')
@section('content-title', 'Transaction History')
@section('content')

<div class="row">
    <div class="col-md-8">
        <a class="btn btn-success" href="">Add</a>
        <table class="table">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Transaction ID</th>
                <th>Item ID</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
            @forelse ($transactionDetails as $transhistory)
                <td>{{$loop->iteration}}</td>
                <td>{{$transhistory->id}}</td>
                <td>{{$transhistory->transaction_id}}</td>
                <td>{{$transhistory->item_id}}</td>
                <td>{{$transhistory->qty}}</td>
                <td>{{$transhistory->subtotal}}</td>
                
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

