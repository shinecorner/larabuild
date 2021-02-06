<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Flight;

class TestController extends Controller
{
    public function qbuilder(Request $request){

        DB::enableQueryLog();
//                $array = [
//            ['name' => 'Phillips Lamp', 'price' => 150],
//            ['name' => 'Nova lamp', 'price' => 90],
//            ['name' => 'Samsung lamp', 'price' => 70]
//        ];
//        echo json_encode($array);
//        exit;
//        DB::enableQueryLog();
////        $users = DB::table('users')->where([
////            ['name','like','j%'],
////            ['name','like','j%'],
////            ['remember_token','!=',NULL],
////        ])->get();
//        $users = DB::table('users')
//            ->select(DB::raw('sum(salary) as total_salary, designation'))
//            ->groupBy('designation')
//            ->get();
////        dd(DB::getQueryLog());
//                dd($users);
//        foreach ($users as $user) {
//            echo $user->name;
//        }

        /*$users = DB::table('users')
            ->select('users.*','contacts.*','orders.*','contacts.id as contact_id','orders.id as order_id')
            ->join('contacts','users.id', '=', 'contacts.user_id')
            ->join('orders','users.id', '=', 'orders.user_id')
            ->get();
//        dd($users);
        $recordsArray = [];
        foreach($users as $user){
            $recordsArray[$user->user_id]['name'] = $user->name;
            $recordsArray[$user->user_id]['phone'][$user->contact_id] = $user->phone;
            $recordsArray[$user->user_id]['orders'][$user->order_id]['price'] = $user->price;
            $recordsArray[$user->user_id]['orders'][$user->order_id]['department'] = $user->department;
//            $recordsArray[$user->user_id]['department'][$user->order_id] = $user->department;
        }
//        print_r($recordsArray);exit;
        return view('qbuilder', ['records' => $recordsArray]);*/

//        DB::enableQueryLog();
//        $orders = DB::table('orders')
//            ->where('detail->name', 'Phillips Lamp')
//            ->get();

//        $orders = DB::table('orders')
//            ->whereJsonContains('detail', ['name' => 'Nova lamp'])
//            ->get();

//        dd(DB::getQueryLog());
//        dd($orders);





//        $users = DB::table('users')->where('id','=',7)->limit(1)->get();
//        print_r($users);
//        echo $users[0]->name;
//        $user = DB::table('users')->find(2);
//        $user = DB::table('users')->find(7);
//        print_r($user);
//        echo $user->name;
//        exit;
//        $users = DB::table('users')->where('name','=','Jigar')->orderBy('id', 'ASC')->first();
//        print_r($users);
//        echo $users[0]->name;
//        $salary = DB::table('users')->where('name','=','Jigar')->orderBy('id', 'DESC')->value('salary');
//        print_r($salary);
//        $names = DB::table('users')->where('name','=','Jigar')->orderBy('id', 'DESC')->pluck('name','id');
//        print_r($names);

//        $chunks = DB::table('users')->orderBy('id')->chunk(5,function ($users){
//            print_r($users);
//            foreach ($users as $user) {
//                echo $user->name;
//                echo '<br>';
//            }
//        });
//        print_r($chunks);
//        $i = 2;
//        $chunks = DB::table('users')->orderBy('id')->chunk(2,function ($users){
//            print_r($users);
//            if($users[0]->name == 'Jayesh'){
//                return false;
//            }
//        });

//        DB::table('users')->whereNull('remember_token')
//            ->chunkById(2, function ($users) {
////                print_r($users);
//                foreach ($users as $user) {
//                    DB::table('users')
//                        ->where('id', $user->id)
//                        ->update(['remember_token' => false]);
//                }
//        });

//        $price = DB::table('orders')->max('price');
//        echo $price;exit;
//        $salary = DB::table('users')
//            ->where('designation', 'qa')
//            ->avg('salary');
//        print_r($salary);

//                $users = DB::table('users')
//                    ->select('designation',DB::raw('avg(salary) as average_salary'))
//                    ->groupBy('designation')
//                    ->get();
//        print_r($users);

//        var_dump(DB::table('orders')->where('finalized', 0)->get());
//        if (DB::table('orders')->where('finalized', 1)->exists()) {
//            exit('1111');
//        }
//        $users = DB::table('users')->select('name')->distinct()->get();
//        print_r($users);

//        $orders = DB::table('orders')
//            ->selectRaw('price * ? as price_with_tax', [1.0825])
//            ->get();
//        dd($orders);

//        $orders = DB::table('orders')
//            ->whereRaw('price > IF(state = "Maharashtra", ?, 400)', [1200])
//            ->get();
//        dd($orders);

//        $orders = DB::table('orders')
//            ->select('department', DB::raw('SUM(price) as total_sales'))
//            ->groupBy('department')
//            ->havingRaw('total_sales > ?', [1500])
//            ->get();
//        dd($orders);
//        $orders = DB::table('orders')
//            ->select('*')
//            ->addSelect(DB::raw('(updated_at - created_at) as duration'))
//            ->orderByRaw('updated_at - created_at DESC')
//            ->get();
//        dd($orders);

//        $orders = DB::table('orders')
//            ->select('city', 'state','department')
//            ->groupByRaw('state, city, department')
//            ->get();
//        dd($orders);

//        $users = DB::table('users')
//            ->join('contacts', 'users.id', '=', 'contacts.user_id')
//            ->join('orders', 'users.id', '=', 'orders.user_id')
//            ->select('users.*', 'contacts.phone', 'orders.price')
//            ->get();
//        dd($users);

//        $users = DB::table('users')
//            ->leftJoin('post', 'users.id', '=', 'post.user_id')
//            ->get();
//        dd($users);

//        $sizes = DB::table('size')
//            ->crossJoin('color')
//            ->get();
//        dd($sizes);

//        $users = DB::table('users')
//            ->join('contacts', function ($join) {
//                $join->on('users.id', '=', 'contacts.user_id')
//                    ->where([
//                            ['contacts.user_id', '>', 2],
//                            ['users.salary', '>=', 5500],
//                        ])
//                ;
//            })
////            ->join('contacts','users.id', '=', 'contacts.user_id')
////            ->where('contacts.user_id','>', 3)
//            ->get();
//        dd($users);

//        $latestPosts = DB::table('post')
//            ->select('user_id', DB::raw('MAX(created_at) as last_post_created_at'))
//            ->groupBy('user_id');
//
//        $users = DB::table('users')
//            ->joinSub($latestPosts, 'latest_posts', function ($join) {
//                $join->on('users.id', '=', 'latest_posts.user_id');
//            })->get();

//        select * from `users` inner join (select `user_id`, MAX(created_at) as last_post_created_at from `post` group by `user_id`) as `latest_posts` on `users`.`id` = `latest_posts`.`user_id`

//        $users = DB::table('users')
//            ->where('designation', '=', 'designer')
//            ->orWhere('salary', '>=', 8000)
//            ->get();
//        dd($users);

//        $users = DB::table('users')
//            ->where('designation', '=', 'designer')
//            ->orWhere(function($query) {
//                $query->where('designation', 'programmer')
//                    ->where('salary', '>=', 8000);
//            })
//            ->get();
//        dd($users);

//        $users = DB::table('users')
//            ->whereBetween('salary', [5000, 7000])
//            ->get();
//        dd($users);

//        $users = DB::table('users')
//            ->whereIn('id', [4, 7, 9])
//            ->get();
//        dd($users);

//        $users = DB::table('users')
//            ->whereNull('email_verified_at')
//            ->first();
//        dd($users);

//        $users = DB::table('users')
//            ->whereDate('created_at', '2021-01-25')
//            ->get();
//        dd($users);

//        $users = DB::table('users')
//        ->whereMonth('created_at', '02')
//        ->get();
//        dd($users);

//        $users = DB::table('users')
//            ->where('created_at', '=', '11:20:45')
//            ->get();
//        dd($users);

//        $users = DB::table('users')
//            ->whereColumn('created_at', 'updated_at')
//            ->get();
//        dd($users);

//        $users = DB::table('users')
//            ->whereColumn([
//                ['first_name', '=', 'last_name'],
//                ['updated_at', '>', 'created_at'],
//            ])->get();

//        $users = DB::table('users')
//            ->where('designation', '=', 'programmer')
//            ->where(function ($query) {
//                $query->where('salary', '>', 7000)
//                    ->orWhere('name', '=', 'Jigar');
//            })
//            ->get();
//        dd($users);
//        select * from users where exists ( select 1 from orders where orders.user_id = users.id )

//        dd(DB::getQueryLog());

        // $users = DB::table('users')->where(function ($query) {
        // $query->select('type')
        //     ->from('membership')
        //     ->whereColumn('membership.user_id', 'users.id')
        //     ->orderByDesc('membership.start_date')
        //     ->limit(1);
        // }, 'VIP')->get();
        // dd($users);


        // $orders = DB::table('orders')->where('price', '<', function ($query) {
        //         $query->selectRaw('avg(o.price)')->from('orders as o');
        //     })->get();
        // dd($orders);

        // $users = DB::table('users')
        //         ->orderBy('name', 'desc')
        //         ->orderBy('email', 'asc')
        //         ->get();

        // $user = DB::table('users')
        //         ->latest()
        //         ->first();

        // $randomUser = DB::table('users')
        //         ->inRandomOrder()
        //         ->first();

        // dd($randomUser);

        // $query = DB::table('users')->orderBy('name');

        // $usersOrderedByEmail = $query->reorder('email', 'desc')->get();

        // $users = DB::table('users')
        //         ->groupBy('name')
        //         ->having('name', '=', 'Jigar')
        //         ->get();
        // dd($users);

        // $users = DB::table('users')
        //         ->groupBy('name', 'salary')
        //         // ->having('account_id', '>', 100)
        //         ->get();
        //         dd($users);

        // $per_page_record = 2;
        // $current_page = 2;

        // $users = DB::table('users')->skip(($current_page - 1) * $per_page_record)->take($per_page_record)->get();
        // dd($users);


        $designation = $request->input('designation');

        // $users = DB::table('users')
        //         ->when($designation, function ($query, $designation) {
        //             return $query->where('designation', $designation);
        //         })
        //         ->get();
        //  dd($users);   
        
        // $sortBy = $request->input('sort_by');

        // $users = DB::table('users')
        //         ->when($sortBy, function ($query, $sortBy) {
        //             return $query->orderBy($sortBy);
        //         }, function ($query) {
        //             return $query->orderBy('name');
        //         })
        //         ->get();
        // dd($users);

        // $id = DB::table('size')->insertGetId(
        //         ['cloth_size' => 'XXL']
        //     );
            
        // DB::table('users')->upsert([
        //         ['name' => 'Jigar', 'designation' => 'designer', 'salary' => 9990], 
        //     ], ['name', 'designation'], ['salary']);

        // DB::table('users')
        // ->updateOrInsert(
        //         ['name' => 'Jigar', 'designation' => 'designer'],
        //         ['salary' => '7500']
        // );
        
        // $affected = DB::table('orders')
        //       ->where('id', 1)
        //       ->update(['detail->price' => 200]);

        // DB::table('items')->truncate();
        // DB::table('users')->get()->dd();
        // DB::table('users')->get()->dump();
        // echo '1';
        // dd(DB::getQueryLog());

    }
    public function eloquent(Request $request){
        // echo time();    
        // $obj = new Flight;
        // $obj->name = 'Delhi-Goa';
        // $obj->number = '45712';
        // $obj->departure = 'Delhi';
        // $obj->destination = 'Goa';
        // $obj->price = '2000';
        // // $obj->active = '1';
        // $obj->departed = '1';
        // $obj->save();

        // dd(Flight::all());
        // foreach (Flight::all() as $flight) {
        //         echo $flight->name;
        // }

        // $flights = Flight::where('active', 1)
        //        ->orderBy('name')
        //        ->take(10)
        //        ->get();

        // $flight = Flight::where('number', '45712')->first();
        // dd($flight);
        // dd($flight->fresh());

        // $flight = Flight::where('number', '45712')->first();
        // $flight->number = '456';
        // // echo $flight->number;
        // $flight->save();
        // $flight->refresh();
        // // $flight->number; // "FR 900"
        // echo $flight->number;

        // $flights = Flight::all();
        // $flights = $flights->reject(function ($flight) {
        //         return $flight->cancelled;
        //     });
        // foreach($flights as $flight){
        //         echo $flight->cancelled;
        //         echo '<br>';
        //         echo $flight->destination;
        //         echo '<br>';echo '<br>';echo '<br>';
        // }

        Flight::chunk(2, function ($flights) {
                dump($flights);
                // foreach ($flights as $flight) {
                //     //
                // }
        });
    }

}
