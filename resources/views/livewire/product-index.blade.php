<x-slot name="header">
    <x-jet-nav-link href="{{ route('product.master') }}" :active="request()->routeIs('product.master')">
        {{ __('Product') }}
    </x-jet-nav-link>
</x-slot>

<div class="max-w-6xl mx-auto">
    <div class="grid justify-center max-w-6xl grid-cols-3 grid-rows-3 gap-4 px-5 py-5 mx-auto">
        @foreach ($products as $product)
        {{-- @if ($product->id <= 3) --}}
        <div data-theme="cupcake" class="mx-5 shadow-xl card w-90 bg-base-100">
            <figure class="px-10 pt-10">
              <img src="{{ asset ('/storage/'.$product->image_product)}}" alt="Shoes" class="rounded-xl" />
            </figure>
            <div class="items-center text-center card-body">
                <h2 class="justify-center card-title">{{ $product->name_product }}</h2>
                <p>{{ $product->deskripsi_product }}</p>
              <div class="justify-center card-actions">
                {{-- <x-jet-nav-link class="text-white btn btn-primary" href="{{ route('detailProducts.index' , $product->name_product) }}" :active="request()->routeIs('detailProducts.index', $product->name_product)">
                    {{ __('Create') }}
                </x-jet-nav-link> --}}
                <x-jet-nav-link class="text-white btn btn-secondary" href="{{ route('editDetailProduct.index' , [$product->name_product, $product->id]) }}" :active="request()->routeIs('editDetailProduct.index', [$product->name_product, $product->id])">
                    {{ __('Custom 1 Section') }}
                </x-jet-nav-link>

              </div>
            </div>
          </div>
        {{-- @endif --}}
        @endforeach
    </div>
</div>
