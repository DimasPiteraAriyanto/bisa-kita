<?php

namespace App\Http\Livewire;

use App\Models\Product_details;
use App\Models\Products;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;


    public function render()
    {

        $products = Products::latest()->take(10)->get();
        return view('livewire.product-index', compact('products'));
    }
}
