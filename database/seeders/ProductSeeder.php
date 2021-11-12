<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            "name" => "SteelSeries Arctis Pro",
            "price" => "2.000.000",
            "category" => "Headset",
            "description" => "Headset mahal dah pokonya",
            "gallery" => "{{ asset('/Asset/Image/product/product2.svg')}}",
        ]
        );
    }
}
