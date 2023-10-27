<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function contact(){
        return view ('admin.contact');
    }


public function sendEmail(Request $request)
{
    $details = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'phone'=>$request->input('phoneno'),
        'organization' => $request->input('organization'),
        'message'=>$request->input('message')
        
    ];

    Mail::to('contact@packetp.com')->send(new ContactMail($details));
    return back()->with('message_sent','Your message has been sent successfully!');
}

} 