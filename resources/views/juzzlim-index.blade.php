<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-[#ffbbbb]">

    {{-- /* Height Slider Banner */ --}}
    <div id="indicators-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg lg:h-[35rem] sm:h-64">
             <!-- Item 1 -->
            <div class="absolute inset-0 z-20 transition-all duration-700 ease-in-out transform translate-x-0 " data-carousel-item="active">
                <img src="{{ asset('/storage/juzzlim/Juzzlim 1.png') }}" class="absolute block w-full lg:h-[35rem] h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:h-64 sm:object-cover sm:object-center" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="absolute inset-0 z-10 transition-all duration-700 ease-in-out transform translate-x-full" data-carousel-item="">
                <img src="{{ asset('/storage/juzzlim/divider 1.png') }}" class="absolute block w-full lg:h-[35rem] h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:h-64 sm:object-cover sm:object-center" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="absolute inset-0 hidden transition-all duration-700 ease-in-out transform" data-carousel-item="">
                <img src="{{ asset('/storage/juzzlim/divider 2.png') }}" class="absolute block w-full lg:h-[35rem] h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:h-64 sm:object-cover sm:object-center" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 sm:w-36">
            <button type="button" class="w-24 h-4 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-green-500 dark:hover:bg-gray-800 sm:h-2" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-24 h-4 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-green-500 dark:hover:bg-gray-800 sm:h-2" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-24 h-4 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-green-500 dark:hover:bg-gray-800 sm:h-2" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
            {{-- <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70 group-focus:outline-none"> --}}
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            {{-- </span> --}}
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
            {{-- <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70 group-focus:outline-none"> --}}
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            {{-- </span> --}}
        </button>
    </div>

{{-- divider --}}
    <div class="sm:h-56 lg:h-56 mx-auto bg-[#ffbbbb]">
        <p class="grid pt-4 font-bold text-black text-md place-content-center">Juzzlim</p>
        <p class="grid px-5 py-5 pt-4 text-center text-black text-md place-content-center">MINUMAN KESEHATAN BERSERAT TINGGI DENGAN RASA STRAWBERRY</p>
        <div class="grid rounded-full place-content-center">
            <span class="bg-[#bb1211] w-40 h-10 grid place-content-center rounded-full">
                <p class="text-sm text-white">Saya Ingin Langsing</p>
            </span>
        </div>
        <p class="grid pt-4 text-black text-md place-content-center">Isi : 10 sachet </br> </p>
            <a href="https://cekbpom.pom.go.id//home/produk/nrss1ouvv1i4eo4vtkivvq8iks/all/row/10/page/1/order/4/DESC/search/2/bongkarr">
            <p class="grid text-xl text-black place-content-center">BPOM MD 867009139575
            </p>
            </a>
    </div>

    {{-- image sakit perut --}}
    <div class="bg-[#ffd7d7] grid place-content-center">
        <img src="{{ asset('/storage/juzzlim/Juzzlim 2.png') }}" class="sm:h-96 sm:w-96" alt="">
    </div>

    {{-- ciri usus kotor --}}
    <div class="bg-[#e93d3d] grid place-content-center">
        <div class=" sm:max-w-xl">
            <p class="grid pb-5 text-3xl text-white place-content-center">Ciri-ciri Usus Kotor</p>
            <p class="px-3 text-white">Usus merupakan bagian tubuh yang bertanggung jawab pada proses
                pencernaan dan penyerapan nutrisi makanan. Apabila usus tidak
                bekerja dengan baik, maka kemungkinan racun tidak dikeluarkan
                dari tubuh, melainkan diserap dan dialirkan ke seluruh tubuh melalui
                darah. Oleh sebab itu, menjaga kesehatan dan kebersihan usus
                merupakan hal yang penting.<br/><br/>
                JUZZLIM dengan kandungan berbagai bahan alami, tidak hanya
                membantu membersihkan usus yang kotor, tetapi juga berisfat anti
                radang dan kaya akan antioksidan.</p>
                <br>
            <ul class="pb-5 text-white list-disc px-7">Aturan Minum IUZZLIM
                <li>1 sachet sehari pada malam hari</li>
                <li>Tuang ke gelas berisi 150 ml air, aduk. Siap untuk diminum</li>
            </ul>
        </div>
    </div>

    {{-- divider komposisi --}}
    <div class="sm:h-20 lg:h-20 sm:py-4 lg:py-4 py-4 mx-auto bg-[#ffbbbb]">
        <div class="grid rounded-full place-content-center">
            <span class="bg-[#bb1211] w-40 h-10 grid place-content-center rounded-full">
                <p class="text-sm text-white">KOMPOSISI</p>
            </span>
        </div>
    </div>

    {{-- KOMPOSISI --}}
    <div class="bg-[#ffd7d7] flex justify-center">
        <div class="grid grid-cols-3 place-content-center">
            <div class="px-2 py-2 text-center">
                    <img src="{{ asset('/storage/juzzlim/Juzzlim 3.png') }}" class="w-40 h-40 px-2 py-2 lg:h-52 lg:w-52 sm:h-40 sm:w-40" alt="">
                    <p class="text-black">Strawberry Extract</p>
            </div>


            <div class="px-2 py-2 text-center">
                    <img src="{{ asset('/storage/juzzlim/Juzzlim 4.png') }}" class="w-40 h-40 px-2 py-2 lg:h-52 lg:w-52 sm:h-40 sm:w-40 " alt="">
                    <p class="text-black">Psyllum Husk</p>
            </div>


            <div class="px-2 py-2 text-center">
                    <img src="{{ asset('/storage/juzzlim/Juzzlim 5.png') }}" class="w-40 h-40 px-2 py-2 lg:h-52 lg:w-52 sm:h-40 sm:w-40 " alt="">
                    <p class="text-black">Inulin</p>
            </div>
        </div>
    </div>

    <div class="bg-[#ffd7d7] flex justify-center">
        <div class="grid grid-cols-3 place-content-center">
            <div class="px-2 py-2 text-center">
                    <img src="{{ asset('/storage/juzzlim/Juzzlim 6.png') }}" class="w-40 h-40 px-2 py-2 lg:h-52 lg:w-52 sm:h-40 sm:w-40" alt="">
                    <p class="text-black">Red beet</p>
            </div>


            <div class="px-2 py-2 text-center">
                    <img src="{{ asset('/storage/juzzlim/Juzzlim 7.png') }}" class="w-40 h-40 px-2 py-2 lg:h-52 lg:w-52 sm:h-40 sm:w-40 " alt="">
                    <p class="text-black">Ascorbid Acid (Vit C)</p>
            </div>


            <div class="px-2 py-2 text-center">
                    <img src="{{ asset('/storage/juzzlim/Juzzlim 8.png') }}" class="w-40 h-40 px-2 py-2 lg:h-52 lg:w-52 sm:h-40 sm:w-40 " alt="">
                    <p class="text-black">L-carnitine</p>
            </div>
        </div>
    </div>

    <div class="bg-[#ffd7d7] grid place-content-center">
        <div class="grid place-content-center">
            <div class="px-2 py-2 text-center">
                    <img src="{{ asset('/storage/juzzlim/Juzzlim 9.png') }}" class="w-40 h-40 px-2 py-2 lg:h-52 lg:w-52 sm:h-40 sm:w-40" alt="">
                    <p class="text-black">Red beet</p>
            </div>
        </div>
    </div>

        {{-- divider komposisi --}}
        <div class="sm:h-20 lg:h-20 sm:py-4 lg:py-4 py-4 mx-auto bg-[#ffbbbb]">
            <div class="grid rounded-full place-content-center">
                <span class="bg-[#bb1211] w-40 h-10 grid place-content-center rounded-full">
                    <p class="text-sm text-white">Harga</p>
                </span>
            </div>
        </div>

        <div class="flex justify-center bg-[#ffd7d7] py-11">
            <img src="{{ asset('/storage/juzzlim/Juzzlim 12.png') }}" class="relative rounded-xl img-fluid rounded-top" alt="">
            <img src="{{ asset('/storage/juzzlim/Juzzlim 10.png') }}" class="absolute pt-10 w-80 h-80 lg:w-[50rem] lg:h-[50rem]" alt="">
            <div class="absolute flex lg:text-3xl sm:text-xl text-black mt-96 sm:mt-96 lg:mt-[55rem]">
                <p class="px-2">Hanya</p>
                <p class="px-2 text-red-700"> Rp 350.000 </p>
                <p> / box (10 sachet)</p>
            </div>
        </div>

        {{-- image sakit perut --}}
    <div class="bg-[#ffd7d7] grid place-content-center">
        <div class="grid grid-cols-2">
            <div class="px-2 text-black lg:px-5 sm:px-5">
                <p class="font-bold lg:text-3xl sm:text-2xl sm:font-bold">Khasiat Dari Juzzlim</p>
                <ul class="px-4 py-5 list-disc lg:text-3xl lg:pl-14 sm:text-xl ">
                    <li>Melancarkan Buang Air Besar
                    <li>Membantu Menurunkan Berat Badan</li>
                    <li>Membantu Penyembuhan Ambeian</li>
                    <li>Buang Lemak Di Usus</li>
                    <li>Buang Racun Pada Ginjal dan Liver</li>
                </ul>
                <p class="py-5 text-red-700 lg:pl-5">
                    *)hasil bisa berbeda-beda untuk
                    setiap orang karena kondisi tubuh
                    yang berbeda-beda.
                </p>
            </div>
            <div class="grid place-content-center">
                <img src="{{ asset('/storage/juzzlim/Juzzlim 11.png') }}" class="sm:h-96 sm:w-96" alt="">
            </div>
        </div>
    </div>

    {{-- divider komposisi --}}
    <div class="sm:h-20 lg:h-20 sm:py-4 lg:py-4 py-4 mx-auto bg-[#ffbbbb]">
        <div class="grid rounded-full place-content-center">
            <span class="bg-[#bb1211] w-40 h-10 grid place-content-center rounded-full">
                <p class="text-sm text-white">Pesan Sekarang</p>
            </span>
        </div>
    </div>

    {{-- image sakit perut --}}
    <div class="bg-[#ffd7d7] grid place-content-center py-5">
        <div class="max-w-2xl px-5 mx-5 text-center text-black bg-white rounded-lg shadow-lg sm:px-5 py-11">
            <p>Cara Order Cepat Via WhatsApp</p>
            <ul class="px-5 py-5 list-decimal">
                <li>Sebutkan Nama Lengkap Anda</li>
                <li>Sebutkan Berapa Box Yang Dipesan</li>
                <li>Sebutkan Alamat Lengkap Pengiriman</li>
            </ul>

            <div class="flex justify-center py-4">
                <span class="bg-[#1eb751] w-56 h-10 flex justify-center rounded-full pt-2">
                    <div class="pr-2">
                        <svg
                        class="w-6 h-6 text-white fill-current"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512">
                        <path
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"
                        ></path>
                        </svg>
                    </div>
                    <p class="text-sm text-white">Order Sekarang di WA</p>
                </span>
            </div>

            <p>Setelah itu kami akan membalas pesan and untuk proses selanjutnya
                dan paket akan segera kami kirimkan dengan rapi dan polos untuk
                menjaga privasi anda.</p>
        </div>
    </div>


    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>
</html>
