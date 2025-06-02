<?php

namespace App\Http\Controllers;

use App\Models\SinhVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SinhVienController extends Controller
{
    // CRUD
    public function index() {
        $sinhviens = SinhVien::all();
        return view('sinhvien.index', ['sinhviens' => $sinhviens]);
    }

    // Đọc thông tin chi tiết sinh viên theo mã sinh viên
    public function getSinhVienById($masv) {
        $sinhvien = SinhVien::where('MaSV', $masv)->first();
        return view('sinhvien.detail', ['sinhvien' => $sinhvien]);
    }

    // Create: hiển thị form
    public function create() {
        $khoas = DB::table('khoa')->get(); // Lấy danh sách khoa để chọn
        return view('sinhvien.create', ['khoas' => $khoas]);
    }

    // Xử lý submit thêm mới
    public function createSubmit(Request $request) {
        // $validator = Validator::make($request->all(), [
        //     'MaSV' => 'required|unique:sinhvien,MaSV',
        //     'HoSV' => 'required',
        //     'TenSV' => 'required',
        //     'Phai' => 'required|boolean',
        //     'NgaySinh' => 'required|date',
        //     'NoiSinh' => 'required',
        //     'MaKH' => 'required|exists:khoa,MaKH',
        //     'HocBong' => 'nullable|numeric|min:0',
        //     'DiemTrungBinh' => 'nullable|numeric|min:0|max:10',
        // ],[
        //     'MaSV.required' => 'Mã sinh viên không được để trống.',
        //     'MaSV.unique' => 'Mã sinh viên đã tồn tại.',
        //     'MaSV.exists' => 'Mã sinh viên không tồn tại.',

        //     'HoSV.required' => 'Họ sinh viên không được để trống.',
        //     'TenSV.required' => 'Tên sinh viên không được để trống.',

        //     'Phai.required' => 'Giới tính không được để trống.',
        //     'Phai.boolean' => 'Giới tính phải là giá trị hợp lệ (0 hoặc 1).',

        //     'NgaySinh.required' => 'Ngày sinh không được để trống.',
        //     'NgaySinh.date' => 'Ngày sinh không hợp lệ.',

        //     'NoiSinh.required' => 'Nơi sinh không được để trống.',

        //     'MaKH.required' => 'Khoa không được để trống.',
        //     'MaKH.exists' => 'Mã khoa không tồn tại.',

        //     'HocBong.numeric' => 'Học bổng phải là số.',
        //     'HocBong.min' => 'Học bổng không được âm.',

        //     'DiemTrungBinh.numeric' => 'Điểm trung bình phải là số.',
        //     'DiemTrungBinh.min' => 'Điểm trung bình không được nhỏ hơn 0.',
        //     'DiemTrungBinh.max' => 'Điểm trung bình không được lớn hơn 10.',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        $sinhvien = new SinhVien;

        $sinhvien->MaSV=$request->MaSV;
        $sinhvien->HoSV=$request->HoSV;
        $sinhvien->TenSV=$request->TenSV;
        $sinhvien->Phai = $request->Phai ? 1 : 0;
        $sinhvien->NgaySinh=$request->NgaySinh;
        $sinhvien->NoiSinh=$request->NoiSinh;
        $sinhvien->MaKH=$request->MaKH;
        $sinhvien->HocBong=$request->HocBong;
        $sinhvien->DiemTrungBinh=$request->DiemTrungBinh;

        $sinhvien->save();

        return redirect('/sinh-vien')->with('success', 'Thêm mới sinh viên thành công!');
    }

    // Hiển thị form sửa
    public function edit($masv) {
        $sinhvien = SinhVien::where('MaSV', $masv)->first();
        $khoas = DB::table('khoa')->get(); // Để chọn khoa khi sửa
        return view('sinhvien.edit', ['sinhvien' => $sinhvien, 'khoas' => $khoas]);
    }

    // Xử lý cập nhật sinh viên
    public function editSubmit(Request $request) {
        // $validator = Validator::make($request->all(), [
        //     'MaSV' => 'required|exists:sinhvien,MaSV',
        //     'HoSV' => 'required',
        //     'TenSV' => 'required',
        //     'Phai' => 'required|boolean',
        //     'NgaySinh' => 'required|date',
        //     'NoiSinh' => 'required',
        //     'MaKH' => 'required|exists:khoa,MaKH',
        //     'HocBong' => 'nullable|numeric|min:0',
        //     'DiemTrungBinh' => 'nullable|numeric|min:0|max:10',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        $masv = $request->MaSV;

        $sinhvien= SinhVien::where('MaSV', $masv)->first();

        $sinhvien->HoSV=$request->HoSV;
        $sinhvien->TenSV=$request->TenSV;
        $sinhvien->Phai = $request->Phai ? 1 : 0;
        $sinhvien->NgaySinh=$request->NgaySinh;
        $sinhvien->NoiSinh=$request->NoiSinh;
        $sinhvien->MaKH=$request->MaKH;
        $sinhvien->HocBong=$request->HocBong;
        $sinhvien->DiemTrungBinh=$request->DiemTrungBinh;

        $sinhvien->save();

        return redirect('/sinh-vien')->with('success', 'Cập nhật sinh viên thành công!');
    }

    // Xóa sinh viên
    public function delete($masv)
    {
        SinhVien::where('MaSV', $masv)->delete();
        return redirect('/sinh-vien')->with('success', 'Xóa sinh viên thành công!');
    }
}
