<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="container-fluid mx-auto">
    <div class="bg-[#F6AB02]">
        <div class="grid grid-cols-2 gap-4 pb-8">
            <div class="pl-4">
                <img src="{{ asset('/storage/fitropolis/1.png') }}" alt="">
            </div>
            <div class="text-[48px] font-bold text-center pr-4 py-4">
                <p class="text-[32px] sm:text-[48px] text-black">Jangan Biarkan</p>
                <p class="text-red-700 sm:text-[64px]">Luka Kecil</p>
                <p class="text-[32px] text-black">Menjadi</p>
                <p class="text-red-700">Infeksi</p>
                <img class="pt-4" src="{{ asset('/storage/fitropolis/3.png') }}" alt="">
            </div>
        </div>
        <div>
            <img src=" {{ asset('/storage/fitropolis/2.png')}}" alt="">
            <div class="mt-[-6.5rem] text-center text-2xl font-semibold text-black">
                <p>Apakah ini</p>
                <p>yang Anda rasakan?</p>
            </div>
        </div>
        <div class="rounded-t-full bg-[#c82424] h-[50px] mt-[-1.5rem]"></div>
    </div>
    <div class="bg-[#c82424] pt-8">
        <div class="grid gap-x-4 gap-y-8 grid-cols-2 grid-rows-2 pb-20 text-lg text-white">
            <div class="flex items-center justify-center mx-3">
                <div>
                    <img class="h-1/2 w-1/2 mx-auto" src="{{ asset('/storage/fitropolis/4.png') }}" alt="">
                    <p class="text-center">Demam</p>
                </div>
            </div>
            <div class="flex items-center justify-center mx-3">
                <div>
                    <img class="h-1/2 w-1/2 mx-auto" src="{{ asset('/storage/fitropolis/5.png') }}" alt="">
                    <p class="text-center">Nyeri Bertambah</p>
                </div>
            </div>
            <div class="flex items-center justify-center mx-3">
                <div>
                    <img class="h-1/2 w-1/2 mx-auto" src="{{ asset('/storage/fitropolis/6.png') }}" alt="">
                    <p class="text-center">Pelebaran Ukuran Luka</p>
                </div>
            </div>
            <div class="flex items-center justify-center mx-3">
                <div>
                    <img class="h-1/2 w-1/2 mx-auto" src="{{ asset('/storage/fitropolis/7.png') }}" alt="">
                    <p class="text-center">Terdapat Cairan Kuning</p>
                </div>
            </div>
        </div>
        <img class="h-4/6 w-4/6 mx-auto" src="{{ asset('/storage/fitropolis/8.png') }}" alt="">
        <div class="mt-[-5rem]">
            <img src=" {{ asset('/storage/fitropolis/2.png')}}" alt="">
            <div class="mt-[-6.5rem] text-center text-3xl font-semibold text-amber-700">
                <p>Hati-Hati</p>
                <p>Anda Terkena Infeksi</p>
            </div>
        </div>
        <div class="rounded-t-full bg-[#F6AB02] h-[50px] mt-[-20px]"></div>
    </div>
    <div class="bg-[#F6AB02]">
        <div
            class="px-8 sm:px-10 md:px-16 lg:px-32 xl:px-44 py-4 text-center font-semibold text-black text-xl lg:text-2xl">
            <p>Infeksi pada luka bisa menjadi alasan kenapa luka Anda lama sembuh. Saat luka terkontaminasi atau menjadi
                infeksi, sistem kekebalan tubuh akan secara otomatis menggunakan energi untuk melawan kuman. Alhasil,
                energi
                yang dibutuhkan untuk penyembuhan berkurang.</p>
        </div>
        <div class="pt-4 pb-[7rem] sm:pb-40 md:pb-[8rem]">
            <img class="relative z-0 w-4/5 sm:w-4/6 md:w-4/6 lg:w-1/2 xl:w-2/6 h-4/5 mx-auto"
                src="{{ asset('/storage/fitropolis/9.png') }}" alt="">
            <div
                class="relative max-w-full sm:max-w-lg md:max-w-zl sm:h-[130px] md:h-[150px] h-[120px] bg-[#ecf0dc] rounded-2xl mx-10 sm:mx-auto m-[-8rem] sm:m-[-12rem] z-[10] flex items-center justify-center">
                <div class="text-center text-xl sm:text-2xl md:text-3xl font-semibold text-black">
                    <p>TENAANGGG.....!!!</p>
                    <p>Kami Punya Solusinya</p>
                </div>
            </div>
        </div>
        <div class="rounded-t-full bg-[#c82424] h-[50px] relative">
        </div>
    </div>
    <div class="bg-[#c82424] relative">
        <div class="px-8 sm:px-10 md:px-16 lg:px-32 xl:px-44 py-4 text-center text-black text-xl">
            <img class="relative z-0 w-4/5 sm:w-4/6 md:w-4/6 lg:w-1/2 xl:w-2/6 h-4/5 mx-auto"
                src="{{ asset('/storage/fitropolis/10.png') }}" alt="">
            <div class="text-center pt-8">
                <p class="text-4xl font-bold italic my-1 text-[#fbba5b]">FIT Propolis</p>
                <p class="text-xl text-white">Manfaat untuk mengobati luka datang dari senyawa khusus yang disebut
                    pinocembrin.
                    Sebuah kandungan
                    yang
                    berfungsi sebagai anti radang dan antimikroba. Zat ini berperan penting dalam mempercepat
                    penyemnbuhan
                    luka sebelum infeksi.</p>
                <p class="text-xl text-[#fbba5b]">FIT Propolis diekstak dengan Nano Teknology terbaik, dengan ukuran
                    partikel yang sangat kecil
                    sehingga
                    mudah diserap tubuh serta cepat bereaksi.</p>
            </div>
        </div>
        <div class="pt-4 pb-[7rem] sm:pb-40 md:pb-[8rem]">
            <img class="relative z-0 w-4/5 sm:w-4/6 md:w-4/6 lg:w-1/2 xl:w-2/6 h-4/5 mx-auto"
                src="{{ asset('/storage/fitropolis/11.png') }}" alt="">
            <div
                class="relative max-w-full sm:max-w-lg md:max-w-zl sm:h-[130px] md:h-[150px] h-[120px] bg-[#ecf0dc] rounded-2xl mx-10 sm:mx-auto m-[-8rem] sm:m-[-12rem] z-[10] flex items-center justify-center">
                <div class="text-center text-xl sm:text-2xl md:text-3xl font-semibold text-black">
                    <p>Manfaat Utama</p>
                    <p>FIT Propolis</p>
                </div>
            </div>
        </div>
        <div class="rounded-t-full bg-[#F6AB02] h-[50px] relative"></div>
    </div>
    <div class="bg-[#F6AB02] relative pt-8">
        <div class="px-8 py-4 text-center">
            <div class="p-3">
                <img class="h-1/3 w-1/3 mx-auto" src="{{ asset('/storage/fitropolis/12.png') }}" alt="">
                <p class="text-xl font-bold text-[#c82424]">Mengobati Luka</p>
                <p class="text-lg font-semibold text-black">Mengobati luka datang dari senyawa khusus yang disebut
                    pinocembrin, sebuah
                    kandungan
                    yang berfungsi
                    sebagai anti radang dan antimikroba. Zat ini berperan penting dalam mempercepat penyembuhan luka.
                </p>
            </div>
            <div class="p-3">
                <img class="h-1/3 w-1/3 mx-auto" src="{{ asset('/storage/fitropolis/13.png') }}" alt="">
                <p class="text-xl font-bold text-[#c82424]">Meredakan Gejalan Herpes</p>
                <p class="text-lg font-semibold text-black">Mengoleskan Propolis ini sebanyak tiga kali dalam sehari
                    dapat meredakan
                    nyeri lenting. "Tak hanya
                    itu, Propolis juga efektif untuk melawan virus dalam tubuh dan mencegah kekambuhan" gejala.

                </p>
            </div>
            <div class="p-3">
                <img class="h-1/3 w-1/3 mx-auto" src="{{ asset('/storage/fitropolis/14.png') }}" alt="">
                <p class="text-xl font-bold text-[#c82424]">Memiliki Efek anti Kanker</p>
                <p class="text-lg font-semibold text-black">Menurut salah satu studi yang dipublikasikan dalam "Jurnal
                    Clinical Review
                    in Allergy dan Immunity,
                    herbal ini ternyata memiliki efek kanker yang dapat mencegah dan menghambat pertumbuhan sel" kanker
                    di dalam tubuh.
                </p>
            </div>

        </div>
        <div class="pt-4 pb-[3rem] sm:pb-40 md:pb-[8rem]">
            <img class="relative z-0 w-4/5 sm:w-4/6 md:w-4/6 lg:w-1/2 xl:w-2/6 h-4/5 mx-auto"
                src="{{ asset('/storage/fitropolis/15.png') }}" alt="">
            <div
                class="relative max-w-full sm:max-w-lg md:max-w-zl sm:h-[130px] md:h-[150px] h-[100px] bg-[#ecf0dc] rounded-2xl mx-10 sm:mx-auto m-[-6rem] sm:m-[-12rem] z-[10] flex items-center justify-center">
                <div class="text-center text-xl sm:text-2xl md:text-3xl font-semibold text-black">
                    <p>Manfaat Lain</p>
                    <p>Dari FIT Propolis</p>
                </div>
            </div>
        </div>
        <div class="rounded-t-full bg-[#c82424] h-[50px] relative">
        </div>
    </div>
    <div class="bg-[#c82424] relative pt-8">
        <div class="px-8 py-4 text-center text-white">
            <p class="text-xl font-semibold">Menurut majalah TRUBUS, Propolis terbukti secara ilmiah dapat menyembuhkan
                lebih dari 30
                macam penyakit
                diantaranya:</p>
            <div class="grid grid-cols-2 gap-y-4 gap-x-8 pt-4">
                <div class="text-md text-left mx-4">
                    <ul class="list-disc">
                        <li>Stroke</li>
                        <li>Penyakti Jantung</li>
                        <li>Leukimia</li>
                        <li>Kista/Mium</li>
                        <li>Diabetes</li>
                        <li>Gagal Ginjal</li>
                        <li>Kanker</li>
                        <li>Hepatitis</li>
                        <li>Asam Urat</li>
                        <li>Rematik</li>
                        <li>Hipertensi</li>
                        <li>Kolesterol</li>
                        <li>Demam Berdarah</li>
                        <li>Tipus</li>
                    </ul>
                </div>
                <div class="text-md text-left mx-4">
                    <ul class="list-disc">
                        <li>Herpes</li>
                        <li>Sinusitis</li>
                        <li>Hipertiroid</li>
                        <li>TBC</li>
                        <li>Ambeien</li>
                        <li>Batu Ginjal</li>
                        <li>Asma</li>
                        <li>Migrain</li>
                        <li>Prostat</li>
                        <li>Maag Akut</li>
                        <li>Infertilitas</li>
                        <li>Osteoporosis</li>
                        <li>Usus Buntu</li>
                        <li>Osteo Artritis</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pt-4">
            <img class="relative z-0 w-4/5 sm:w-4/6 md:w-4/6 lg:w-1/2 xl:w-2/6 h-4/5 mx-auto"
                src="{{ asset('/storage/fitropolis/16.png') }}" alt="">
        </div>
        <div class="rounded-t-full bg-[#F6AB02] h-[50px] mt-[-50px]"></div>
    </div>
    <div class="bg-[#F6AB02] relative pt-8">
        <div class="grid grid-cols-2 gap-4">
            <div class="text-center text-black">
                <img class="w-1/2 h-auto mx-auto" src="{{ asset('/storage/fitropolis/17.png') }}" alt="">
                <p class="pt-2">Nomor Registrasi:</p>
                <p>________________</p>
            </div>
            <div class="text-center text-black">
                <img class="w-1/2 h-auto mx-auto" src="{{ asset('/storage/fitropolis/18.png') }}" alt="">
                <p class="pt-2">Nomor Registrasi:</p>
                <p>________________</p>
            </div>
        </div>
        <div class="pt-4 pb-[7rem] sm:pb-40 md:pb-[8rem]">
            <img class="relative z-0 w-4/5 sm:w-4/6 md:w-4/6 lg:w-1/2 xl:w-2/6 h-4/5 mx-auto"
                src="{{ asset('/storage/fitropolis/19.png') }}" alt="">
            <div
                class="relative max-w-full sm:max-w-lg md:max-w-zl sm:h-[130px] md:h-[150px] h-[120px] bg-[#ecf0dc] rounded-2xl mx-10 sm:mx-auto m-[-8rem] sm:m-[-12rem] z-[10] flex items-center justify-center">
                <div class="text-center text-xl sm:text-2xl md:text-3xl font-semibold text-black">
                    <p>Harga</p>
                    <p>FIT Propolis</p>
                </div>
            </div>
        </div>
        <div class="rounded-t-full bg-[#c82424] h-[50px] relative">
        </div>
    </div>
    <div class="bg-[#c82424] relative py-5">
        <div class="px-8 py-4 text-center font-semibold text-black text-xl">
            <img class="relative z-0 w-4/5 sm:w-4/6 md:w-4/6 lg:w-1/2 xl:w-2/6 h-4/5 mx-auto"
                src="{{ asset('/storage/fitropolis/10.png') }}" alt="">
            <p class="text-[#F6AB02]"><span class="text-3xl text-white">Rp 350.000</span> / Kotak</p>
            <p class="text-[#F6AB02]">(isi 3 botol, 1 botol isi 10 ml)</p>
        </div>
        <div class="flex justify-center mt-3 mb-8">
            <button class="text-white p-2 mx-auto rounded-full bg-[#57ce62]">Order via whatsapp</button>
        </div>
        <div class=" w-[325px] h-full my-5 bg-[#ecf0dc] rounded-2xl mx-auto z-[10] flex items-center justify-center text-black"">
            <div class=" text-center p-3">
            <h3 class="text-2xl pb-3 font-bold text-[#c82424]">Perhatian</h3>
            <p class="text-xl font-semibold">Pastikan Anda catat contact info ini sebelum bertransaksi, sebab ini adalah
                toko online replika yang bisa
                berbeda-beda data mitranya.</p>
        </div>
    </div>
    <div class=" w-[325px] h-full my-5 bg-[#ecf0dc] rounded-2xl mx-auto z-[10] flex items-center justify-center text-black"">
        <div class=" text-center p-3">
        <h3 class="text-2xl pb-3 font-bold text-[#c82424]">Info & Kontak</h3>
        <p class="text-xl font-semibold text-left">+6281 937 174 316</p>
        <p class="text-xl font-semibold text-left">agungkirana68@gmail.com</p>
        <p class="text-xl font-semibold text-left">bisakita.co.id</p>
    </div>
    </div>
    <div class=" w-[325px] h-full my-5 bg-[#ecf0dc] rounded-2xl mx-auto z-[10] flex items-center justify-center text-black"">
        <div class=" text-center pt-3 pb-5">
        <h3 class="text-2xl pb-3 font-bold text-[#c82424]">Peluang Bisnis</h3>
        <p class="text-xl font-semibold">Anda bisa menjadi mitra bisnis kami & menghasilkan income dari rumah saja.
            Hubungi saya > klik tombol WA ini:</p>
    </div>
    </div>
    <div class="flex justify-center mt-[-2.3rem] mb-8">
        <button class="text-white p-2 mx-auto rounded-full bg-[#57ce62]">Chat via whatsapp</button>
    </div>
    </div>
    </div>

</body>

</html>