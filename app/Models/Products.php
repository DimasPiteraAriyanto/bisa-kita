<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['name_product', 'deskripsi_product', 'image_product','slugProduct'];

    public function productDetails(){
        return $this->belongsTo(Product_details::class);
    }
}
