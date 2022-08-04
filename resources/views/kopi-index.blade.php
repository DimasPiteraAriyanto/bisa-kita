<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>


    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-yellow-50">

    {{-- /* Height Slider Banner */ --}}
    <div id="indicators-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg sm:h-64">
             <!-- Item 1 -->
            <div class="absolute inset-0 z-20 transition-all duration-700 ease-in-out transform translate-x-0" data-carousel-item="active">
                <img src="{{ asset('/storage/bongkar/LP BONGKARR banner 1.png') }}" class="absolute block w-full h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:h-64 sm:object-cover sm:object-center" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="absolute inset-0 z-10 transition-all duration-700 ease-in-out transform translate-x-full" data-carousel-item="">
                <img src="{{ asset('/storage/bongkar/LP BONGKARR banner 2.png') }}" class="absolute block w-full h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:h-64 sm:object-cover sm:object-center" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="absolute inset-0 hidden transition-all duration-700 ease-in-out transform" data-carousel-item="">
                <img src="{{ asset('/storage/bongkar/LP BONGKARR banner 3.png') }}" class="absolute block w-full h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:h-64 sm:object-cover sm:object-center" alt="...">
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

    <div class="h-24 mx-auto bg-[#f6ab02]">
        <p class="grid pt-4 text-white text-md place-content-center">
            Isi : 10 sachet @25g </br> </p>
            <a href="https://cekbpom.pom.go.id//home/produk/nrss1ouvv1i4eo4vtkivvq8iks/all/row/10/page/1/order/4/DESC/search/2/bongkarr">
            <p class="grid text-xl text-white place-content-center">BPOM MD 867009207575
            </p>
            </a>
    </div>

        <img class="w-full h-[40rem] sm:h-[60rem] lg:object-fill lg:h-[125rem]" src="{{ asset('/storage/bongkar/LP BONGKARR 001.png') }}" alt="logo" srcset="">
        <div class="text-center -mt-[28rem] sm:-mt-[40rem] sm:max-w-lg sm:mx-auto lg:max-w-5xl lg:-mt-[80rem] lg:mb-[40rem]">
            <h1 class="text-sm font-bold text-white sm:text-3xl lg:text-5xl">MASALAH INIKAH</h1>
            <h1 class="text-sm font-bold text-white sm:text-3xl lg:text-5xl">YANG ANDA ALAMI ?</h1>
            <div class="lg:py-10">
                <ul class="py-2 pl-4 list-disc text-start">
                    <li class="text-sm text-white sm:text-xl lg:text-5xl">DISFUNGSI EREKSI ?</li>
                    <li class="text-sm text-white sm:text-xl lg:text-5xl">DINI ?</li>
                    <li class="text-sm text-white sm:text-xl lg:text-5xl">SULIT ORGASME ?</li>
                    <li class="text-sm text-white sm:text-xl lg:text-5xl">IMPOTENSI ?</li>
                    <li class="text-sm text-white sm:text-xl lg:text-5xl">LEMAH SYAHWAT ?</li>
                    <li class="text-sm text-white sm:text-xl lg:text-5xl">KURANG BERGAIRAH?</li>
                </ul>
            </div>

            <div class="pt-4 text-start">
                <p class="text-sm font-normal tracking-wide text-white sm:text-xl lg:text-5xl">
                    Jangan mudah percaya iklan pembesar, obat kuat dan lain sebagainya! Produk-produk tersebut belum teruji klinis dan justru berisiko menyebabkan infeksi atau memperparah kondisi Anda.
                </p>
                <br/>
                <p class="text-sm font-normal tracking-wide text-white sm:text-xl lg:text-5xl">
                    Anda mungkin saja sedang gugup, stres, atau depresi. tenangkan diri dulu dan komunikasikan masalahnya dengan pasangan. Atau mungkin saja Anda mengalami gangguan hormon atau kondisi medis tertentu.
                </p>
            </div>
        </div>

        <div class="max-w-5xl px-4 py-10 mx-auto mt-24 ">
            <h1 class="grid font-bold text-black lg:text-3xl place-content-center">
                BONGKARR KEBIASAAN LAMA
            </h1>
            <h3 class="grid py-5 text-black place-content-center lg:text-2xl">
                Kopi Bonkarr hadir mengatasi permasalahan Anda
            </h3>
            <h3 class="grid font-bold text-black place-content-center lg:text-3xl">
                Kopi Bongkarr merupakan kopi kesehatan dengan manfaat sebagai berikut :
            </h3>

            <div>
                <ul class="py-5 list-disc">
                    <li class="text-black lg:text-2xl ">Meningkatkan stamina tubuh</li>

                    <li class="text-black lg:text-2xl ">Menjaga kondisi tubuh tetap fit</li>

                    <li class="text-black lg:text-2xl ">Mengurangi resiko gangguan prostat</li>

                    <li class="text-black lg:text-2xl ">Meningkatkan kemampuan konsentrasi dan daya ingat</li>

                    <li class="text-black lg:text-2xl ">Baik untuk yang mengalami gangguan mata, karena ada
                        kandungan lutein (vitamin caratonoid)</li>

                        <li class="text-black lg:text-2xl">Membantu meningkatkan vitalitas</li>
                    </ul>
            </div>
        </div>


        {{-- divider komposisi --}}
        <div class="flex justify-center h-10 item-center bg-[#f6ab02]">
            <div class="flex justify-center w-32 bg-[#009946] rounded-full item-center place-self-center">
                <p class="text-white">
                    Komposisi
                </p>
            </div>
        </div>

        {{-- bahan bahan kopi bongkar --}}
