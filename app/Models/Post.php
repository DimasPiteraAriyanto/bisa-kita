<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;


    protected $fillable = ['domain','name','image','whatsapp','memberId','slug','id_product'];


    public function productDetails(){
        return $this->belongsTo(Product_details::class);
    }

    public function sluggable(): array
    {

        return [
            'slug' => [
                'source' => 'domain'
            ]
        ];
    }
}

