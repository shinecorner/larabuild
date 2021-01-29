<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Customer extends Controller
{
    public function list(Request $request){
//        exit("abc");
        $customers = DB::table('customer')->get();
        return view('customer.list',['records' => $customers]);
    }
}