<div class="bg-[#5f3829]">
    <div class="flex justify-center">
        <img class="block w-32 h-32 my-3 sm:hidden" src="{{ asset('/storage/bongkar/LP BONGKARR 002.png') }}" alt="logo" srcset="">
    </div>
    <div class="flex ">
        <img class="hidden w-32 h-32 my-5 sm:block place-self-center" src="{{ asset('/storage/bongkar/LP BONGKARR 002.png') }}" alt="logo" srcset="">
        <span class="px-5 py-5">
            <h5 class="font-bold text-center text-yellow-300 sm:text-start lg:text-3xl">
                BIJI KOPI TERBAIK
            </h5>
            <p class="text-center text-white sm:text-start lg:text-2xl">
                Kopi memiliki manfaat dalam mengurangi resiko terkena berbagai penyakit berat seperti diabetes tipe 2, dan kanker, serta mengurangi risiko penyakit yang menyerang otak seperti Alzheimer yang dapat berujung pada penyakit demensia
            </p>
        </span>
    </div>

    <div class="flex justify-center">
        <img class="block w-32 h-32 my-3 sm:hidden" src="{{ asset('/storage/bongkar/LP BONGKARR 003.png') }}" alt="logo" srcset="">
    </div>
    <div class="flex">
        <img class="hidden w-32 h-32 my-5 sm:block place-self-center" src="{{ asset('/storage/bongkar/LP BONGKARR 003.png') }}" alt="logo" srcset="">
        <span class="px-5 py-5">
            <h5 class="font-bold text-center text-yellow-300 sm:text-start lg:text-3xl">
            EKSTRAK GINSENG
            </h5>
            <p class="text-center text-white sm:text-start lg:text-2xl">
                Membantu meningkatkan stamina dan kepuasan seksual, membantu mengobati impotensi, membantu meningkatkan kesuburan, serta membantu mengatasi ejakulasi dini
            </p>
        </span>
    </div>

    <div class="flex justify-center">
        <img class="block w-32 h-32 my-3 sm:hidden" src="{{ asset('/storage/bongkar/LP BONGKARR 004.png') }}" alt="logo" srcset="">
    </div>
    <div class="flex">
        <img class="hidden w-32 h-32 my-5 sm:block place-self-center"  src="{{ asset('/storage/bongkar/LP BONGKARR 004.png') }}" alt="logo" srcset="">
        <span class="px-5 py-5">
            <h5 class="font-bold text-center text-yellow-300 lg:text-3xl sm:text-start">
                CORDYCEPS
            </h5>
            <p class="text-center text-white lg:text-2xl sm:text-start">
                adalah sejenis jamur hanya yang tumbuh dan berkembang di Tibet China, Cordyceps mengandung zat aphrodisiac atau peningkatan libido bagi pria dan wanita
            </p>
        </span>
    </div>

    <div class="flex justify-center">
        <img class="block w-32 h-32 my-3 sm:hidden" src="{{ asset('/storage/bongkar/LP BONGKARR 005.png') }}" alt="logo" srcset="">
    </div>
    <div class="flex">
        <img class="hidden w-32 h-32 my-5 sm:block place-self-center"  src="{{ asset('/storage/bongkar/LP BONGKARR 005.png') }}" alt="logo" srcset="">
        <span class="px-5 py-5">
            <h5 class="font-bold text-center text-yellow-300 lg:text-3xl sm:text-start">
                EKSTRAK GUARANA
            </h5>
            <p class="text-white lg:text-2xl sm:text-start">
                Guarna Dipercaya dapat menjadi pemicu gariah seks pria. Herbal alami untuk meredakan dampak negative saat menstruasi
            </p>
        </span>
    </div>

    <div class="flex justify-center">
        <img class="block w-32 h-32 my-3 sm:hidden" src="{{ asset('/storage/bongkar/LP BONGKARR 006.png') }}" alt="logo" srcset="">
    </div>
    <div class="flex">
        <img class="hidden w-32 h-32 my-5 sm:block place-self-center"  src="{{ asset('/storage/bongkar/LP BONGKARR 006.png') }}" alt="logo" srcset="">
        <span class="px-5 py-5">
            <h5 class="font-bold text-center text-yellow-300 lg:text-3xl sm:text-start">
                LUTEIN
            </h5>
            <p class="text-center text-white lg:text-2xl sm:text-start">
                Adalah salah satu jenis vitamin karotenoid yang diyakini bermanfaat untuk menjaga kesehatan mata, dan mencegah terjadinya degenerasi makula atau katarak
            </p>
        </span>
    </div>
