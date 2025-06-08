<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CTPnhapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $soPnList = DB::table('pnhap')->pluck('SoPn')->toArray();
        $mavtuList = DB::table('vattu')->pluck('Mavtu')->toArray();
        foreach(range(1, 50) as $index) {
            DB::table('ctpnhap')->insert([
                'SoPn'    => $faker->randomElement($soPnList),
                'Mavtu'   => $faker->randomElement($mavtuList),
                'SLNhap'  => $faker->numberBetween(10, 200),
                'DGNhap'  => $faker->randomFloat(2, 500, 10000),
            ]);
        }
    }
}