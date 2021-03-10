<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Role;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Destination;
use App\Models\Flight;
use App\Models\User;
use App\Models\Post;
use App\Models\Phone;
use App\Models\ActivityFeed;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Builder;
//use Illuminate\Database\Query\Builder as QBuilder;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Cookie;

class TestController extends Controller
{
    public function __invoke(){
        return "Invoke directly without action name";
    }
    public function __construct()
    {
//        $this->middleware(function ($request, $next) {
//            exit("come here");
////            return $next($request);
//        })->only('relation');
//        $this->middleware('chk:superadmin,delete');
//        $this->middleware('chk');
//        $this->middleware('chk')->only('relation');
    }
    public function qbuilder(Request $request){

        return "this is qbuilder";
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
        DB::enableQueryLog();
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

        // Flight::chunk(2, function ($flights) {
        //         dump($flights);
        //         // foreach ($flights as $flight) {
        //         //     //
        //         // }
        // });

        // Flight::where('departed', true)
        // ->chunkById(200, function ($flights) {
        //     $flights->each->update(['departed' => false]);
        // }, $column = 'id');

        // foreach (Flight::whereIn('destination', ['Elfriedaborough', 'Lake Mario', 'Rajkot'])->cursor() as $flight) {
        //         echo $flight->number;
        //         echo '<br>';
        // }

        // $destinations = Destination::addSelect(['last_flight' => Flight::select('name')
        //         ->whereColumn('destination_id', 'destinations.id')
        //         ->orderByDesc('arrived_at')
        //         ->limit(1)
        //         ])->get();
        //         // ($destinations);
        //         dd(DB::getQueryLog());

        // Destination::orderByDesc(
        //         Flight::select('arrived_at')
        //             ->whereColumn('destination_id', 'destinations.id')
        //             ->orderByDesc('arrived_at')
        //             ->limit(1)
        //     )->get();
        // dd(DB::getQueryLog());

        // $model = Flight::where('number', '>', 100000)->firstOr(function () {
        //         throw new \Exception('Jigar customise message');
        //     });
        //  dd($model);

                // $flight = Flight::where('number', '>', 100000)->firstOrFail();
        }
        public function relation(){
        dd("controller");
//            $user = User::find(3);
//            return $user->phone;

//            $phone = Phone::find(1);
//            return $phone->user;

//            $post = Post::find(7);
//            return $post->comments;
//            foreach($post->comments as $comment){
//                echo $comment->brief;
//            }
//            $comment = Comment::find(2);
//            return $comment->post;
//            $post = Post::find(6);
//            return $post->user->designation;

//            $user = User::find(4);
//            return $user->roles;

//            return $roles = User::find(4)->roles()->orderBy('role_name')->get();
//            $role = Role::find(3);
//            return $role->users;
//            $user = User::find(4);
//            return $user->roles;
//            foreach ($user->roles as $role) {
//                echo $role->pivot->created_at;
//            }
//            $post = Post::find(6);
//            $alias = $post->getMorphClass();
//            $class = Relation::getMorphedModel($alias);
//            echo $class;
//            $image = $post->image;
//            echo $image->url;

//            $post = Post::find(6);

//            dd($post->comments);
//            foreach ($post->comments as $comment) {
//                echo $comment->brief;
//            }

//            $comment = Comment::find(1);
//            $obj = $comment->commentable;
//            echo $obj->description;
//
//            $comment = Comment::find(3);
//            $obj = $comment->commentable;
//            echo $obj->title;

//            $post = Video::find(6);
//
//            foreach ($post->tags as $tag) {
//                echo $tag->name;
//                echo '<br>';
//            }
//            $user = User::find(4);
//            return $user->posts()->where('active', 1)->get();

//            $user = User::find(4);
//            return User::find(4)->posts()
//                ->where('active', 1)
//                ->orWhere('votes', '>=', 100)
//                ->get();

//            return User::find(4)->posts()
//                ->where(function (Builder $query) {
//                    return $query->where('active', 1)
//                        ->orWhere('votes', '>=', 100);
//                })
//                ->get();

//            return $posts = Post::has('comments')->get();
//            return $posts = Post::has('comments', '>=', 1)->get();

//            return $posts = Post::has('comments.image')->get();

//            return Post::whereHas('comments', function (Builder $query) {
//                $query->where('brief', 'like', 'India%');
//            })->get();

//            return $posts = Post::whereHas('comments', function (Builder $query) {
//                $query->where('brief', 'like', 'India%');
//            }, '>=', 2)->get();

//            return $posts = Post::doesntHave('comments')->get();

//            return $posts = Post::whereHas('comments', function (Builder $query) {
//                $query->where('brief', 'like','India%');
//            })->get();

//            return $comments = Comment::whereHasMorph(
//                'commentable',
//                [Post::class, Video::class],
//                function (Builder $query) {
//                    $query->where('title', 'like', 'India%');
//                }
//            )->get();

//            return $comments = Comment::whereDoesntHaveMorph(
//                'commentable',
//                Post::class,
//                function (Builder $query) {
//                    $query->where('title', 'like', 'India%');
//                }
//            )->get();

//            return $comments = Comment::whereHasMorph(
//                'commentable',
//                [Post::class, Video::class],
//                function (Builder $query, $type) {
//                    $column = $type === Post::class ? 'description' : 'title';
//
//                    $query->where($column, 'like', 'Trump%');
//                }
//            )->get();

//            $comments = Comment::whereHasMorph('commentable', '*', function (Builder $query) {
//                $query->where('title', 'like', 'foo%');
//            })->get();

//            $posts = Post::withCount('comments')->get();
//
//            foreach ($posts as $post) {
//                echo $post->comments_count;
//            }

//            return $posts = Post::withCount(['comments' => function (Builder $query) {
//                $query->where('brief', 'like', 'India%');
//            }])->get();

//            return $posts = Post::withCount([
//                'comments',
//                'comments as pending_comments_count' => function (Builder $query) {
//                    $query->where('approved', false);
//                },
//            ])->get();

//            $post = Post::find(6);
//            return $post->loadCount('comments');
//            return $post->loadCount(['comments' => function($query){
//                $query->where('approved', '=', 1);
//            }]);

//            return $posts = Post::withAvg('comments', 'votes')->get();
//            $post = Post::find(7);
//
//            return $post->loadSum('comments', 'votes');

//            return $activities = ActivityFeed::with([
//                'parentable' => function (MorphTo $morphTo) {
//                    $morphTo->morphWithCount([
//                        Post::class => ['comments'],
//                        Video::class => ['tags'],
//                    ]);
//                }])->get();

//            $activities = ActivityFeed::with('parentable')->get();
//
//            return $activities->loadMorphCount('parentable', [
//                Video::class => ['tags'],
//                Post::class => ['comments'],
//            ]);

//            $users = User::all();
//
//            foreach($users as $user)
//            {
//                dump($user->roles);
//            }
//            return Contact::with('user.roles')->get();
//            return $activities = ActivityFeed::query()
//                ->with(['parentable' => function (MorphTo $morphTo) {
//                    $morphTo->morphWith([
//                        Video::class => ['tags'],
//                        Post::class => ['comments'],
//                    ]);
//                }])->get();
//            dd($activities);

//            return User::with('phone:id,user_id,number')->get();
//            return User::find(1);
//            return User::without('phone')->find(1);

//            return $users = User::with(['roles' => function ($query) {
////                $query->where('role_name', 'like', '%admin%');
//                $query->whereIn('role_name', ['superadmin','editor']);
//            }])->get();

//            $comment = new Comment(['brief' => 'Command is working']);
//
//            $post = Post::find(10);
//
//            $post->comments()->save($comment);

//            $post = Post::find(10);
//            $post->comments()->saveMany([
//                new Comment(['brief' => 'A new comment.']),
//                new Comment(['brief' => 'Another new comment.']),
//            ]);
//            $user = User::with('posts')->where('id', 3)->first();
//            $user->posts()->saveMany([
//                new Post(['title' => 'Bird nest', 'description' => 'Various types of bird nests']),
//                new Post(['title' => 'Authors', 'description' => 'Authors of Italy']),
//            ]);
//            $user->refresh();
//            return $user->posts;

//            $user = User::find(4);
//
//            $user->name = "Ajay devgan";
//            $user->posts[0]->title = 'Trump has left whitehouse';
//            $user->posts[0]->comments[0]->brief = 'Trump has left whitehouse. Biden take charge';
//
//            $user->push();

//            $post = Post::find(8);
////            $post->user()->associate(User::find(4));
////
////            $post->save();
//            $post->user()->dissociate();
//            $post->save();

//            $user = User::find(1);

//            $user->roles()->attach(2);
//            $user->roles()->attach(2,['priority' => 2]);

//            $user = User::find(1);
//            $user->roles()->detach();

//            $user = User::find(1);
//            $user->roles()->detach([2, 3]);

//            $user->roles()->attach([
//                2 => ['priority' => 4],
//                3 => ['priority' => 5],
//            ]);

//            $user = User::find(1);
//            $user->roles()->sync([1, 2]);

//            $user = User::find(1);
//            $user->roles()->sync([3 => ['priority' => 5], 1]);

//            $user = User::find(1);
//            $user->roles()->syncWithoutDetaching([2]);

//            $user = User::find(1);
//
//            $user->roles()->updateExistingPivot(2, [
//                'priority' => 2,
//            ]);

//            $post = Post::find(7);
//            $post->title = "Ind vs Aus";
//            $post->save();

//            $post = Post::find(14);
//            $post->description = "Author of germany";
//            $post->save();
            dump("kkk");
//            return redirect('qbuilder');
        }
        public function gm(Request $request, $id, $message = "Are you OK?"){
            return "Hello User " . $id . " " . $message;
        }
    public function profile(Request $request, $username, $message = "Are you OK?"){
        return "Hello User " . $username . " " . $message;
    }
    public function messageMe(Request $request){
//        return redirect("gm/56/message/How-are-you");
        if($request->route()->named('msg')){
            return "correct";
        }
        else{
            return "Incorrect";
        }
        return redirect()->route('gm',['id' => 56, 'message' => 'How the development works going on?']);
    }
    public function checkDI(Request $request, Color $color){
        dd($color);
        return "Hello";
    }
    public function checkReq(Request $request, $id){
//        echo $request->path();
//        echo $request->url();
//        echo $request->fullUrl();
//        dd($value = $request->header('X-Language'));
//        dd($value = $request->header('X-Personname', 'jigar'));
//        dd($token = $request->bearerToken());
//        dd($contentTypes = $request->getAcceptableContentTypes());
//        if ($request->accepts(['text/html', 'application/json'])) {
//            exit("true");
//        }
//        dd($preferred = $request->prefers(['text/html', 'application/json']));
//        if ($request->expectsJson()) {
//            dd("true");
//        }
//        dd($request->input('name'));
//        dd($name = $request->input('products.1.name'));
//        dd($name = $request->input('products.*.name'));

//        dd($request->boolean('is_active'));
//        dd($request->name);
//        dd($input = $request->except(["is_agree"]));

//        if ($request->has('name')) {
//            exit("Yes");
//        }

//        $prefix = 'AP-';
//        $name = $request->whenHas('name', function ($input) use($prefix){
//            return $prefix . $input;
//        });
//        echo $name;

//        dd($request->all());
//        if ($request->filled('is_agree')) {
//            exit("Filled");
//        }

//        $prefix = 'AP-';
//        $name = $request->whenFilled('name', function ($input) use($prefix){
//            return $prefix . $input;
//        });
//        echo $name;

//        if ($request->missing('surname')) {
//            exit("yy");
//        }

    }
    public function jsonReq(Request $request){
        dd($request->input('user.name'));
    }
    public function setCookie(Request $request){
        Cookie::queue('laptop', 'HP', 1);
//        Cookie::queue(Cookie::forget('laptop'));
        return response('Hello World');
    }
    public function getCookie(Request $request){
        return $request->cookie('name');
    }
    public function testVue(Request $request){
        return view('custom.testVue');
    }
    public function flightList(Request $request){
        $flights = Flight::all()->toArray();
        return view('custom.flightVue',['records' => $flights]);
    }
}
