<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhoaController extends Controller
{
    public function index()
    {
        //Truy vấn dữ liệu từ bảng Khoa
        $khoas = DB::select('select * from khoa ');
        return view('khoa.index',['khoas'=>$khoas]);
    }
    public function detail($makh)
    {
        //Truy vấn đọc dữ liệu từ bảng khoa theo điều kiện makh
        $khoa = DB::select('select * from khoa where MaKH =?',[$makh])[0];
        return view('khoa.detail',['khoa'=>$khoa]);
    }
    //create tạo form
    public function create()
    {
        return view('khoa.create');
    }
    public function createSubmit(Request $request)
    {
        DB::insert('insert into khoa(MaKH, TenKH) values(?, ?)',
                                    [$request->MaKH, $request->TenKH]);
        return redirect('/khoa');
    }
    //Edit form
    public function edit($makh)
    {
        $khoa = DB::select('select * from khoa where MaKH = ?',[$makh])[0];
        return view('khoa.edit',['khoa'=>$khoa]);
    }
    //Edit submit
    public function editSubmit(Request $request)
    {
        $makh=$request->input('MaKH');
        $tenkh=$request->input('TenKH');
        DB::update('update khoa set TenKH=? where MaKH=?',[$tenkh,$makh]);
        return redirect('/khoa');
    }
    //Delete->$makh
    public function delete($makh)
    {
        $khoa = DB::delete('delete from khoa where MaKH=?',[$makh]);
        return redirect('/khoa');
    }
}
