<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Testingdb extends Controller
{
    public function qbuilder(){
        $users = DB::connection('testing')
//            ->table('users')->get();

//            ->table('users')->where('name','snehal')->get();
//        $users = DB::table('users')->get();

//        foreach ($users as $user) {
//            echo $user->name;
//        }

//            ->table('users')->where('name','snehal')->first();
//        dd($users);
//    $users = DB::connection('testing')->pluck('name');

            ->orderBy('id')->chunk(1, function ($users)
//        {
//            return false;
//        });
//
//        $sortByVotes = $request->input('sort_by_votes');
//
//    $users = DB::table('users')
//    ->when($sortByVotes, function ($query, $sortByVotes) {
//        return $query->orderBy('votes');
//    }, function ($query) {
//        return $query->orderBy('name');
//    })
//    ->get();
//
//
//            ->where('votes', '>', 100)
//            ->sharedLock()
//            ->get();

//        ->skip(10)->take(5)->get();


//            ->offset(10)
//            ->limit(5)
//            ->get();

        $role = $request->input('role');

        $users = DB::connection('testing')
    ->when($role, function ($query, $role) {
        return $query->where('role_id', $role);
    })
    ->get();
        dd($users);
    }
}
