<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogExampl4Controller extends Controller
{
    public function index(){
        return view ('admin.wicedmanagingrepos');
    }
}