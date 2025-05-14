<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'userid' => 'required|min:5|max:12',
            'password' => 'required|min:7|max:12',
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'address' => 'nullable|string',
            'country' => 'required|not_in:default',
            'zip' => 'required|numeric',
            'email' => 'required|email',
            'sex' => 'required',
            'language' => 'required|array|min:1',
            'about' => 'nullable|string',
        ],
        [
        'userid.required' => 'Vui lòng nhập User ID.',
        'userid.min' => 'User ID phải có ít nhất 5 ký tự.',
        'userid.max' => 'User ID không được vượt quá 12 ký tự.',

        'password.required' => 'Vui lòng nhập mật khẩu.',
        'password.min' => 'Mật khẩu phải từ 7 ký tự trở lên.',
        'password.max' => 'Mật khẩu không được vượt quá 12 ký tự.',

        'name.required' => 'Vui lòng nhập họ tên.',
        'name.regex' => 'Tên chỉ được chứa chữ cái và khoảng trắng.',

        'country.required' => 'Vui lòng chọn quốc gia.',
        'country.not_in' => 'Vui lòng chọn quốc gia hợp lệ.',

        'zip.required' => 'Vui lòng nhập mã ZIP.',
        'zip.numeric' => 'ZIP chỉ được chứa số.',

        'email.required' => 'Vui lòng nhập email.',
        'email.email' => 'Email không đúng định dạng.',

        'sex.required' => 'Vui lòng chọn giới tính.',

        'language.required' => 'Vui lòng chọn ngôn ngữ.',
        'language.array' => 'Ngôn ngữ không hợp lệ.',
        'language.min' => 'Phải chọn ít nhất 1 ngôn ngữ.',
    ]);
    $userid = $request->input('userid');
    $name = $request->input('name');
    $password = $request->input('password');
    $address = $request->input('address');
    $country = $request->input('country');
    $zip = $request->input('zip');
    $email = $request->input('email');
    $sex = $request->input('sex');
    $language = implode(', ', $request->input('language'));
    $about = $request->input('about');

    return "<h1>User Id: $userid <br/> Name: $name <br/> Pass: $password <br/>
     Address: $address <br/> Country: $country <br/> Zip: $zip <br/>
    Email: $email <br/> Sex: $sex <br/> Language: $language <br/> About: $about <br/>";
    }
}