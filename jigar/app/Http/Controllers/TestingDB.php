<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestingDB extends Controller
{
  //
  public function qbuilder()
  {

    //   $users =  DB::connection('testing')->table('users')->where('name','jigar')->get();
    //   dd($users);


    // $users = DB::connection('testing')->table('users')->get();
    // foreach($users as $user)
    // {
    //     echo $user->name;
    // }

    // $users = DB::connection('testing')->table('users')->where('name','divyesh')->first();
    //     return $users->email;
    // }

    // $user = DB::connection('testing')->table('users')->find(2);
    // return $user->remember_token;


    // the values of a single column Pluck Method
    // $titles = DB::connection('testing')->table('users')->pluck('email','name');
    // return $titles;
    // foreach($titles as $title)
    // {
    //     echo $title;
    // }

    // foreach($titles as $key => $value)
    // {
    //     echo $value;
    // }

    // DB::connection('testing')->table('users')->orderby('name')->chunk(1,function($users){
    //     foreach($users as $user)
    //     {

    //         echo $user->id;
    //         echo "<br>";
    //         // return false;
    //     }
    // });


    // DB::connection('testing')->table('users')->where('remember_token',false)
    //                         ->chunkById(3,function($users){
    //                             foreach($users as $user)
    //                             {
    //                                 DB::connection('testing')->table('users')
    //                                                             ->where('id',$user->id)
    //                                                             ->update(['remember_token'=>true]);
    //                             }
    //                         });


    // return DB::connection('testing')->table('order')->min('price');
    // return DB::connection('testing')->table('order')->max('price');
    // return DB::connection('testing')->table('order')->count('price');
    // return DB::connection('testing')->table('order')->avg('price');


    // $users = DB::connection('testing')->table('users')->select('name','email')->get();
    // return $users; 

    // return DB::connection('testing')->table('users')->distinct()->get();

    // $query =  DB::connection('testing')->table('users')->select('name');

    // $users = $query->addSelect('email')->get();

    // return $users;

    // return DB::connection('testing')->table('order')->select(DB::raw('count(*) as user_count,price'))
    //                                 ->where('price','>','2300') 
    //                                 ->groupby('transaction_num')
    //                                 ->get();

    // return DB::connection('testing')->table('order')->selectRaw('price * ? as price_with_tax',[10])->get();

    // return DB::connection('testing')->table('order')
    //                             ->whereRaw('price > if(transaction_num = "yash",?,2650)',[200])
    //                             ->get();

    // return DB::connection('testing')->table('order')
    //                     ->select('transaction_num',DB::raw('SUM(price) as total'))
    //                     ->groupby('transaction_num')
    //                     ->havingRaw('SUM(price) > ?',[9000])
    //                     ->get();

    // return DB::connection('testing')->table('order')
    //     ->orderByRaw('transaction_num ASC')
    //     ->get();

    // return DB::connection('testing')->table('order')
    //                         ->select('transaction_num')
    //                         ->groupByRaw('transaction_num')
    //                         ->get();

    // DB::connection('testing')->table('users')
    //                             ->leftjoin('contacts','users.id','=','contacts.user_id')
    //                             ->get();

    // DB::connection('testing')->table('users')
    //                         ->rightjoin('orders','users.id','=','orders.user_id')
    //                         ->get();


    // DB::connection('testing')->table('users')
    //                             ->crossjoin('colors')
    //                             ->get();

    // DB::connection('testing')->table('users')
    //                         ->join('contacts',function($join){
    //                             $join->on('users.id','=','contacts.user_id')->orOn('users.id','=','orders.user_id');

    //                         })
    //                         get();

    //join with where clause
    // DB::connection('testing')->table('users')
    //                             ->join('contacts',function($join){
    //                                 $join->on('users.id','=','contacts.user_id')
    //                                 ->where('contacts.user_id','>','5');
    //                             })
    //                             get();

    // $lastestpost =  DB::connection('testing')->table('contact')
    //                             ->select('user_id',DB::raw('MAX(created_at) as last_pos_create'))
    //                             ->where('is_active',true)
    //                             ->groupby('user_id');

    // $users = DB::table('users')
    // ->joinSub($latestPosts, 'latest_posts', function ($join) {
    //     $join->on('users.id', '=', 'latest_posts.user_id');
    // })->get();

    // exit("hi");

    // $users = DB::connection('testing')->table('users')
    //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
    //     ->join('orders', 'users.id', '=', 'orders.user_id')
    //     ->select('users.name', 'contacts.phone', 'orders.price')
    //     ->get();

    //     print_r($users);

    // $users =  DB::connection('testing')->table('users')
    //                             ->leftjoin('orders','users.id','=','orders.user_id')
    //                             ->select('users.name','orders.price')
    //                             ->get();

    //                             print_r($users);


    // $users = DB::connection('testing')->table('users')
    //   ->Join('contacts', 'users.id', '=', 'contacts.user_id')
    //   ->select('users.name','contacts.phone')
    //   ->get();

    // print_r($users);

    // $users = DB::connection('testing')->table('users')
    //   ->crossJoin('orders')
    //   ->get();

    // $users = DB::connection('testing')->table('users')
    //                                   ->orderBy('name','desc')
    //                                   ->select('name')
    //                                   ->get();

    // $users = DB::connection('testing')->table('users')
    //                                     ->orderBy('name','asc')
    //                                     ->orderBy('email','desc')
    //                                     ->select('name','email')
    //                                     ->get();

    // $users = DB::connection('testing')->table('users')->latest()->first();

    // $users = DB::connection('testing')->table('users')->oldest()->first();

    // $users = DB::connection('testing')->table('users')->inRandomOrder()->first();

    // $orderuser = DB::connection('testing')->table('users')->orderby('name')->select('name');

    // $unorderedUsers = $orderuser->reorder()->get();


    // $users = DB::connection('testing')->table('orders')
    //                                   ->groupBy('user_id')
    //                                   ->having('user_id','>','2')
    //                                   ->get();

    //skip first and second take

    // $users = DB::connection('testing')->table('users')->skip(1)->take(3)->get();
    // print_r($users);exit;

    // $users = DB::connection('testing')->table('users')->offset(2)->limit(2)->get();

    // $affected = DB::connection('testing')->table('users')
    //                                       ->where('id',1)
    //                                       ->update(['options->enabled' => true]);

    // $users = DB::connection('testing')->table('users')->increment('name',3);

    // $users = DB::connection('testing')->table('users')->decrement('name',3);

    $users = DB::connection('testing')->table('users')->where('name', '>', '7')
      ->sharedLock()
      ->get();

    print_r($users);
  }
}
