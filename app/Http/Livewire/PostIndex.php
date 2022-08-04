<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Products;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;

class PostIndex extends Component
{
    use WithFileUploads;
    public bool $showingPostsModal = false;

    public $domain;
    public $slug;
    public $name;
    public $newImage;
    public $oldImage;
    public $whatsapp;
    public $memberId;
    public $post;
    // this for trigger other Create is a Update
    public $isEditModal = false;

    public function showPostModal (){
        // use this because the modal will be reset after close the edit modal and change to be a create modal
        $this->reset();
        $this->showingPostsModal = true;
        // show modal with this trigger because on the line 12 showingPostsModal is false
    }

    public function updatedTitle()
    {
        $this->slug = SlugService::createSlug(Post::class, 'slug', $this->title);
    }

    public function storePost(){

        $this->validate([
            'domain'=> 'required',
            'name'=>'required',
            'newImage' => 'image|max:1024, dimensions:min_width=500,max_width=500', // 1MB Max
            'whatsapp' => 'required',
            'memberId' => 'required',
        ]);
        $image = $this->newImage->store('public/posts');

        Post::create([
            'domain'=>$this->domain,
            'name'=>$this->name,
            'image'=>$image,
            'whatsapp'=>$this->whatsapp,
            'memberId'=>$this->memberId,
            'slug'=>$this->slug = '',
        ]);
        $this->reset();
    }

    public function showEditPost($id){
        $this->post = Post::findOrFail($id);
        $this->domain = $this->post->domain;
        $this->name = $this->post->name;
        $this->oldImage = $this->post->image;
        $this->whatsapp = $this->post->whatsapp;
        $this->memberId = $this->post->memberId;
        // show modal with this trigger because on the line 12 showingPostsModal is false
        $this->showingPostsModal = true;

        $this->isEditModal = true;
    }

    public function updatePost(){
        $this->validate([
            'domain'=> 'required',
            'name'=>'required',
            'whatsapp' => 'required',
            'memberId' => 'required',
        ]);

        $image = $this->post->image;
        if($this->newImage){
        $image = $this->newImage->store('public/posts');
        }


        $unlink = $this->oldImage = $this->post->image;
        // dd($unlink);
        Storage::delete($unlink);

        $this->post->update([
            'domain'=>$this->domain,
            'name'=>$this->name,
            'image'=>$image,
            'whatsapp'=>$this->whatsapp,
            'memberId'=>$this->memberId,
        ]);

        $this->reset();
    }


    public function deletePost($id){
        $post = Post::findOrFail($id);
        Storage::delete($post->image);
        $post->delete();
        $this->reset();
    }

    // public function mount($id)
    //  {
    //      $this->post = Post::find($id);
    //  }


    public function render()
    {
        // return view('livewire.post-index', [
        //     'posts' => Post::all(),
        // ]);

        $posts =
        Products::first()
        ->join('posts', 'products.id', '=', 'posts.id_product' )
        ->join('product_details', 'products.id', '=', 'product_details.product_id')
        ->select('posts.*','products.name_product','products.deskripsi_product','products.slugProduct','product_details.title','product_details.image_1','product_details.content_1')
        // jangan select id dari tabel lain jika ingin mengambil id post sebagai id utama
        ->get();

        // $posts2=Post::latest()->take(5)->get();
        // dd($posts);
        return view('livewire.post-index', compact('posts'));
    }
}
