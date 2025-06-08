<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TonkhoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $faker = Faker::create();
        foreach(range(1, 30) as $index) {
            DB::table('tonkho')->insert([
                'NamThang' => $faker->date('Ym'),
                'Mavtu'    => 'VT' . str_pad(rand(1, 50), 3, '0', STR_PAD_LEFT),
                'SLDau'    => rand(10, 100),
                'TongSLN'  => rand(100, 500),
                'TongSLX'  => rand(50, 300),
                'SLCuoi'   => rand(10, 200),
            ]);
        }
    }
}
