@extends('layout')
@section('title')
@section('content-title')
@section('content')
    <h2>Create {{ ucfirst($type) }}</h2>

    <form action="{{ url("/$type") }}" method="POST">
        @csrf

        {{-- CATEGORY --}}
        @if($type == 'category')
            <div>
                <label>Category Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

        {{-- ITEM --}}
        @elseif($type == 'items')
            <div>
                <label>Category</label>
                <select name="category_id">
                    {{-- <option value="">-- Pilih Category --</option> --}}
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Item Name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label>Price</label>
                <input type="number" name="price">
            </div>
            <div>
                <label>Stock</label>
                <input type="number" name="stock">
            </div>

        {{-- TRANSACTION --}}
        @elseif($type == 'transaction')
            <div>
                <label>Date</label>
                <input type="number" name="date">
            </div>
            <div>
                <label>Total</label>
                <input type="number" name="total">
            </div>
            <div>
                <label>Paytotal</label>
                <input type="number" name="pay_total">
            </div>

        {{-- TRANSACTION DETAIL --}}
        @elseif($type == 'historytransaction')
            <div>
                <label>Transaction</label>
                <select name="transaction_id">
                    @foreach($transactions as $trx)
                        <option value="{{ $trx->id }}">Transaksi #{{ $trx->id }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Item</label>
                <select name="item_id">
                    @foreach($items as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Quantity</label>
                <input type="number" name="qty">
            </div>
            <div>
                <label>Subtotal</label>
                <input type="number" name="subtotal">
            </div>
        @endif

        <button type="submit">Create</button>
    </form>

@endsection