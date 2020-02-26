<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function construct
    {
        $this->middleware('auth');
    }

    public function admin()
    {
        return view('admin');    
    }
}
