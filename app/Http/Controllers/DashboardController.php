<?php

namespace App\Http\Controllers;

use App\Models\Destination;

class DashboardController
{
    public function index() {
        $destinations = Destination::all();

        return view('frontend.dashboard.home', compact([
            'destinations'
        ]));
    }
}
