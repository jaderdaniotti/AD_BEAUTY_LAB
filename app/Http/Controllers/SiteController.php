<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function homepage () {
        return view('welcome');
    }

    public function contacts () {
        return view('contacts');
    }

    public function treatments () {
        return view('treatments');
    }

    
}
