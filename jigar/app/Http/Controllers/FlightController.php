<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Flight;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class FlightController extends Controller
{
    public function list(Request $request)
    {
//        if (Auth::check()) {
//            dd(Auth::User());
//        } else {
//            dd("You are Not logged in");
                //remember me like Check box
                //enter in database remember token
//        }
        $flights = Flight::paginate(5);

//        $user = Auth::User();
//        echo $user->name;

//        echo Auth::id();exit();


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
//        echo $items->count();exit();
        //        $flights = new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, ['path' => '/flights/list']);


//        $flights = Flight::simplePaginate(5);
//        $flights = Flight::where('active', 1)->paginate(5);
        return view('flights.list', ['records' => $flights]);
    }

}
