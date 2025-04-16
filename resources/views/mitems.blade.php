@extends('layout')
@section('title', 'Items')
@section('content-title', 'Items')
@section('content')

<div class="row">
    <div class="col-md-8">
        <a class="btn btn-success" href="">Add</a>
        <table class="table">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
            <tr>
            @forelse ($items as $item)
                <td>{{$loop->iteration}}</td>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->stock}}</td>
                
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

