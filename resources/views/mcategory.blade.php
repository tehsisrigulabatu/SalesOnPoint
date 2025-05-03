@extends('layout')
@section('title', 'Category')
@section('content-title', 'Category')
@section('content')

@session('success')
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endsession

<div class="row">
    <div class="col-md-8">
        <a class="btn btn-success" href="{{ url('/category/create') }}">Add</a>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
                

            </tr>
            <tr>
            @forelse ($categories as $category)
                <td>{{$loop->iteration}}</td>
                <td>{{$category->name}}</td>
                
                <td>
                    <a class="btn btn-warning" href="{{ route('category.edit', $category->id) }}">edit</a>
                    <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline;">
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

