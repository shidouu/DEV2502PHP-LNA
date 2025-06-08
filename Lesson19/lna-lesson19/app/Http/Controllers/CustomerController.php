<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function index()
    {
        return view('contact.index-customer');
    }
    public function sendEmail(Request $request)
    {
        $details = [
            'id'=>$request->id,
            'name' => $request->name,
            'email' => $request->email,
            'password'=>$request->password,
            'phone' => $request->phone,
            'address'=>$request->address,
            'picture'=>$request->picture,
            'status'=>$request->status
        ];
        Mail::to('lnanh0802@gmail.com')->send(new ContactMail($details));

       return view('customer.ContactMail',['details'=>$details]);
    }
}