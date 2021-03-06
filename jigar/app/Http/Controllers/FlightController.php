<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Flight;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class FlightController extends Controller
{
    public function list(Request $request){
        $flights = Flight::paginate(5);

//        return $flights = Flight::paginate(5);
//        $flights = Flight::orderBy('id', 'desc')->paginate(2);

//        $flights = Flight::paginate(5)->withQueryString();
//        $flights->withPath('/admin/users');

//        $flights = Flight::paginate(5)->withQueryString()->fragment('list_of_flight'); // # tag use of paragraph

//        $flights->appends(['sort' => 'number']);

        // LengthAwarePaginator

//        $data = Flight::select('name','departure','destination')->get()->toArray();
//        $page = $request->get('page') ? $request->get('page') : 1;
//        $perPage = 5;
//        $items = $data instanceof Collection ? $data : Collection::make($data);
//        $flights = new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, ['path' => '/flights/list']);


//        $flights = Flight::simplePaginate(5);
//        $flights = Flight::where('active', 1)->paginate(5);
        return view('flights.list', ['records' => $flights]);
    }

}
