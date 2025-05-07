<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewDemoController extends Controller
{
    public function view4()
    {
        return view('view4')
        ->with('name','Chung Trịnh')
        ->with('company','Devmaster Academy');;
    }
}
