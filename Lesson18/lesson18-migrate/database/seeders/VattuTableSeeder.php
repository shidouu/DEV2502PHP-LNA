<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vattu')->insert([
            'MaVTu'=>'DD02',
            'TenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'DvTinh'=>'Bộ',
            'PhanTram'=>40,
        ]);
    }
}