</div>

{{-- divider PESAN SEKARANG --}}
<div class="grid h-28 place-content-center bg-[#f6ab02]">
    <div class="grid border-8 border-[#009946] border-solid rounded-full place-content-center place-self-center bg-gradient-to-r from-[#009946] to-[#86cb3c] w-72 h-20">
        <p class="text-2xl font-bold text-white">
            PESAN SEKARANG
        </p>
    </div>
</div>

{{-- foto product --}}
<div class="grid text-center place-content-center">
    <img class="z-10 " src="{{ asset('/storage/bongkar/LP BONGKARR 007.png') }}" width="900" height="700" alt="logo" srcset="">
    {{-- harga --}}
    {{-- <div> --}}
        <p class="z-10 text-3xl font-bold text-white ">
            IDR 350.000
        </p>
    {{-- </div> --}}
</div>
<div>
    <img class="object-cover object-center -mt-[9rem] sm:-mt-[14rem] lg:-mt-[17rem]"  src="{{ asset('/storage/bongkar/LP BONGKARR 008.png') }}" alt="logo" srcset="">
</div>

{{-- youtube --}}
<div id="controls-carousel" class="relative py-10 text-center bg-slate-600" data-carousel="static">

    <H1 class="pb-5 font-bold text-white">APA KATA MEREKA</H1>

    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96 lg:h-[40rem] lg:grid lg:place-content-center">
         <!-- Item 1 -->
        <div class="absolute inset-0 z-10 transition-all duration-700 ease-in-out transform -translate-x-full" data-carousel-item="">
            <iframe class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 border-red-500 border-solid border-5 top-1/2 left-1/2" src="https://www.youtube.com/embed/e-qGMOpUkjs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
        </div>
        <!-- Item 2 -->
        <div class="absolute inset-0 z-10 transition-all duration-700 ease-in-out transform -translate-x-full" data-carousel-item="">
            <iframe class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" src="https://www.youtube.com/embed/ibFVUFmju9o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
        </div>
        <!-- Item 3 -->
        <div class="absolute inset-0 z-10 transition-all duration-700 ease-in-out transform -translate-x-full" data-carousel-item="">
            <iframe class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" src="https://www.youtube.com/embed/EMf86Jtq-gA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<div class="py-10">
    {{-- Testimoni 1 --}}
    <div class="flex justify-center sm:hidden">
        <img class="w-40 h-40" src="{{ asset('/storage/bongkar/LP BONGKARR 009.png') }}" alt="logo" srcset="">
    </div>
    <div class="flex justify-start">
         <img class="hidden w-40 h-40 p-3 sm:block" src="{{ asset('/storage/bongkar/LP BONGKARR 009.png') }}" alt="logo" srcset="">
         <div class="text-black ">
            <p class="py-3 font-bold text-center sm:text-start sm:px-5">M.KHIDIR</p>
            <p class="py-3 text-center sm:text-start sm:px-5">Guru Honorer</p>
            <p class="py-3 text-center sm:text-start sm:px-5">
                ” Awalnya, ketika ditawarkan kopi bongkar, saya tidak begitu yakin. Saya pikir ini sama saja dengan kebanyakan kopi. Tapi.... setelah saya minum 1 sachet, saya kaget dampaknya ke st-amuna dan terutama ke urusan “Semuangat” menakjubkan. PeDe saya meningkat “
             </p>
        </div>
    </div>

    {{-- Testimoni 2 --}}
    <div class="flex justify-center sm:hidden">
        <img class="w-40 h-40" src="{{ asset('/storage/bongkar/LP BONGKARR 010.png') }}" alt="logo" srcset="">
    </div>
    <div class="flex justify-start">
        <img class="hidden w-40 h-40 p-3 sm:block" src="{{ asset('/storage/bongkar/LP BONGKARR 010.png') }}" alt="logo" srcset="">
        <div class="text-black ">
           <p class="py-3 font-bold text-center sm:text-start sm:px-5">iBU LULUK ROHANA</p>
           <p class="py-3 text-center sm:text-start sm:px-5">Ibu Rumah Tangga</p>
           <p class="py-3 text-center sm:text-start sm:px-5">
            “Bulan muda kami terasa sangat berkesan dan tak mungkin terlupakan . Kopi bongkar membuat “Semuangat 45” yang berbeda dan energi jadi berlipat ganda. Bikin pengen “setiap hari deh... “Duh, jadi malu...”
            </p>
       </div>
   </div>
   {{-- Testimoni 3 --}}
   <div class="flex justify-center sm:hidden">
    <img class="w-40 h-40" src="{{ asset('/storage/bongkar/LP BONGKARR 011.png') }}" alt="logo" srcset="">
    </div>
   <div class="flex justify-start">
    <img class="hidden w-40 h-40 p-3 sm:block" src="{{ asset('/storage/bongkar/LP BONGKARR 011.png') }}" alt="logo" srcset="">
        <div class="text-black ">
       <p class="py-3 font-bold text-center sm:text-start sm:px-5">EDDIE SUROKO</p>
       <p class="py-3 text-center sm:text-start sm:px-5"> Pengusaha - Semarang</p>
       <p class="py-3 text-center sm:text-start sm:px-5">
        ” Kopi bongkar benar-benar dahsyat, setelah saya minum 3 shaset sehari rasanya ampun... badan saya jauh lebih Fit. Benar slogan nya ini bukan sembarang kopi “
        </p>
   </div>
