<?php

namespace App\Http\Livewire;

use App\Models\Products;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ProductMasters extends Component
{

    use WithPagination;
    use WithFileUploads;
    public bool $showingProductModal = false;
    public $deskripsi_product, $name_product, $newImageProduct, $slugProduct;

    public $readyToLoad = false;

    // this for trigger other Create is a Update
    public $isEditModal = false;

    public function showProductModal (){
        // use this because the modal will be reset after close the edit modal and change to be a create modal
        $this->reset();
        $this->showingProductModal = true;
        // show modal with this trigger because on the line 12 showingPostsModal is false
    }

    public function storeProductMaster(){
        $this->validate([
            'name_product'=> 'required',
            'deskripsi_product'=>'required',
            'slugProduct'=>'required',
            'newImageProduct' => 'image|max:1024', // 1MB Max
            // validate and create the variable must be same sama jumlahnya juga
        ]);

        $image = $this->newImageProduct->store('products','public');

        Products::create([
            'name_product'=>$this->name_product,
            'slugProduct'=>$this->slugProduct,
            'deskripsi_product'=>$this->deskripsi_product,
            'image_product'=>$image,
        ]);

        $this->reset();
    }

    public function deleteProducts($id){
        $product = Products::findOrFail($id);
        // dd($product);
        Storage::delete($product->image_product);
        $product->delete();
        $this->reset();
    }

    public function loadPosts()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        // $products = Products::latest()->take(10)->get();
        // return view('livewire.product-masters', compact('products'));
        return view('livewire.product-masters', [
            'products' => Products::paginate(5) ,
        ]);
    }
}
