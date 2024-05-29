<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products_all';

    protected $fillable = [
        'name',
        'smalldesc',
        'desc',
        'price',
        'seller_id',
        'product_type',
    ];
}