</div>
</div>

{{-- divider PESAN SEKARANG --}}
<div class="grid h-28 place-content-center bg-[#f6ab02]">
    <div class="grid border-8 border-[#009946] border-solid rounded-full place-content-center place-self-center bg-gradient-to-r from-[#009946] to-[#86cb3c] w-72 h-20">
        <p class="text-2xl font-bold text-white">
            PESAN SEKARANG
        </p>
    </div>
</div>

<div class="bg-[#5f3829]">
    {{-- store --}}
    <div class="sm:hidden">
        <div class="flex justify-center py-5">
            <svg class="w-40 h-40 text-[#5f3829] px-3 bg-white border-8 border-white border-solid rounded-full"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z"/>
                <line x1="3" y1="21" x2="21" y2="21" />
                <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
                <path d="M5 21v-10.15" />
                <path d="M19 21v-10.15" />
                <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
            </svg>
        </div>
    </div>

    <div>
        <div class="flex justify-center ">
            <div class="px-5 py-5">
                <svg class="hidden sm:block w-40 h-40 text-[#5f3829] bg-white rounded-full border-white border-solid border-8 px-3"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z"/>
                    <line x1="3" y1="21" x2="21" y2="21" />
                    <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
                    <path d="M5 21v-10.15" />
                    <path d="M19 21v-10.15" />
                    <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                </svg>
            </div>
            <div class="max-w-sm max-auto">
                <p class="py-3 font-bold text-white">Harga Resmi kopi bongkar seluruh Indonesia adalah sama</p>
                <p class="py-3 text-white">kalau anda menemukan ada yang menjual lebih murah, segala resiko dan dampak merupakan tanggung jawab personal. Belilah kopi bongkarr di agen resmi</p>
            </div>
        </div>
    </div>

    {{-- coffe --}}
    <div class="sm:hidden">
        <div class="flex justify-center py-5">
            <svg class="sm:hidden w-40 h-40 text-[#5f3829] px-3 bg-white border-8 border-white border-solid rounded-full" <svg  viewBox="0 0 24 24"  width="24"  height="24"  xmlns="http://www.w3.org/2000/svg"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">
                <path d="M18 8h1a4 4 0 0 1 0 8h-1" />
                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z" />
                <line x1="6" y1="1" x2="6" y2="4" />
                <line x1="10" y1="1" x2="10" y2="4" />
                <line x1="14" y1="1" x2="14" y2="4" />
            </svg>
        </div>
    </div>
    <div>
        <div class="flex justify-center ">
            <div class="px-5 py-5">
                <svg class="sm:block hidden w-40 h-40 text-[#5f3829] px-3 bg-white border-8 border-white border-solid rounded-full" <svg  viewBox="0 0 24 24"  width="24"  height="24"  xmlns="http://www.w3.org/2000/svg"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">
                    <path d="M18 8h1a4 4 0 0 1 0 8h-1" />
                    <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z" />
                    <line x1="6" y1="1" x2="6" y2="4" />
                    <line x1="10" y1="1" x2="10" y2="4" />
                    <line x1="14" y1="1" x2="14" y2="4" />
                </svg>
            </div>
            <div class="max-w-sm max-auto">
                <p class="py-3 font-bold text-white">Hasil berbeda disetiap orang</p>
                <p class="py-3 text-white">Hasil yang dirasakan setiap orang bisa saja berbeda / belum tetntu sama, karena kondisi dan metabolisme tubuh orang pada saat itu</p>
            </div>
        </div>
    </div>
</div>


    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>
</html>
