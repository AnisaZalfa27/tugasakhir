<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function index(){

        $data_layout = [
            'title => halaman admin',
        ];
        View::share($data_layout);

        return view('admin.index', ['username' =>'stt terpadu nurul fikri']);
    }
}
