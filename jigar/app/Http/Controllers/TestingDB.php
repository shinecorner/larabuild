<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use DB;
use App\Models\Flight;
use App\Models\User;
use App\Models\Post;
use App\Models\Phone;
use App\Models\Comment;
use App\Models\Role;
use App\Models\Image;
use App\Models\Video;
use App\Models\Tag;
use App\Models\Contact;
use App\Models\Color;
use App\Models\ActivityFeed;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class TestingDB extends Controller
{
    //
    public function __invoke()
    {
        return "directly wihtout actin namer";
    }

    public function __construct()
    {
//        $this->middleware(function ($request, $next) {
//            exit("come here");
////            return $next($request);
//        });

//        $this->middleware('chk');
//        $this->middleware('chk')->only('qbuilder');
//                $this->middleware('chk')->except('qbuilder');
    }

    public function qbuilder()
    {
        return "this is redirect";

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

        // $users = DB::connection('testing')->table('users')->where('name', '>', '7')
        //   ->sharedLock()
        //   ->get();

        // $users = DB::connection('testing')->table('users')->where(function ($query)
        // {
        //   $query->select('name')->from('orders')->whereColumn('orders.user_id','users.id')
        //           ->orderByDesc('orders.created_at')->limit(1);
        // }, 'Pro')->get();


        // $orders = DB::connection('testing')->table('users')->where('price ','<',function ($query){
        //   $query->selectRaw('avg(price)')->from('orders');
        // })->get();


        // print_r($orders);


        // $users = DB::connection('testing')->table('orders')
        //   ->groupBy('user_id')
        //   ->having('user_id', '>', '1')
        //   ->get();

        // $array = [
        //   ['name' => 'Phillips Lamp',  'price' => 150],
        //   ['name' => 'Nova lamp', 'price' => 90],
        //   ['name' => 'Samsung lamp', 'price' => 70]
        // ];
        // echo json_encode($array);
        // exit;

        // $orders = DB::connection('testing')->table('orders')->where('detail->name', 'Phillips Lamp')->get();
        // dd($orders);
        // $orders = DB::connection('testing')->table('orders')
        //   ->whereJsonContains('detail', ['name' => 'Phillips Lamp'])
        //   ->get();

        //   // dd($orders);
        //   print_r($orders);exit;

        // $users =  DB::connection('testing')->table('orders')->whereRaw('price > IF(state = "maharastra",?,1000)',[700])->get();
        // print_r($users);
        // $sizes = DB::connection('testing')->table('size')->crossjoin('color')->get();
        // dd($sizes);

        // $users = DB::connection('testing')->table('users')
        //       ->join('contacts', function ($join) {
        //           $join->on('users.id', '=', 'contacts.user_id')
        //                ->where('contacts.user_id', '>', 3);
        //       })
        //       ->get();
        // print_r($users);

        // $latestPosts = DB::connection('testing')->table('posts')
        //   ->select('user_id', DB::raw('MAX(created_at) as last_post_created_at'))
        //   ->groupBy('user_id');

        // $users = DB::connection('testing')->table('users')
        //   ->joinSub($latestPosts, 'latest_posts', function ($join) {
        //     $join->on('users.id', '=', 'latest_posts.user_id');
        //   })->get();

        // $users = DB::connection('testing')->table('orders')
        //             ->where('price', '>=', 600)
        //             ->where('finalized', true)
        //             ->get();

        // dd($users);


        //   foreach (Flight::all() as $flight) {
        //     echo $flight->number;
        // }

        // $flights = Flight::where('active', 1)
        //              ->orderBy('name')
        //              ->take(2)
        //              ->get();

        //              foreach($flights as $flight)
        //              {
        //                echo $flight->name;
        //                echo "<br>";
        //              }
        // print_r($flights);

        // $flights = Flight::where('number',20)->first();
        // $freshFlight = $flights->fresh();

        // print_r($freshFlight);


        // $flights = Flight::where('destination','Mumbai')->get();

        // $flights = $flights->reject(function ($flight) {
        //   return $flight->cancelled;
        // });

        // Flight::chunk(3,function($flights){
        //   foreach($flights as $flight){
        //     echo $flight->name;
        //     echo  "<br>";
        //   }
        // });


        // Flight::where('departed', true)
        // ->chunkById(2, function ($flights) {
        //     $flights->each->update(['departed' => false]);
        // }, $column = 'id');

        // while only loading a single model into memory at a time

        // foreach(Flight::where('destination','Mumbai')->cursor() as $flight)
        // {
        //   echo $flight;
        //   echo "<br>";
        // }


        //     $users = Flight::cursor()->filter(function ($user) {
        //       return $user->id > 1;


        //   });
        //   foreach ($users as $user) {
        //     echo $user->id;
        //     echo "<br>";
        // }


        // return Flight::addSelect(['last_flight' => Flight::select('name')
        //     ->whereColumn('name')
        //     ->orderByDesc('arrived_at')
        //     ->limit(1)
        // ])->get();

        // return Destination::orderByDesc(
        //   Flight::select('arrived_at')
        //       ->whereColumn('destination_id', 'destinations.id')
        //       ->orderByDesc('arrived_at')
        //       ->limit(1)
        // )->get();

        // $flight = Flight::findOrFail(4);

        // $flight = Flight::where('active', 0)->first();

        // $flight = Flight::firstWhere('active', 1);

        // $flight = Flight::firstOrCreate([
        //   'name' => 'dubai'
        // ]);

        // $flight = Flight::firstOrNew([
        //   'name' => 'London to Paris'
        // ]);


        // $count = Flight::where('active', 1)->count();
        // print_r($count);

        // $max = Flight::where('active', 1)->max('price');

        // print_r($max);


        // we call the save method, a record will be inserted into the database
        // $flight = new Flight;

        // $flight->name = $request->name;

        // $flight->save();


        // $flight = Flight::find(1);

        // $flight->name = 'Paris in Europe';

        // $flight->save();


        // Flight::where('active', 1)

        //   ->update(['departed' => 0]);

        // $flight = Flight::find(1);

        // $flight->name;
        // $flight->number;

        // $flight->name = "jigar";
        // $flight->name; // jigar


        // $flight->getOriginal('name');
        // $flight->getOriginal();

        // $flight = Flight::create(['name' => 'London to Paris']);

        // $flight->fill(['name' => 'Amsterdam to Frankfurt']);

        //   Flight::upsert([
        //     ['departure' => 'Ahmedabad', 'destination' => 'Mumbai', 'price' => 2500],
        // ], ['departure', 'destination'], ['price']);


        // $flight = Flight::find(1);
        // $flight->delete();
        // print_r($flight);

        // Flight::destroy(11);

        // Flight::destroy(collect([3, 4, 10]));


        // $deletedRows = Flight::where('active', 1)->delete();
        // $deletedRows = Flight::where(id, $id)->delete();

        // $flight->restore();

        // $flight->history()->restore();

        // $flight->history()->forceDelete();

        // $flight->history()->withTrashed()->get();

        // $flights = Flight::onlyTrashed()
        //           ->where('airline_id', 1)
        //           ->get();

        // print_r($flights);


        // $shipping = Address::create([
        //   'type' => 'shipping',
        //   'line_1' => '123 Example Street',
        //   'city' => 'Victorville',
        //   'state' => 'CA',
        //   'postcode' => '90001',
        // ]);

        // $billing = $shipping->replicating()->fill([
        //   'type' => 'billing'
        // ]);

        // $billing->save();

        // public function apply(Builder $builder, Model $model)
        // {
        //     $builder->where('created_at','<',now()->subYear(2000));
        // }


        // print_r($deletedRows);

        // exit('hello');
    }

    public function eloquent(Request $request)
    {
        // exit('hello');
        // Flight::chunk(2, function ($flights) {
        //   dd($flights);
        // });


    }

    public function relation()
    {
        // $user = User::find(2);
        // return $user->phone();

        // $phone = Phone::find(3);
        // return $phone->user;


        // return $post->comments();

        // $post = Post::find(1);
        // foreach($post->comments as $comment)
        // {
        //   echo $comment->brief;
        // }

        // $comment = Comment::find(2);
        // return $comment->post->discription;

        // $user = User::find(1);
        // return $user->roles;

        //  $roles = User::find(2)->roles()->orderBy('role_name')->get();
        //   return $roles;

        // $role = Role::find(1);
        // return $role->users;


        //morph


        // $post = Post::find(1);
        // $image = $post->image;
        // return $image;

        // $image = Image::find(1);

        // $imageable = $image->imageable;


        // $image = Image::find(1);
        // $imageable = $image->imageable;
        // return $imageable;

        // $post = Post::find(1);

        // foreach ($post->comments as $comment) {
        //   echo $comment->brief;
        // }

        // $comment = Comment::find(1);
        // $commentable = $comment->commentable;
        // echo $commentable->title;


        // $post = Post::find(1);
        // foreach ($post->tags as $tag) {
        //   echo $tag->name;
        //   echo '<br>';
        // ?

        // $user = User::find(1);
        // return $user->posts()->where('active', 1)->get();

        // return User::find(1)->posts()
        //     ->where('active', 1)
        //     ->orWhere('votes', '>=', 100)
        //     ->get();

        // return User::find(4)->posts()
        //   ->where(function (Builder $query) {
        //     return $query->where('active', 1)
        //       ->orWhere('votes', '>=', 100);
        //   })
        //   ->get();

        // return $posts = Post::has('comments')->get();

        // return $posts = Post::has('comments', '>=', 1)->get();

        // return $posts = Post::has('comments.image')->get();


        // return Post::whereHas('comments', function (Builder $query) {
        //   $query->where('brief', 'like', 'y%');
        // })->get();

        // return $posts = Post::whereHas('comments', function (Builder $query) {
        //   $query->where('brief', 'like', 'y%');
        // }, '>=', 2)->get();

        // return $posts = Post::doesntHave('comments')->get();

        //   return $posts = Post::whereHas('comments', function (Builder $query) {
        //     $query->where('brief', 'like','y%');
        // })->get();


        // return $comments = Comment::whereHasMorph(
        //                  'commentable',
        //                  [Post::class, Video::class],
        //                  function (Builder $query) {
        //                      $query->where('title', 'like', 'php%');
        //                  }
        //              )->get();


        // return $comments = Comment::whereHasMorph(
        //   'commentable',
        //   [Post::class, Video::class],
        //   function (Builder $query, $type) {
        //     $column = $type === Post::class ? 'discription' : 'title';
        //     $query->where($column, 'like', 'l%');
        //   }
        // )->get();


        // return $comments = Comment::whereHasMorph('commentable', '*', function (Builder $query) {
        //   $query->where('title', 'like', 'p%');
        // })->get();

        // $posts = Post::withCount('comments')->get();
        // foreach ($posts as $post) {
        //   echo $post->comments_count;
        // }

        // return $posts = Post::withCount(['comments' => function (Builder $query) {
        //   $query->where('brief', 'like', 'y%');
        // }])->get();

        // return $posts = Post::withCount([
        //   'comments',
        //   'comments as pending_comments_count' => function (Builder $query) {
        //     $query->where('approved', false);
        //   },
        // ])->get();

        // $post = Post::find(4);
        // return $post->loadCount(['comments' => function ($query) {
        //   $query->where('approved', '=', 1);
        // }]);


        // return $posts = Post::withAvg('comments', 'votes')->get();

        // $post = Post::find(4);
        // return $post->loadSum('comments', 'votes');

        // return $activities = ActivityFeed::with([
        //   'parentable' => function (MorphTo $morphTo) {
        //     $morphTo->morphWithCount([
        //       Post::class => ['comments'],
        //       Video::class => ['tags'],
        //     ]);
        //   }
        // ])->get();

        // $activities = ActivityFeed::with('parentable')->get();
        // return $activities->loadMorphCount('parentable', [
        //   Video::class => ['tags'],
        //   Post::class => ['comments'],
        // ]);


        // $users = User::all();

        // foreach ($users as $user) {
        //   dump($user->roles);
        // }


        // return Contact::with('user.roles')->get();


        //  return $activities = ActivityFeed::query()
        //   ->with(['parentable' => function (MorphTo $morphTo) {
        //     $morphTo->morphWith([
        //       Video::class => ['tags'],
        //       Post::class => ['comments'],
        //     ]);
        //   }])->get();

        // return User::with('phone:id,user_id,number')->get();

        // return User::without('phone')->find(1);

        // return $users = User::with(['roles' => function ($query) {
        //   $query->whereIn('role_name', ['editor', 'content writer']);
        // }])->get();

        // $comment = new Comment(['brief' => 'Command is working']);
        // $post = Post::find(4);
        // $post->comments()->save($comment);

        // $post = Post::find(2);
        // $post->comments()->saveMany([
        //   new Comment(['brief' => 'A new comment.']),
        //   new Comment(['brief' => 'Another new comment.']),
        // ]);


        // $user = User::with('posts')->where('id', 3)->first();
        // $user->posts()->saveMany([
        //   new Post(['title' => 'Bird nest', 'discription' => 'Various types of bird nests']),
        //   new Post(['title' => 'Authors', 'discription' => 'Authors of Italy']),
        // ]);

        // $user->refresh();
        // return $user->posts;


        // $user = User::find(4);
        // $user->name = "ALia Bhatt";
        // $user->posts[0]->title = 'Trump has left whitehouse';
        // $user->posts[0]->comments[0]->brief = 'Biden take charge';
        // $user->push();

        // $post = Post::find(4);
        // $post->user()->associate(User::find(4));
        // $post->save();

        // $user = User::find(1);
        // $user->roles()->attach(2);
        // $user->roles()->attach(2, ['priority' => 2]);


        // $user = User::find(1);
        // $user->roles()->detach();

        // $user = User::find(1);
        // $user->roles()->attach([
        //   2 => ['priority' => 4],
        //   3 => ['priority' => 5],
        // ]);

        // $user = User::find(1);
        // $user->roles()->sync([1, 3]);

        // $user = User::find(1);
        // $user->roles()->sync([2 => ['priority' => 5], 1]);

        // $user = User::find(1);
        // $user->roles()->syncWithoutDetaching([3]);

        // $user = User::find(1);
        // $user->roles()->updateExistingPivot(2, [
        //   'priority' => 2,
        // ]);


        // $post = Post::find(8);
        // $post->title = "Ind vs Aus";
        // $post->save();

        // $post = Post::find(8);
        // $post->discription = "Author of germany";
        // $post->save();

        // return redirect('qbuilder');


    }

    public function gm(Request $request, $id, $message = "Are you OK?")
    {

        return "Hello User " . $id . " " . $message;
    }

    public function profile(Request $request, $username, $message = "Are you fine?")
    {
        return "Awesome " . $username . " " . $message;
    }

    public function messageMe(Request $request)
    {
        //        return redirect("gm/56/message/How-are-you");
        if ($request->route()->named('msg')) {
            return "correct";
        } else {
            return "Incorrect";
        }
        return redirect()->route('gm', ['id' => 56, 'message' => 'How the development works going on?']);
    }

    public function checkDI(Request $request, Color $color)
    {
        dd($color);
//      return "hello";

        // pass in attributes , original

    }

    public function checkReq(Request $request, $id, Property $property)
    {
//        echo $request->path();
//      echo $request->url();
//      echo $request->fullUrl();

//      dd($value = $request->header('X-Language');

//      dd($value = $request->header('X-Personname', 'jigar'));
//      dd($token = $request->bearerToken());


//      dd($request->getAcceptableContentTypes());

//      if ($request->accepts(['text/html', 'application/json'])) {
//            dd("true");
//        }
//      dd($preferred = $request->prefers(['text/html', 'application/json']));
//      if ($request->expectsJson()) {
//            dd("true");
//        }
//      dd($request->query('name', 'dragon'));  //like get method
//      dd($ipAddress = $request->ip());
//      dd($request->input('name'));
//      dd($name = $request->input('products.1.name'));
//      dd($name = $request->input('products.*.name'));


//      dd($request->boolean('is_active'));
//      dd($request->name);
//      dd($input = $request->except(["is_agree"]));
//      if ($request->has('name')) {
//            exit("Yes");
//        }

//      $prefix = 'AP-';
//        $name = $request->whenHas('name', function ($input) use($prefix){
//            return $prefix . $input;
//        });
//        echo $name;

//      if ($request->hasAny(['name', 'email'])) {
//          exit('here');
//      }

//        if ($request->filled('is_agree')) {
//            exit("Filled");
//        }

//        $prefix = 'AP-';
//        $name = $request->whenFilled('name', function ($input) use ($prefix) {
//            return $prefix . $input;
//        });
//        echo $name;

//        if($request->missing('surname')){
//            exit('surname is missing');
//        }


    }

    public function jsonReq(Request $request)
    {
        dd($request->input('user.name'));
    }

    public function setCookie(Request $request)
    {
        return response('Hello World')->cookie(
            'name', 'bhuva', 3
        );
    }

    public function getCookie(Request $request)
    {
        return $request->cookie('name');
    }

}




// php artisan migrate:rollback --step=5
// roll back the last five migrations:

// oll back all of your application's migrations:
// php artisan migrate:reset


// The migrate:refresh command will roll back all of your migrations and then execute the migrate command. This command effectively re-creates your entire database:
// php artisan migrate:refresh


// The migrate:fresh command will drop all tables from the database and then execute the migrate command:
// php artisan migrate:fresh


// You may check for the existence of a table or column using the hasTable and hasColumn methods:
// database table, use the rename method:
// Schema::rename($from, $to);

// The bigIncrements method creates an auto-incrementing UNSIGNED BIGINT (primary key) equivalent column:
// $table->bigIncrements('id');
