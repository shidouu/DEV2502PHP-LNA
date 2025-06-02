@extends('_layouts.master')
@section('title','Login information')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 my-3">
                <form action="{{route('login.submit')}}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Login Information</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="fullName">FullName</label>
                                <input type="text" name="fullName"  id="fullName" class="form-control" value="{{ old('fullName') }}">
                                @error('fullName')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email"  id="email" class="form-control" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password"  id="password" class="form-control" value="{{ old('password') }}">
                                @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection