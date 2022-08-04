<?php

namespace App\Http\Livewire;

use App\Models\Product_details;
use App\Models\Products;
use Livewire\Component;

class GenerateIndex extends Component
{
    public $name_product, $product_id, $nameProducts, $productDetails;

    // public function mount($name_product, $product_id){
    //     $this->nameProducts = Products::where('name_product', $name_product)->first();
    //     $productId = $this->productDetails = Product_details::where('product_id', $product_id)->first();
    //     // $product = Product_details::find($id);
    //     // dd($product);


    //     if($productId) {
    //         $this->product_id   = $productId->product_id;
    //         $this->title    = $productId->title;
    //         $this->content_1  = $productId->content_1;
    //     }
    // }

    public function render()
    {
        $products = Products::latest()->take(10)->get();
        // dd($products);
        return view('livewire.generate-index', compact('products'));
    }
}
