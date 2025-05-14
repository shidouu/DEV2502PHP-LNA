<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
     public function showRegister()
    {
        return view('register');
    }
    public function submitRegister(Request $request)
    {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'gender' => 'required|string',
        'mobile' => 'required|digits:10',
        'city' => 'required|string|max:255',
        'dob' => 'required|date',
        'country' => 'required|string',
        'group' => 'required',
        'expertise' => 'required|array|min:1',
    ],[
    'name.required' => 'Vui lòng nhập tên.',
    'name.string' => 'Tên phải là chuỗi.',
    'name.max' => 'Tên không được vượt quá 255 ký tự.',

    'email.required' => 'Vui lòng nhập email.',
    'email.email' => 'Email không đúng định dạng.',

    'gender.required' => 'Vui lòng chọn giới tính.',

    'mobile.required' => 'Vui lòng nhập số điện thoại.',
    'mobile.digits' => 'Số điện thoại phải có 10 chữ số.',

    'city.required' => 'Vui lòng nhập thành phố.',
    'city.string' => 'Thành phố phải là chuỗi.',
    'city.max' => 'Thành phố không được vượt quá 255 ký tự.',

    'dob.required' => 'Vui lòng nhập ngày sinh.',
    'dob.date' => 'Ngày sinh không hợp lệ.',

    'country.required' => 'Vui lòng chọn quốc gia.',
    'country.string' => 'Quốc gia phải là chuỗi.',

    'expertise.required' => 'Vui lòng chọn ít nhất một chuyên môn.',
    'expertise.min' => 'Vui lòng chọn ít nhất một chuyên môn.',

    'group.required' => 'Vui lòng chọn nhóm.',
    ]);

    return redirect()->route('register.show')->with('success', 'Congratulations! <br/> You have successfully validated the form.');
    }
}
