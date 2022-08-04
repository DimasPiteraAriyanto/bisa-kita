<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        {{ __('Edit Product Details') }}
    </h2>
</x-slot>

<div class="max-w-6xl mx-auto">
    <div>
        <div class="card">
            <div class="card-body">
                <form wire:submit.prevent="updateProductDetails">
                    <div class="form-group">
                        {{-- <label>Produk</label>
                        @foreach($products as $product)
                        <div class="flex">
                               <label class="items-center py-2">
                               <input type="checkbox" value="{{ $product->id }}" wire:model="product_id"  class="w-6 h-6 text-green-500 form-checkbox">
                                    <span class="ml-3 text-sm">{{ $product->name_product }}</span>
                                </label>
                        </div>
                        @endforeach --}}
                        <label>TITLE</label>
                        <input type="text" wire:model="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan Title">
                        @error('title')
                            <span class="invalid-feedback">
                                    {{ $message }}
                             </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>KONTEN</label>
                        <div wire:ignore>
                            <textarea wire:model="content_1" id="content_1" class="form-control @error('content_1') is-invalid @enderror" rows="4" placeholder="Masukkan Konten"></textarea>
                        </div>
                       @error('content_1')
                            <span class="invalid-feedback">
                                    {{ $message }}
                             </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){

        $('#content_1').summernote({
            placeholder: 'Isi Konten 1',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onChange: function(contents, $editable) {
                    console.log('onChange:', contents, $editable);
                    @this.set('content_1', contents)
                }
            }
        });
  });
</script>
