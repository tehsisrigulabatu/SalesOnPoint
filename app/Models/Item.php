<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Tentukan kolom yang boleh diisi melalui mass-assignment
    protected $fillable = ['category_id', 'name', 'price', 'stock'];

    public function category() // ✅ benerin nama method-nya
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
}
