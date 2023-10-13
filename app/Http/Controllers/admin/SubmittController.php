<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubmittController extends Controller
{
    public function index()
    {
        return view('admin.submit');
    }

    public function sendEmail(Request $request)
    {
        $details = 
        [
            'name'=>$request->input('name'),
             'email' => '<EMAIL>',
             'phone' => $request->phone,
             'organization'=>"$request->organization,
             'msg' => $request->msg    
        ];
             Mail::to('')->send(new ContactMail($details));
             return back()->with('message_sent','Your Message has sent 
             successfully');            
    }
}