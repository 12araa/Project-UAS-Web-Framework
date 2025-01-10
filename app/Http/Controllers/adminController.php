<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dashboard(){
        return view('pages.admin');
    }

    public function gallery(){
        return view('pages.gallery');
    }
}
