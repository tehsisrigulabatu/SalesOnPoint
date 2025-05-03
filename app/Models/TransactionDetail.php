<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    // Tentukan kolom yang boleh diisi melalui mass-assignment
    protected $fillable = ['transaction_id', 'item_id', 'qty', 'subtotal'];
}
