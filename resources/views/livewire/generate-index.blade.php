<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        {{ __('List Product Generate') }}
    </h2>
</x-slot>

<div class="grid justify-center max-w-6xl grid-cols-3 grid-rows-3 gap-4 px-5 py-5 mx-auto">
    @forelse ($products as $product)
    {{-- @if ($product->id <= 3) --}}
    <div data-theme="forest" class="mx-5 my-5 shadow-xl card w-90 bg-base-100">
        <figure><img src="{{ asset ('/storage/'.$product->image_product)}}" alt="Product" /></figure>
        <div class="justify-center border-t-4 rounded-lg border-t-amber-400">
            <h2 class="justify-center rounded-lg card-title">{{ $product->name_product}}</h2>
        </div>
        <div class="justify-center text-white card-body">
            <p class="justify-center card-title">{{ $product->deskripsi_product}}</p>
            <div class="justify-center card-actions">
                <button class="btn btn-accent">
                    <x-jet-nav-link class="text-white hover:text-red-300" href="{{ route('generate-link', [$product->id, $product->name_product]) }}" :active="request()->routeIs('generate-link')">
                        {{ __('Selengkapnya') }}
                    </x-jet-nav-link>
                </button>
                <button class="btn btn-secondary">
                    <x-jet-nav-link class="text-white hover:text-red-300" href="{{ route('generate-link', [$product->id, $product->name_product]) }}" :active="request()->routeIs('generate-link')">
                        {{ __('Generate Link') }}
                    </x-jet-nav-link>
                </button>
            </div>
        </div>
    </div>
    {{-- @endif --}}
    @empty
    @endforelse
</div>




