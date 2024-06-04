<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController
{
    public function index() {
        return view('frontend.dashboard.about');
    }
}
