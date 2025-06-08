<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PxuatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1, 20) as $index) {
            DB::table('pxuat')->insert([
                'SoPx'     => 'PX' . str_pad($index, 2, '0', STR_PAD_LEFT),
                'NgayXuat' => $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
                'TenKH'    => $faker->company(),
        ]);
    }
    }
}
