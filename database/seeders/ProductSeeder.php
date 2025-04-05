<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Headphone | WH-CH520',
                'description' => 'Nikmati kualitas suara tinggi sepanjang hari. Headphone WH-CH520 dengan masa pakai baterai hingga 50 jam, konektivitas yang stabil, dan performa panggilan yang ditingkatkan, memenuhi kebutuhan harian Anda.',
                'price' => 800000,
                'stock' => 5,
                'image' => 'https://mdp.co.id/_next/image?url=https%3A%2F%2Fapi.mdp.co.id%2Fupload%2Fpictures%2Fproduct%2FSP00540.jpg&w=256&q=75',
                'product_category_id' => 1,
            ],

            [
                'name' => 'Headphone Bluetooth Fantech GO Tune WH06',
                'description' => 'WH06 dibekali dengan kombinasi mode konektivitas yang sempurna. Terdiri dari mode wired menggunakan kabel 3.5 mm dan mode wireless menggunakan koneksi BT 5.3.',
                'price' => 250000,
                'stock' => 10,
                'image' => 'https://down-id.img.susercontent.com/file/sg-11134201-7rdxo-m05w0w1ltq7a21',
                'product_category_id' => 1,
            ],

            [
                'name' => 'Fantech ATOM MK876 RGB Gaming Keyboard mechanical TKL',
                'description' => 'Keyboard ini menggunakan desain TKL (Tenkeyless), yang berarti tidak memiliki numpad. Desain ini memberikan lebih banyak ruang di meja Anda untuk pergerakan mouse, yang sangat penting untuk gaming',
                'price' => 300000,
                'stock' => 10,
                'image' => 'https://spcdn.shortpixel.ai/spio/ret_img,q_orig,to_webp,s_webp/fantech.id/wp-content/uploads/2023/06/ATOM-MK876-RGB-Gaming-Mechanical-Keyboard-TKL.jpg.webp',
                'product_category_id' => 2,
            ],

            [
                'name' => 'HP Pavilion 16 inch Laptop 16-af0777TU',
                'description' => 'HP Pavilion 16-af0777TU adalah laptop 16 inci yang dirancang untuk produktivitas dan hiburan sehari-hari. ',
                'price' => 15000000,
                'stock' => 3,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7LTh8tgETfNm8Dca9n_9A1S63gmSm6maYoQ&s',
                'product_category_id' => 3,
            ],
        ]);
    }
}
