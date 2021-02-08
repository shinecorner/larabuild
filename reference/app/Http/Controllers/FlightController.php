<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function store(Request $request)
    {        
        // $flight = new Flight;
        // $flight->name = 'Rajkot';        
        // $flight->destination_id = 5;
        // $flight->save();

        $flight = Flight::create([
            'name' => 'Jamnagar to Rajkot',
            'destination_id' => 5
        ]);
    }
}
