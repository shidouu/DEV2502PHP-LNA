<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonHocController extends Controller
{
     public function index()
    {
        //Truy vấn dữ liệu từ bảng MonHoc
        $monhocs = DB::select('select * from monhoc ');
        return view('monhoc.index',['monhocs'=>$monhocs]);
    }
    public function detail($mamh)
    {
        //Truy vấn đọc dữ liệu từ bảng khoa theo điều kiện mamh
        $monhoc = DB::select('select * from monhoc where MaMH =?',[$mamh])[0];
        return view('monhoc.detail',['monhoc'=>$monhoc]);
    }
    //create tạo form
    public function create()
    {
        return view('monhoc.create');
    }
    public function createSubmit(Request $request)
    {
        DB::insert('insert into monhoc(MaMH, TenMH, Sotiet) values(?, ?, ?)',
                                    [$request->MaMH, $request->TenMH, $request->Sotiet]);
        return redirect('/monhoc');
    }
     //Edit form
    public function edit($mamh)
    {
        $monhoc = DB::select('select * from monhoc where MaMH = ?',[$mamh])[0];
        return view('monhoc.edit',['monhoc'=>$monhoc]);
    }
    //Edit submit
    public function editSubmit(Request $request)
    {
        $mamh=$request->input('MaMH');
        $tenmh=$request->input('TenMH');
        $sotiet=$request->input('Sotiet');
        DB::update('update monhoc set TenMH=?, Sotiet=? where MaMH=?',[$tenmh,$sotiet,$mamh]);
        return redirect('/monhoc');
    }
    //Delete->$makh
    public function delete($mamh)
    {
        $monhoc = DB::delete('delete from monhoc where MaMH=?',[$mamh]);
        return redirect('/monhoc');
    }
}