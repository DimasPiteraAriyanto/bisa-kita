<?php

namespace App\Http\Livewire;

use App\Models\Product_details;
use App\Models\Products;
use Livewire\Component;

class ProductDetailEdit extends Component
{
    public $nameProducts, $title, $content_1, $productId, $editDetails;
    public $product_id = [];


    public function mount($name_product, $product_id){
        $this->nameProducts = Products::where('name_product', $name_product)->first();
        $productId = $this->productDetails = Product_details::where('product_id', $product_id)->first();
        // $product = Product_details::find($id);
        // dd($product);


        if($productId) {
            $this->product_id   = $productId->product_id;
            $this->title    = $productId->title;
            $this->content_1  = $productId->content_1;
        }
    }

    public function updateProductDetails(){
        $this->validate([
            'title'=> 'required',
            'content_1'=>'required',
            'product_id' => 'required',
        ]);

        $this->productDetails->update([
            'title'=>$this->title,
            'content_1'=>$this->content_1,
        ]);

        return redirect()->route('products.index');
    }


    public function render()
    {
        $products = Products::latest()->take(5)->get();
        return view('livewire.product-detail-edit', compact('products'));
    }
}
