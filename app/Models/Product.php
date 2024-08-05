<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
        'category_id'
    ];

    public function category()
    {
        // Menghubungkan setiap Product dengan satu Category
        // Menggunakan Category::class untuk menunjukkan model Category
        return $this->belongsTo(Category::class);
    }
}
