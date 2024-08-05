<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    // Atribut yang dapat diisi secara massal
    protected $fillable = ['name', 'contact', 'address'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
