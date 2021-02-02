<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function qbuilder(){
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

        $orders = DB::table('orders')
            ->whereJsonContains('detail', ['name' => 'Nova lamp'])
            ->get();

//        dd(DB::getQueryLog());
        dd($orders);
    }
}
