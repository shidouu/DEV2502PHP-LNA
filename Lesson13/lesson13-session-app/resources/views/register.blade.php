@extends('_layouts.master')
@section('title', 'Register Information')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 my-3">
                <form action="{{ route('register.submit') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Register Information</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" name="fullName" id="fullName" class="form-control"
                                    value="{{ old('fullName') }}">
                                @error('fullName')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Đăng Ký</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
