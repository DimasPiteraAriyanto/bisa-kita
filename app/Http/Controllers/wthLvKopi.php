<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Products;
use Illuminate\Http\Request;

class wthLvKopi extends Controller
{

    public function __invoke($id)
    {
        $posts =
        // DB::table('products')
        Products::join('posts', 'products.id', '=', 'posts.id_product')
        ->join('product_details', 'products.id', '=', 'product_details.product_id')
        ->where('posts.id', $id)
        // ->where('posts.id_product', $id_product)
        ->select('posts.*','products.name_product','products.deskripsi_product','products.slugProduct','product_details.title','product_details.image_1','product_details.content_1')
        ->first();
        // ->get();
        // dd($posts);
        return view ('kopi-index', compact('posts'));
    }
}
