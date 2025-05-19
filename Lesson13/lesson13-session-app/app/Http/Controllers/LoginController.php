<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function loginSubmit(Request $request){
        //validation form
    $validationForm=$request->validate([
    'fullName' => 'required',
    'email'=>'required|email',
    'password' =>'required|min:6|max:20'
    ],[
    'fullName.required' => 'Vui lòng nhập Họ và Tên.',
    'email.required' => 'Vui lòng nhập Email.',
    'email.email' => 'Email không đúng định dạng.',
    'password.required' => 'Vui lòng nhập Mật khẩu.',
    'password.min' => 'Mật khẩu phải có ít nhất :min ký tự.',
    'password.max' => 'Mật khẩu không được vượt quá :max ký tự.'
    ]);
    //$result = $request->all();
    //return $result;


    //Lấy giá trị trên các điều kiện của form
    $fullName = $request->input('fullName');
    $email = $request->input('email');
    $password = $request->input('password');

    // return "<h1> Email: $email <br/> Pass: $password <br/>  FullName: $fullName";
    $request->session()->put('fullName', $fullName);
    $request->session()->put('email', $email);
    $request->session()->put('password', $password);


    //Lưu thông tin đăng nhập với object
    $account = (Object)[
        'fullName' => $fullName,
        'email' => $email,
        'password'=>$password,
    ];
     $request->session()->put('account', $account);
    //return "<h1> Email: $email <br/> Pass: $password <br/>";
    return redirect('/');
    }
}