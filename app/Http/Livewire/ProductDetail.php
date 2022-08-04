<?php

namespace App\Http\Livewire;

use App\Models\Product_details;
use App\Models\Products;
use Livewire\Component;

class ProductDetail extends Component
{
    public $nameProducts, $title, $content_1, $productId, $productDetails;
    public $product_id = [];


    public function getId($productId){
        Products::find($productId->id);
    }

    public function loadProduct($model){
        // get an array of ids
        $setOfIds = $model->productId->pluck('id')->toArray();

		//  ---- PREFILL!!! ----
		// use the ids as the keys
		// fill the values with true so all the checkboxes are checked
		$this->product_id = array_fill_keys($setOfIds, true);

        // set the many stuff for the loop
		$fillProduct = $this->productId = $model->productId;
    }

    public function mount($name_product){
        $this->nameProducts = Products::where('name_product', $name_product)->first();
    }

    public function storeProducts()
    {
        $this->validate([
            'title'   => 'required',
            'content_1' => 'required',
            'product_id' => 'required'
        ]);
            // get array product
            $isi = $this->product_id;
            // convert array to string
            $encode = implode($isi);

        Product_details::create([
            'product_id'   => $encode,
            'title'     => $this->title,
            'content_1'   => $this->content_1,
        ]);
        $this->reset();
        //redirect
        return redirect()->route('products.index');
    }

    public function render()
    {
        $products = Products::latest()->take(5)->get();
        // dd($products);
        return view('livewire.product-detail', compact('products'));
    }
}
