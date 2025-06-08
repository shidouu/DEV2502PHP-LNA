<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DondhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1, 20) as $index) {
            DB::table('dondh')->insert([
                'SoDH'    => 'DH' . str_pad($index, 2, '0', STR_PAD_LEFT),
                'NgayDH'  => $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
                'MaNCC'   => $faker->randomElement(DB::table('nhacc')->pluck('MaNCC')->toArray()),
            ]);
        }
    }
}
