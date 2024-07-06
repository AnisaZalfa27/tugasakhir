<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftardosenController extends Controller
{
    public function daftardosen(){
        return view('admin.daftardosen');
    }
}
