@extends('layout')
@section('title', 'Items')
@section('content-title', 'Items')
@section('content')

@session('success')
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endsession


<div class="row">
    <div class="col-md-8">
        <a class="btn btn-success" href="{{ route('items.create') }}">Add</a>
        <table class="table">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
            <tr>
            @forelse ($items as $item)
                <td>{{$loop->iteration}}</td>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->stock}}</td>
                
                <td>
                    <a class="btn btn-warning" href="{{ route('items.edit', $item->id) }}">edit</a>
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Delete</button>
                      </form>
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

