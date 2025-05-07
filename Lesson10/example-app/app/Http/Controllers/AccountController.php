<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AccountController extends Controller
{
    public function index()
    {
        return "<h1> Account Controller; action index; return string";
    }


    //Action trả về form thêm mới tài khoản
    public function create()
    {
        //Action trả về view có tên account-create trong thư mục \\ resources\views\account-create.blade.php
        return view('account-create');
    }

    //Action: return view and data
    public function showData()
    {
          //Action trả về view có tên account-show trong thư mục \\ resources\views\account-show.blade.php
          $data = array('220012345','Devmaster');
          return view('account-show',compact('data'));
    }

    //acount-list
    public function list(){
         // dữ liệu
        $data = array(
        ["id"=>1,"UserName"=>"ChungTrinh","Password"=>"123456a@","FullName"=>"Trịnh Văn Chung"],
        ["id"=>2,"UserName"=>"Devmaster","Password"=>"123456a@","FullName"=>"Devmaster Academy"]
        );

        return view('account-list',['accounts'=>$data]);
    }
    // Lấy dữ liệu từ DB
    public function getAllAccount()
    {
        $data = DB::table('account')->get();
        return view('account-getall',['accounts'=>$data]);
    }

}
