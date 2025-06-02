@extends('_layouts.master')
@section('title', 'Home - Devmaster Academy')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Trang chủ Viện Công Nghệ Và Đào tạo Devmaster</h1>
                @if (session()->has('fullName'))
                    <div class="alert alert-info">{{ session()->get('fullName') }}</div>
                @else
                    <div class="alert alert-danger">Bạn chưa đăng nhập</div>
                @endif
                <hr />
                @if (session()->has('account'))
                    @php
                        $acc = session('account');
                    @endphp
                    <div class="alert alert-info">Email:{{ $acc->email }}</div>
                @else
                    <div class="alert alert-danger">Bạn chưa đăng nhập</div>
                @endif
            </div>
        </div>
    </div>
@endsection
