@extends('layout')

@section('title')
@section('content-title')
@section('content')

<h2></h2>

@if(isset($category))
    <h3>Edit Category</h3>
    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
    <hr>
@endif

@if(isset($item))
    <h3>Edit Item</h3>
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Item Name</label>
            <input type="text" name="name" value="{{ old('name', $item->name) }}" required>
        </div>
        <div>
            <label for="price">Item Price</label>
            <input type="number" name="price" value="{{ old('price', $item->price) }}" required>
        </div>
        <div>
            <label for="stock">Item Stock</label>
            <input type="number" name="stock" value="{{ old('stock', $item->stock) }}" required>
        </div>
        <div>
            @isset($categories)
                <select name="category_id" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
             @endisset
        </div>

        <button type="submit" class="btn btn-primary">Update Item</button>
    </form>
    <hr>
@endif

@if(isset($transaction))
    <h3>Edit Transaction</h3>
    <form action="{{ route('transaction.update', $transaction->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Date</label>
            <input type="number" name="date" value="{{ old('date', $transaction->date) }}" required>
        </div>
        <div>
            <label>Total</label>
            <input type="number" name="total" value="{{ old('total', $transaction->total) }}" required>
        </div>
        <div>
            <label>Paytotal</label>
            <input type="number" name="pay_total" value="{{ old('pay_total', $transaction->pay_total) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Transaction</button>
    </form>
    <hr>
@endif

@if(isset($transactionHistory))
    <h3>Edit Transaction History</h3>
    <form action="{{ route('transaction-history.update', $transactionHistory->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Transaction</label>
            <select name="transaction_id">
                @foreach($transactions as $trx)
                    <option value="{{ $trx->id }}" {{ $transactionHistory->transaction_id == $trx->id ? 'selected' : '' }}>
                        Transaksi #{{ $trx->id }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Item</label>
            <select name="item_id">
                @foreach($items as $item)
                    <option value="{{ $item->id }}" {{ $transactionHistory->item_id == $item->id ? 'selected' : '' }}>
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Quantity</label>
            <input type="number" name="qty" value="{{ old('qty', $transactionHistory->qty) }}">
        </div>
        <div>
            <label>Subtotal</label>
            <input type="number" name="subtotal" value="{{ old('subtotal', $transactionHistory->subtotal) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Transaction History</button>
    </form>
    <hr>
@endif

@endsection
