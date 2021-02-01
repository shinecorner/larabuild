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
//                ->table('users')
//            ->orderBy('id')->chunk(1);
//        {
//            return false;
//        });

//        $users = DB::connection('testing')
//        ->DB::table('users')->where('active', false)
//    ->chunkById(2, function ($users) {
//        foreach ($users as $user) {
//            DB::table('users')
//                ->where('id', $user->id)
//                ->update(['active' => true]);
//        }
//    });

         $users = DB::connection('testing')

//             -> DB::table('users')->count();//
//$price = DB::table('orders')->max('price');

//    ->DB::table('orders')
//            ->where('finalized', 1)
//            ->avg('price');

//       ->DB::table('users')
//            ->select('name', 'email as user_email')
//            ->get();

//        ->DB::table('users')->distinct()->get();

//        ->DB::table('users')->select('name');
//
//        $users = $query->addSelect('age')->get();


//        ->DB::table('users')
//             ->select(DB::raw('count(*) as user_count, status'))
//             ->where('status', '<>', 1)
//             ->groupBy('status')
//             ->get();

//         ->DB::table('orders')
//            ->selectRaw('price * ? as price_with_tax', [1.0825])
//            ->get();

//         ->DB::table('orders')
//             ->whereRaw('price > IF(state = "TX", ?, 123)', [200])
//             ->get();

//         ->DB::table('orders')
//            ->select('department', DB::raw('SUM(price) as total_sales'))
//            ->groupBy('department')
//            ->havingRaw('SUM(price) > ?', [2500])
//            ->get();

//         ->DB::table('orders')
//             ->orderByRaw('updated_at - created_at DESC')
//             ->get();

//        ->DB::table('orders')
//             ->select('city', 'state')
//             ->groupByRaw('city, state')
//             ->get();

//        ->DB::table('users')
//             ->join('contacts', 'users.id', '=', 'contacts.user_id')
//             ->join('orders', 'users.id', '=', 'orders.user_id')
//             ->select('users.*', 'contacts.phone', 'orders.price')
//             ->get();

//        ->DB::table('users')
//             ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
//             ->get();

//        ->DB::table('users')
//             ->rightJoin('posts', 'users.id', '=', 'posts.user_id')
//             ->get();

//        ->DB::table('sizes')
//             ->crossJoin('colors')
//             ->get();

//        ->DB::table('users')
//             ->join('contacts', function ($join) {
//                 $join->on('users.id', '=', 'contacts.user_id')->orOn(...);
//             })
//             ->get();

//        ->DB::table('users')
//             ->join('contacts', function ($join) {
//                 $join->on('users.id', '=', 'contacts.user_id')
//                     ->where('contacts.user_id', '>', 5);
//             })
//             ->get();

//        ->DB::table('users')
//             ->whereNull('first_name');

//        ->DB::table('users')
//             ->whereNull('last_name')
//             ->union($first)
//             ->get();

//        ->DB::table('users')
//             ->where('votes', '=', 123)
//             ->where('age', '>', 21)
//             ->get();

//        ->DB::table('users')->where('votes', 123)->get();

//        ->DB::table('users')
//             ->where('votes', '>=', 123)
//             ->get();

//        ->DB::table('users')
//            ->where('votes', '<>', 123)
//            ->get();

//        ->DB::table('users')
//            ->where('name', 'like', 'T%')
//            ->get();

//        ->DB::table('users')->where([
//                 ['status', '=', '1'],
//                 ['subscribed', '<>', '1'],
//             ])->get();

//        ->DB::table('users')
//             ->where('votes', '>', 100)
//             ->orWhere('name', 'John')
//             ->get();

//        ->DB::table('users')
//             ->where('votes', '>', 100)
//             ->orWhere(function($query) {
//                 $query->where('name', 'Abigail')
//                     ->where('votes', '>', 50);
//             })
//             ->get();

//      ->DB::table('users')
//                ->where('preferences->dining->meal', 'salad')
//                ->get();

//        ->DB::table('users')
//             ->whereJsonContains('options->languages', 'en')
//             ->get();

//        ->DB::table('users')
//             ->whereJsonContains('options->languages', ['en', 'de'])
//             ->get();

//        -> DB::table('users')
//             ->whereJsonLength('options->languages', 0)
//             ->get();

//        -> DB::table('users')
//            ->whereJsonLength('options->languages', '>', 1)
//            ->get();

//        ->DB::table('users')
//            ->whereBetween('votes', [1, 100])
//            ->get();

//        ->DB::table('users')
//             ->whereNotBetween('votes', [1, 100])
//             ->get();

//        ->DB::table('users')
//             ->whereIn('id', [1, 2, 3])
//             ->get();

//        ->DB::table('users')
//             ->whereNotIn('id', [1, 2, 3])
//             ->get();

//        ->DB::table('users')
//             ->whereNull('updated_at')
//             ->get();

//        ->DB::table('users')
//             ->whereNotNull('updated_at')
//             ->get();

//        ->DB::table('users')
//            ->whereDate('created_at', '2016-12-31')
//            ->get();

