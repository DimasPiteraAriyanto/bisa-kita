<?php

namespace App\Http\Livewire;

use App\Models\Products;
use Livewire\Component;

class PostKopi extends Component
{
    public $product;

    public function mount($name_product){
        $this->product = Products::where('name_product', $name_product)->first();
    }

    public function render()
    {
        return view('livewire.post-kopi');
    }

}
