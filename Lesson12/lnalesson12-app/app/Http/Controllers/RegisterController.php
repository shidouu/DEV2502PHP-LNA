<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function registerSubmit(Request $request)
    {
        $validated = $request->validate([
            'fullName' => 'required',
            'email'=>'required|email',
            'phone' => 'required|nullable|string|max:15',
            'password' =>'required|min:6|max:20'
        ],
    [
    'fullName.required' => 'Vui lòng nhập Họ và Tên.',
    'email.required' => 'Vui lòng nhập Email.',
    'email.email' => 'Email không đúng định dạng.',
    'phone.required'=>'Vui lòng nhập số.',
    'phone.nullable'=>'Vui lòng nhập đúng định dạng.',
    'phone.max'=>'Số không được vượt quá : max số.',
    'phone.required'=>'Vui lòng nhập số.',
    'password.required' => 'Vui lòng nhập Mật khẩu.',
    'password.min' => 'Mật khẩu phải có ít nhất :min ký tự.',
    'password.max' => 'Mật khẩu không được vượt quá :max ký tự.'
    ]);

    $fullName = $request->input('fullName');
    $email = $request->input('email');
    $phone = $request->input('phone');
    $password = $request->input('password');

    return view('register_result', $validated);
    }
}
