<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    use HasFactory;
    protected $table = 'sinhvien';
    protected $primaryKey = 'MaSV';
    protected $casts = [
        'NgaySinh' => 'date',       // <-- Đảm bảo xử lý đúng kiểu ngày
    ];
    public $timestamps = false;

}