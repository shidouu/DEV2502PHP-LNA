<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg
        ];
        Mail::to('lnanh0802@gmail.com')->send(new ContactMail($details));
         //return back()->with('message_sent','Đã gửi email thành công');
        return view('emails.contactMail',['details'=>$details]);
    }
}