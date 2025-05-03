<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Tentukan kolom yang boleh diisi melalui mass-assignment
    protected $fillable = ['name'];

    // Relasi one to many dengan model Item
    public function items()
    {
        return $this->hasMany(Item::class , 'category_id');
    }
}
