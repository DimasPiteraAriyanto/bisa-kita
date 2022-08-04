<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        {{ __('Product Master') }}
    </h2>
</x-slot>

<div class="max-w-6xl mx-auto">
    <div class="flex justify-end mt-5 p-2-m-2">
        <x-jet-button wire:click="showProductModal">Create</x-jet-button>
    </div>

    <div class="p-2 m-2">
        <table class="w-full bg-white shadow-lg">
            <thead>
                <tr>
                  <th class="px-8 py-4 text-left bg-blue-100 border">No</th>
                  <th class="px-8 py-4 text-left bg-blue-100 border">Nama Product</th>
                  <th class="px-8 py-4 text-left bg-blue-100 border">Deskripsi</th>
                  <th class="px-8 py-4 text-left bg-blue-100 border">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                <td class="px-8 py-4 border">{{ $product->id }}</td>
                <td class="px-8 py-4 border">{{ $product->name_product }}</td>
                <td class="px-8 py-4 border">{{ $product->deskripsi_product }}</td>
                <td class="px-8 py-4 border">
                    <div class="flex space-x-2">
                        <x-jet-button wire:click="showEditPost({{ $product->id }})">Edit</x-jet-button>
                        <x-jet-button class="bg-red-400" wire:click="deleteProducts({{ $product->id }})">Delete</x-jet-button>
                </td>
                    </div>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>

    <x-jet-dialog-modal wire:model="showingProductModal">
        {{-- show slot title --}}
            <x-slot name="title">
                @if ($isEditModal)
                Update
                @else
                Create
                @endif
            </x-slot>
            <x-slot name="content">
                <form>
                    <div class="relative z-0 w-full mb-6 group">
                        <input wire:model.lazy="name_product" type="name_product" name="name_product" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                        <label for="name_product" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                        @error('name_product') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input wire:model.lazy="deskripsi_product" type="deskripsi_product" name="deskripsi_product" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                        <label for="deskripsi_product" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Deskripsi</label>
                        @error('deskripsi_product') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input wire:model.lazy="slugProduct" type="slugProduct" name="slugProduct" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="contoh-product" required="">
                        <label for="slugProduct" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Slug</label>
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">tidak boleh ada spasi, spasi digantikan -</div>
                        @error('slugProduct') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    {{-- <div class="grid xl:grid-cols-2 xl:gap-6">
                      <div class="relative z-0 w-full mb-6 group">
                          <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                          <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890)</label>
                      </div>
                      <div class="relative z-0 w-full mb-6 group">
                          <input type="text" name="floating_company" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                          <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Company (Ex. Google)</label>
                      </div>
                    </div> --}}
                        {{-- @if ($oldImage)

                        Old Preview:

                        <img src="{{ Storage::url($oldImage) }}">

                        @endif --}}

                        @if ($newImageProduct)

                            Photo Preview:

                            <img src="{{ $newImageProduct->temporaryUrl() }}">

                        @endif

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload Foto Product</label>
                    <input wire:model="newImageProduct" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">500x500</div>
                    @error('newImageProduct') <span class="error">{{ $message }}</span> @enderror
                  </form>

            </x-slot>
            <x-slot name="footer">
                @if ($isEditModal)
                <x-jet-button wire:click="updatePost">Update</x-jet-button>
                @else
                <x-jet-button wire:click="storeProductMaster">Simpan</x-jet-button>
                @endif
            </x-slot>
        </x-jet-dialog-modal>
</div>
