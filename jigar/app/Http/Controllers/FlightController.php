<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Flight;

class FlightController extends Controller
{
    public function list(Request $request){
        $flights = Flight::paginate(5);
//        $flights = Flight::simplePaginate(5);
//        $flights = Flight::where('active', 1)->paginate(5);
        return view('flights.list', ['records' => $flights]);
    }

}
