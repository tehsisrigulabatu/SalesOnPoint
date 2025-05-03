<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Tentukan kolom yang boleh diisi melalui mass-assignment
    protected $fillable = ['date', 'total', 'paytotal'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
