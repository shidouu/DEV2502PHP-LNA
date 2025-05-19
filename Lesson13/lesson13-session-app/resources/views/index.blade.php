@extends('_layouts.master')
@section('title', 'Home -Devmaster Academy')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Trang chủ Viện Công Nghệ và Đào Tạo Devmaster</h1>
                @if (session()->has('fullName'))
                    <span class="alert alert-info">{{ session()->get('fullName') }}</span>
                @else
                    <span class="alert alert-danger">Bạn chưa đăng nhập</span>
                @endif
                <hr>
                @if (session()->has('account'))
                    @php
                        $acc = session('account');
                    @endphp
                    <span class="alert alert-info">{{ $acc->fullName }}</span>
                @else
                    <span class="alert alert-danger">Bạn chưa đăng nhập</span>
                @endif
            </div>
        </div>
    </div>
@endsection
