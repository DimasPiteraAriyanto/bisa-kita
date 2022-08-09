<?php

use App\Http\Controllers\wthLvKopi;
use App\Http\Livewire\DashboardIndex;
use App\Http\Livewire\GenerateIndex;
use App\Http\Livewire\GenerateLink;
use App\Http\Livewire\PostIndex;
use App\Http\Livewire\ProductDetail;
use App\Http\Livewire\ProductDetailEdit;
use App\Http\Livewire\ProductIndex;
use App\Http\Livewire\ProductMasters;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/kopi', function () {
    return view('kopi-index');
});

Route::get('/fitpropolis', function () {
    return view('fitpropolis-index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // dashboard
    Route::get('/dashboard', DashboardIndex::class)->name('dashboard');

    // CRUD member via admin
    Route::get('/post/bisakita.co.id', PostIndex::class)->name('posts.index');

    // List Product
    Route::get('/produk/bisakita.co.id', ProductIndex::class)->name('products.index');

    // CRUD master product
    Route::get('/product-master', ProductMasters::class)->name('product.master');

    // Create detail product
    Route::get('/produk/{name_product}/bisakita.co.id', ProductDetail::class)->name('detailProducts.index');

    // Edit detail product
    Route::get('/produk/edit/{name_product}/{product_id}/bisakita.co.id', ProductDetailEdit::class)->name('editDetailProduct.index');

    // Create Generate Link
    Route::get('/generate/bisakita.co.id', GenerateIndex::class)->name('generate-index');
    Route::get('/generate/{id}/{name_product}/bisakita.co.id', GenerateLink::class)->name('generate-link');

    // Slug Landing Page Product1
    Route::get('/{id}/1/{slug}/kopi-bongkarr/bisakita.co.id', wthLvKopi::class)->name('detailsPost.index');
});
