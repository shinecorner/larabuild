<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Flight;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
//use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class FlightController extends Controller
{
    public function list(Request $request){
//        $flights = DB::table('flights')->paginate(5);

//        $flights = DB::table('flights')->simplePaginate(5);
        $flights = Flight::paginate(5);
//        return $flights = Flight::paginate(5);
//        $flights = Flight::paginate(2)->withQueryString()->fragment('list_of_flight');
//        $flights->withPath('/admin/users');
//        $flights->appends(['sort' => 'name']);


//        $flights = Flight::where('active', 1)->paginate(5);

        /*
         * LengthAwarePaginator
         */
        /*$data = DB::table('flights')->select('id','name','departure','destination')->get()->toArray();
        $page = $request->get('page') ? $request->get('page') : 1;
        $perPage = 5;
        $items = $data instanceof Collection ? $data : Collection::make($data);
        $flights = new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, ['path' => 'flights/list']);*/
        return view('flights.list', ['records' => $flights]);
    }
    public function store(Request $request)
    {
        DB::enableQueryLog();
        // $flight = new Flight;
        // $flight->name = 'Rajkot';
        // $flight->destination_id = 5;
        // $flight->save();

//        print_r($request->all());
//        $flight = Flight::create([
//            'name' => 'Jamnagar to Rajkot',
//            'destination_id' => 5
//        ]);

//        Flight::where('active', 1)
//            ->where('destination', 'Kutchbury')
//            ->update(['departed' => 1]);

//        $flight = Flight::create([
//            'name' => 'Rajkot to Junagadh',
//            'destination_id' => 2
//        ]);
//        $flight->name = 'Rajkot to Ahmedabad';
//        $flight->save();
//        dd($flight->isDirty());

//        $flight = Flight::create([
//            'name' => 'Jamnagar to Rajkot',
//            'destination_id' => 5
//        ]);
//        $flight->name = 'Junagadh to rajkot';
//        dd($flight->isClean());

//        $flight = Flight::create([
//            'name' => 'Jamnagar to Rajkot',
//            'destination_id' => 5
//        ]);
//        $flight->name = 'Junagadh to rajkot';
//        $flight->save();
//        dd($flight->wasChanged());

//        $user = User::find(1);
//
//        $user->name; // John
//        $user->email; // john@example.com
//
//        $user->name = "Jack";
//        $user->name; // Jack
//
//        $user->getOriginal('name'); // John
//        $user->getOriginal(); // Array

//        $flight = Flight::find(2);
////        $flight->price = 6000;
//        $flight->fill(['name' => 'Amsterdam to Frankfurt', 'price' => 6000, 'number' => 77777]);
//        dd($flight);
//        $flight = Flight::find(3);
//        $flight->delete();

//        $flight->forceDelete();
//        $flight = DB::table('flights')->find(2);
//        $flight = Flight::find(2);
//        dd($flight);
//        $flight->restore();
//        $flights = Flight::withTrashed()->where('id', 2)->restore();
//        dd($flights);
//        Flight::withTrashed()
//            ->where('airline_id', 1)
//            ->restore();
//        $flight->delete();
//        $flights = Flight::withTrashed()
//            ->where('active', 1)
//            ->get();
//        $flights = Flight::onlyTrashed()
//            ->where('active', 1)
//            ->get();
//        $flights = Flight::where('number', '>', '50000')->active()->get();
//        dd($flights);
//        $flights = Flight::departed()->orWhere(function (Builder $query) {
//            $query->active();
//        })->get();

//        $flights = Flight::departed()->orWhere->active()->get();
//        dd($flights);

//        $flights = Flight::departed()->orWhere->type('domestic')->get();
//        dd($flights);

//        $flight1 = Flight::find(1);
//        $flight2 = Flight::find(1);
//        dd($flight1->is($flight2));
//        $user = User::find(8);
//        $post = Post::find(2);
//        $user->delete();
//        dd($post->user()->is($user));

//        $flight = Flight::find(1);
//        $flight->name = 'Paris';
//        $flight->save();

//        $user = User::find(1);
//        $user->salary = 9500;
//        $user->save();

//        $user = User::create([
//            'name' => 'Jigar',
//            'email' => 'Jigarkariya@gmail.com',
//            'salary' => 9000,
//            'designation' => 'programmer',
//            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
//        ]);

//        $user = User::withoutEvents(function () {
//            $user = User::create([
//                'name' => 'Jayesh',
//                'email' => 'Jayesh@gmail.com',
//                'salary' => 9000,
//                'designation' => 'programmer',
//                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
//            ]);
//            return $user;
//        });

//        $user = User::findOrFail(1);
//        $user->salary = 10000;
//        $user->save();


//        dd(DB::getQueryLog());
    }
}
