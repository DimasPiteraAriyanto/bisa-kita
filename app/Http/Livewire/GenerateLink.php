<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Product_details;
use Livewire\WithFileUploads;
use App\Models\Products;
use Livewire\Component;

class GenerateLink extends Component
{
    use WithFileUploads;
    public $domain, $name, $newImage, $whatsapp, $memberId, $show, $newId, $id_product, $nameProducts;


    public function mount($name_product, $id){
        $this->nameProducts = Products::where('name_product', $name_product)->first();
        $this->idProducts = Products::where('id', $id)->first();
        $this->idProducts=$id;
    }


    public function store(){
        $this->validate([
            'domain'=> 'required',
            'name'=>'required',
            'newImage' => 'image|max:1024, dimensions:min_width=300,max_width=300', // 1MB Max
            'whatsapp' => 'required',
            'memberId' => 'required',
        ]);
        $image = $this->newImage->store('posts','public');

        Post::create([
            'domain'=>$this->domain,
            'name'=>$this->name,
            'id_product' => $this->idProducts,
            'image'=>$image,
            'whatsapp'=>$this->whatsapp,
            'memberId'=>$this->memberId,
            'slug'=>$this->slug = '',
        ]);

        return redirect()->route('generate-index');
    }

    public function render()
    {
        $products = Products::latest()->take(5)->get();
        return view('livewire.generate-link', compact('products'));
    }
}