//        ->DB::table('users')
//             ->whereMonth('created_at', '12')
//             ->get();

//        ->DB::table('users')
//            ->whereDay('created_at', '31')
//            ->get();

//        ->DB::table('users')
//             ->whereYear('created_at', '2016')
//             ->get();

//        ->DB::table('users')
//             ->whereTime('created_at', '=', '11:20:45')
//             ->get();

//        ->DB::table('users')
//            ->whereColumn('first_name', 'last_name')
//            ->get();

//        ->DB::table('users')
//             ->whereColumn('updated_at', '>', 'created_at')
//             ->get();

//        ->DB::table('users')
//             ->whereColumn([
//                 ['first_name', '=', 'last_name'],
//                 ['updated_at', '>', 'created_at'],
//             ])->get();

//        ->DB::table('users')
//             ->where('name', '=', 'John')
//             ->where(function ($query) {
//                 $query->where('votes', '>', 100)
//                     ->orWhere('title', '=', 'Admin');
//             })
//             ->get();
//                 above quary meaing
//        select * from users where name = 'John' and (votes > 100 or title = 'Admin')

//        ->DB::table('users')
//             ->whereExists(function ($query) {
//                 $query->select(DB::raw(1))
//                     ->from('orders')
//                     ->whereColumn('orders.user_id', 'users.id');
//             })
//             ->get();

//        ->DB::table('users')
//                ->orderBy('name', 'desc')
//                ->get();

//        ->DB::table('users')
//             ->orderBy('name', 'desc')
//             ->orderBy('email', 'asc')
//             ->get();

//        ->DB::table('users')
//                ->latest()
//                ->first();

//        ->DB::table('users')
//                ->inRandomOrder()
//                ->first();

//        ->DB::table('users')->orderBy('name');
//          $unorderedUsers = $users->reorder()->get();

//        ->DB::table('users')->orderBy('name');
//        $usersOrderedByEmail = $users->reorder('email', 'desc')->get();

//        ->DB::table('users')
//             ->groupBy('account_id')
//             ->having('account_id', '>', 100)
//             ->get();

//        ->DB::table('users')
//             ->groupBy('first_name', 'status')
//             ->having('account_id', '>', 100)
//             ->get();

//        ->DB::table('users')->skip(10)->take(5)->get();

//        ->DB::table('users')
//             ->offset(10)
//             ->limit(5)
//             ->get();
//        -> $request->input('role');
//
//        $users = DB::table('users')
//            ->when($role, function ($query, $role) {
//                return $query->where('role_id', $role);
//            })
//            ->get();

//        $sortByVotes = $request->input('sort_by_votes');
//
//    $users = DB::table('users')
//    ->when($sortByVotes, function ($query, $sortByVotes) {
//        return $query->orderBy('votes');
//    }, function ($query) {
//        return $query->orderBy('name');
//    })
//    ->get();

//        ->DB::table('users')->insert([
//                 'email' => 'kayla@example.com',
//                 'votes' => 0
//             ]);

//        ->DB::table('users')->insert([
//                 ['email' => 'picard@example.com', 'votes' => 0],
//                 ['email' => 'janeway@example.com', 'votes' => 0],
//             ]);

//        ->DB::table('users')->insertOrIgnore([
//                 ['id' => 1, 'email' => 'sisko@example.com'],
//                 ['id' => 2, 'email' => 'archer@example.com'],
//             ]);

//        ->DB::table('users')->insertGetId(
//             ['email' => 'snehal@gmail.com', 'votes' => 0]
//         );

//        ->DB::table('flights')->upsert([
//                 ['departure' => 'Oakland', 'destination' => 'San Diego', 'price' => 99],
//                 ['departure' => 'Chicago', 'destination' => 'New York', 'price' => 150]
//             ], ['departure', 'destination'], ['price']);

//        ->DB::table('users')
//             ->where('id', 1)
//             ->update(['votes' => 1]);

//        ->DB::table('users')
//             ->updateOrInsert(
//                 ['email' => 'john@example.com', 'name' => 'John'],
//                 ['votes' => '2']
//             );

//        ->DB::table('users')
//             ->where('id', 1)
//             ->update(['options->enabled' => true]);

//        ->DB::table('users')->delete();
//
//        ->DB::table('users')->where('votes', '>', 100)->delete();

//        ->DB::table('users')->increment('votes');
//
//        ->DB::table('users')->increment('votes', 5);
//
//        ->DB::table('users')->decrement('votes');
//
//        ->DB::table('users')->decrement('votes', 5);

//        ->DB::table('users')->increment('votes', 1, ['name' => 'snehal']);

//        ->DB::table('users')
//             ->where('votes', '>', 100)
//             ->sharedLock()
//             ->get();

//        ->DB::table('users')
//             ->where('votes', '>', 100)
//             ->lockForUpdate()
//             ->get();

//        ->DB::table('users')->where('votes', '>', 100)->dd();

//        ->DB::table('users')->where('votes', '>', 100)->dump();

        dd($users);
    }
}
