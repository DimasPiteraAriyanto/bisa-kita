<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::insert([
        [
            'name_product' => 'KOPI BONGKARR',
            'deskripsi_product' => 'BPOM MD 867009207575',
            'slugProduct' => 'kopi-bongkarr',
        ],
        [
            'name_product' => 'X-MEN',
            'deskripsi_product' => 'BPOM MD 867031426523',
            'slugProduct' => 'x-men',
        ],
        [
            'name_product' => 'JUZZLIM',
            'deskripsi_product' => 'BPOM MD 867009139575',
            'slugProduct' => 'juzzlim',
        ],
        [
            'name_product' => 'FIT PROPOLIS',
            'deskripsi_product' => 'BPOM MD 213469531',
            'slugProduct' => 'fit-propolis',
        ],
        [
            'name_product' => 'GAMAT KUNYIT',
            'deskripsi_product' => 'BPOM MD 193330511',
            'slugProduct' => 'gamat-kunyit',
        ],
        [
            'name_product' => 'ICHIBANG FEMININE HYGIENE',
            'deskripsi_product' => 'BPOM MD 18211600073',
            'slugProduct' => 'ichibang-feminine-hygiene',
        ],
        [
            'name_product' => 'ICHIBANG BLUECUT',
            'deskripsi_product' => 'BLUECUT GLASSES',
            'slugProduct' => 'ichibang-bluecut',
        ],
        [
            'name_product' => 'ICHIBANG BLUECROMIC',
            'deskripsi_product' => 'BLUECUT GLASSES',
            'slugProduct' => 'ichibang-bluecromic',
        ],
        [
            'name_product' => 'ICHIBANG INSOLE',
            'deskripsi_product' => 'FOOT SUPPORT',
            'slugProduct' => 'ichibang-insole',
        ],
    ]);

    }
}
