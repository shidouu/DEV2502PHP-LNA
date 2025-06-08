<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CTDondhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1, 50) as $index) {
            DB::table('ctdondh')->insert([
                'SoDH'    => 'DH' . str_pad(rand(1, 20), 2, '0', STR_PAD_LEFT),
                'Mavtu'   => 'VT' . str_pad(rand(1, 50), 3, '0', STR_PAD_LEFT),
                'SLDat'   => rand(10, 100),
            ]);
        }
    }
}