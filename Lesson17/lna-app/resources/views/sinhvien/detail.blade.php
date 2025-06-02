@extends('_layouts.master')
@section('title', 'Danh sách sinh viên')

@section('content')
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thông tin chi tiết sinh viên</h3>
            </div>
            <div class="card-body">
                <p><b>Mã sinh viên:</b> {{ $sinhvien->MaSV }}</p>
                <p><b>Họ và Tên sinh viên:</b> {{ $sinhvien->HoSV }} {{ $sinhvien->TenSV }}</p>
                <p><b>Ngày sinh:</b> {{ \Carbon\Carbon::parse($sinhvien->NgaySinh)->format('d/m/Y') }}</p>
                <p><b>Nơi sinh:</b> {{ $sinhvien->NoiSinh }}</p>
                <p><b>Phái:</b> {{ $sinhvien->Phai ? 'Nam' : 'Nữ' }}</p>
                <p><b>Mã khoa:</b> {{ $sinhvien->MaKH }}</p>
                <p><b>Điểm trung bình:</b> {{ number_format($sinhvien->DiemTrungBinh, 2) }}</p>
                <p><b>Học bổng:</b> {{ number_format($sinhvien->HocBong, 2) }}</p>
            </div>
            <div class="card-footer">
                <a href="/sinh-vien" class="btn btn-secondary">Quay lại</a>
            </div>
        </div>
    </section>
@endsection
