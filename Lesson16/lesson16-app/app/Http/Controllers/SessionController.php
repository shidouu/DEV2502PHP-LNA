<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    # Đọc dữ liệu từ session
    public function getSessionData(Request $request){
        echo "<h1> SessionID: " . $request->session()->getId();

        if($request->session()->has("name")){
            echo "<h1> " . $request->session()->get("name");
        }else{
            echo "<h1> Không có dữ liệu trong session có tên là name";
        }
    }

    # Lưu dữ liệu vào session
    public function storeSessionData(Request $request){
        $request->session()->put('name',"Devmaster Academy");
        echo "<h2> Dữ liệu đã được lưu và session";
    }

    # Xóa dữ liệu trong session

    public function deleteSessionData(Request $request){
        $request->session()->forget('name');
        echo "<h2> Dữ liệu trong session với tên name đã được xóa";
    }
}
