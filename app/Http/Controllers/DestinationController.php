<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController
{
    public function index() {
        $destinations = Destination::all();

        return view('frontend.destination.index', compact([
            'destinations'
        ]));
    }

    public function show($id)
    {
        $destinations = Destination::with('destinationDetails')->findOrFail($id);

        return view('frontend.destination.show', compact([
            'destinations'
        ]));
    }
}
