<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Products;
use Livewire\Component;

class DashboardIndex extends Component
{
    public $showCountPost;
    public function mount(){
    // count jumlah landing page
       $this->showCountPost = Post::latest()->count();

    // count produk
       $this->showCountProducts = Products::latest()->count();

    //count landing page per product
       $this->showCountProduct1 = Post::where('id_product', '1')->count();

       $this->showCountProduct2 = Post::where('id_product', '2')->count();

       $this->showCountProduct3 = Post::where('id_product', '3')->count();

       $this->showCountProduct4 = Post::where('id_product', '4')->count();

       $this->showCountProduct5 = Post::where('id_product', '5')->count();

       $this->showCountProduct6 = Post::where('id_product', '6')->count();

       $this->showCountProduct7 = Post::where('id_product', '7')->count();

       $this->showCountProduct8 = Post::where('id_product', '8')->count();

       $this->showCountProduct9 = Post::where('id_product', '9')->count();
    }

    public function render()
    {
        $details =
        Products::first()
        ->join('posts', 'products.id', '=', 'posts.id_product' )
        ->join('product_details', 'products.id', '=', 'product_details.product_id')
        ->select('posts.*','products.name_product','products.deskripsi_product','products.slugProduct','product_details.title','product_details.image_1','product_details.content_1')
        // jangan select id dari tabel lain jika ingin mengambil id post sebagai id utama
        ->get();
        // dd($posts);
        return view('livewire.dashboard-index', compact('details'));
    }
}
