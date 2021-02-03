<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function qbuilder(){

        DB::enableQueryLog();
        //        $array = [
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
        dd(DB::getQueryLog());
    }

}
