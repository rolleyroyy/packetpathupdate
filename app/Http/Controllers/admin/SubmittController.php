<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubmittController extends Controller
{
    public function index(){
        return view ('admin.submit');
    }

    public function register(Request $request)
    {
       echo "<pre>";
        print_r($request->all());
    }
}