<?php

namespace Database\Seeders;

use App\Models\Product_details;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product_details::insert([
            [
                'title' => 'KOPI BONGKARR',
                'product_id' => '1',
                'content_1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.',
            ],
            [
                'title' => 'X-MEN',
                'product_id' => '2',
                'content_1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.',
            ],
            [
                'title' => 'JUZZLIM',
                'product_id' => '3',
                'content_1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.',
            ],
            [
                'title' => 'FIT PROPOLIS',
                'product_id' => '4',
                'content_1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.',
            ],
            [
                'title' => 'GAMAT KUNYIT',
                'product_id' => '5',
                'content_1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.',
            ],
            [
                'title' => 'ICHIBANG FEMININE HYGIENE',
                'product_id' => '6',
                'content_1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.',
            ],
            [
                'title' => 'ICHIBANG BLUECUT',
                'product_id' => '7',
                'content_1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.',
            ],
            [
                'title' => 'ICHIBANG BLUECROMIC',
                'product_id' => '8',
                'content_1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.',
            ],
            [
                'title' => 'ICHIBANG INSOLE',
                'product_id' => '9',
                'content_1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.',
            ],
        ]);
    }
}
