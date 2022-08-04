<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_details extends Model
{
    use HasFactory;

    protected $fillable = ['title','content_1', 'product_id'];

    public function productDetails(){
        return $this->hasMany(Products::class);
    }
}
