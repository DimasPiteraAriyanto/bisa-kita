
<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        {{ __('Generate Link') }}
    </h2>
</x-slot>

<div>
    <div class="max-w-6xl px-5 py-5 mx-auto mt-5 rounded-lg bg-slate-50">
        <form wire:submit.prevent='store'>
            <div class="relative z-0 w-full py-5 mb-6 group">
                <div class="flex">
                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-200 dark:text-gray-400 dark:border-gray-600">
                  https://
                </span>
                  <input wire:model.lazy="domain" class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <!-- <label for="domain" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Domain</label>
                    @error('domain') <span class="error">{{ $message }}</span> @enderror              -->
                    {{-- <input type="hidden" wire:model.defer='id_product' value="{{ $idProducts->id }}"> --}}
                </div>
              </div>
            <div class="relative z-0 w-full mb-6 group">
                <input wire:model.lazy="name" type="name" name="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="grid xl:grid-cols-2 xl:gap-6">
            <div class="relative z-0 w-full mb-6 group">
                  <input wire:model.lazy="whatsapp" type="text" name="whatsapp" id="whatsapp" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                  <label for="whatsapp" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Whatsapp</label>
                  @error('whatsapp') <span class="error">{{ $message }}</span> @enderror
            </div>
              <div class="relative z-0 w-full mb-6 group">
                  <input wire:model.lazy="memberId" type="text" name="memberId" id="memberId" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                  <label for="memberId" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Member ID</label>
                  @error('memberId') <span class="error">{{ $message }}</span> @enderror
              </div>
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

            @if ($newImage)

            Photo Preview:

            <img src="{{ $newImage->temporaryUrl() }}">

            @endif

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload Foto</label>
            <input wire:model="newImage" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"></div>
            @error('newImage') <span class="error">{{ $message }}</span> @enderror
            <button type="submit" class="btn btn-primary">SIMPAN</button>
          </form>
    </div>
</div>
