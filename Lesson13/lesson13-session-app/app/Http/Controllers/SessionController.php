<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    #Đọc dữ liệu từ Session
    public function getSesssionData(Request $request)
    {
        echo "<h1>" .$request->session()->getId();
        if($request->session()->has('name')){
            echo "<h1>" .$request->session()->get('name');
        }else{
            echo "<h1> Không có dữ liệu trong session có tên là name";
        }
    }

    #Lưu dữ liệu từ Sesstion
    public function storeSessionData(Request $request)
    {
        $request->sessio()->put('name',"Devmaster Academy!");
        echo "<h2> Dữ liệu đã được lưu vào session";
    }

    #Xóa dữ liệu từ Session
    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('name');
        echo "<h2> Dữ liệu đã được xóa khỏi session";
    }
}
