<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'detail', 'type'
];
    protected $primaryKey = 'product_id';
}
