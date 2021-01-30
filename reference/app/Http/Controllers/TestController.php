<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function qbuilder(){
        DB::enableQueryLog();
//        $users = DB::table('users')->where([
//            ['name','like','j%'],
//            ['name','like','j%'],
//            ['remember_token','!=',NULL],
//        ])->get();
        $users = DB::table('users')
            ->select(DB::raw('sum(salary) as total_salary, designation'))
            ->groupBy('designation')
            ->get();
//        dd(DB::getQueryLog());
                dd($users);
        foreach ($users as $user) {
            echo $user->name;
        }
    }
}
