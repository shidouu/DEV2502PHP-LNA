<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function index(){
        return view('login');
    }

    public function loginSubmit(Request $request){
        // Validation Form
        $validationForm = $request->validate([
            'fullName'  =>'required',
            'email'     =>'required|email',
            'password'  =>'required|min:6|max:20'
        ], [
            'fullName.required'  => 'Vui lòng nhập họ tên.',
            'email.required'     => 'Vui lòng nhập email.',
            'email.email'        => 'Email không đúng định dạng.',
            'password.required'  => 'Vui lòng nhập mật khẩu.',
            'password.min'       => 'Mật khẩu phải có ít nhất :min ký tự.',
            'password.max'       => 'Mật khẩu không được vượt quá :max ký tự.',
        ]);

        // $result = $request->all();
        //return $result;

        // Lấy giá trị trên các điều khiển của form
        $fullName = $request->input('fullName');
        $email = $request->input('email');
        $pass = $request->input('password');

        # Lưu tài khoản và mật khẩu vào session
        $request->session()->put('fullName',$fullName);
        $request->session()->put('email',$email);
        $request->session()->put('pass',$pass);

        # Lưu thông tin đăng nhập với object

        $account = (Object)[
            'fullName'=> $fullName,
            'email'=> $email,
            'pass'=> $pass,
        ];

        $request->session()->put('account',$account);

        // return "<h1> Email: $email <br/> Pass: $pass <br/> FullName: $fullName";
        return redirect('/');
    }
}
