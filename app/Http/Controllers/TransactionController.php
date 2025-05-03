<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::all();
        return view('transaction', compact('transactions'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create', ['type' => 'transaction']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi dulu
         $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'total' => 'required|numeric',
            'pay_total' => 'required|integer'
        ]);

        // Simpan ke database
        Transaction::create([
            'date' => $request->date,
            'total' => $request->total,
            'pay_total' => $request->pay_total,
            'user_id' => $request->user_id
        ]);

        // Redirect balik ke index + kasih pesan sukses
        return redirect('/transaction')->with('success', 'Category berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transaction.index')->with('success', 'Item deleted!');
    }
}
