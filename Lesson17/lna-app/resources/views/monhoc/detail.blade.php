@extends('_layouts.master')
@section('title', 'Danh sách môn học')

@section('content')
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thông tin chi tiết môn học</h3>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <b>Mã môn học:</b>
                    {{ $monhoc->MaMH }}
                </p>
                <p>
                    <b>Tên môn học:</b>
                    {{ $monhoc->TenMH }}
                </p>
                <p>
                    <b>Số tiết:</b>
                    {{ $monhoc->Sotiet }}
                </p>
            </div>
            <div class="card-footer">
                <a href="/mon-hoc" class="btn btn-secondary">Quay lại</a>
            </div>
        </div>
    @endsection
