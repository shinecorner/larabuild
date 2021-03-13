<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\PhoneController;
use App\Models\Flight;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::middleware(['posttest'])->group(function(){
    Route::middleware(['posttest','throttle:postratelimit', 'auth'])->name('post.')->prefix('post')->group(function () {
        Route::get('list', [PostController::class, 'list'])->name('list');
        Route::get('chk-layout', [PostController::class, 'chkLayout'])->name('chk-layout');
        Route::get('insert', [PostController::class, 'insert'])->name('insert');
        Route::post('store', [PostController::class, 'store'])->name('store');
        Route::get('edit/{post}', [PostController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [PostController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [PostController::class, 'delete'])->name('delete');
    });

    Route::get('qbuilder', [TestController::class, 'qbuilder'])->name('test.qbuilder');
    Route::get('eloquent', [TestController::class, 'eloquent'])->name('test.eloquent');
    Route::get('relation', [TestController::class, 'relation'])->name('test.relation');
    Route::get('di', [TestController::class, 'checkDI'])->name('test.di');

    Route::get('flights/list', [FlightController::class, 'list'])->middleware(['auth:admin'])->name('flight.list');
    Route::get('/api/flights/{id}', function ($id) {
        return Flight::findOrFail($id);
    });

    Route::get('flight/store', [FlightController::class, 'store'])->name('flight.store');
//Route::redirect('relation', '/qbuilder');
//Route::any('/phpinfo', function () {
//    return phpinfo();
//});

//Route::any('/phpinfo', function (Request $request) {
//    dd($request->all());
//});

//Route::view('/gm', 'greetings', ['name' => 'Taylor']);
//Route::get('/gm/{id}', function ($id) {
//    return 'User '.$id;
//});
//Route::get('/gm/{id}/message/{message?}', [TestController::class, 'gm']);

//Route::get('/gm/{id}/message/{message?}', [TestController::class, 'gm'])
//    ->where('id', '[0-9]+');

//Route::get('/user-profile/{username}/message/{message?}', [TestController::class, 'profile'])
//    ->whereAlphaNumeric('username');

//Route::get('/user-profile/{username}/message/{message?}', [TestController::class, 'profile'])
//    ->whereUuid('message');

//Route::get('/gm/{id}/message/{message?}', [TestController::class, 'gm']);

    Route::get('/gm/{id}/message/{message?}', [TestController::class, 'gm'])->name('gm');
    Route::get('/message-me', [TestController::class, 'messageMe'])->name('msg');
    Route::fallback(function () {
        return "already here";
    });
Route::get('/server', TestController::class);

//});

//Route::resource('colors', ColorController::class)->except([
//   'show'
//]);
Route::resource('phone', PhoneController::class);
//Route::resource('user.phone', PhoneController::class);
//Route::resource('user.phone', PhoneController::class)->parameters([
//    'user' => 'admin_user'
//]);
//Route::resource('user.phone', PhoneController::class)->scoped([
//    'phone' => 'slug'
//]);
//Route::resource('user.phone', PhoneController::class)->shallow();
Route::get('/test-json', function () {
    return [1, 2, 3];
});
Route::get('/test-resp', function () {
//    return response('Hello World<br>how are you', 200)
//        ->header('Content-Type', 'text/plain');
//    return redirect('/test-json');
    return response("Hello world")
        ->header('Content-Type', "text/html")
        ->header('X-Country', 'India')
        ->header('X-State', 'Gujarat');
});
Route::get('/user/{user}', function (User $user) {
    return $user;
});
Route::get('/get-user-by-id/{id}', function (Request $request, $id) {
    return $id;
})->name('get-user');

Route::get('/get-post/{id}', function (Request $request, $id) {
    return $id;
})->name('get-post');

Route::get('/check-user', function () {
//    $user = User::find(5);
//    return redirect()->route('get-user', [$user]);

//    return redirect()->route('get-user', ['id' => 3]);
});

Route::get('/check-post', function () {
    $post = Post::find(26);
    return redirect()->route('get-post', [$post]);
//    return redirect()->action([TestController::class, 'qbuilder']);
});

Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () {
    Route::get('/privacy', function () {
        return response("Privacy12")->withoutCookie('surname');
    });

    Route::get('/terms', function () {
        return "Terms & Condition";
    });
});
//Route::get('set-cookie', [TestController::class, 'setCookie'])->name('test.setCookie');
//Route::get('get-cookie', [TestController::class, 'getCookie'])->name('test.getCookie');

Route::get('set-cookie', function (){
//    return response('Hello World')->cookie(
//        'surname', 'value', 0.5
//    );
    return response('Hello World')->cookie(
        'surname', 'Kariya'
    );
})->name('test.setCookie');

Route::get('cookie-action', [TestController::class, 'setCookie'])->name('test.getCookie');

Route::get('ext', function (){
    return redirect()->away('https://www.google.com');
//    return redirect()->route('post.list')->with('message', 'List executed');
})->name('ext');

Route::get('chk-json', function (){
//    return response()->json([
//        'name' => 'Abigail',
//        'state' => 'CA',
//    ]);

});
Route::get('file-download', function (){
    return response()->download(public_path('uploads/6.jpeg'), 'hp.jpeg');
});

Route::get('stream-download', function (){
    return response()->streamDownload(function () {
        $res = Http::get('http://example.com');
        echo $res;
    }, 'temp.html');
});

Route::get('file-show', function (){
    return response()->file(public_path('uploads/6.jpeg'));
});

Route::get('chk-mecro', function (){
//    return response('my laptop');
    return response()->caps('my laptop');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('test-vue', [TestController::class, 'testVue']);
Route::get('flight-vue', [TestController::class, 'flightList']);
Route::view('vue-instance-check', 'custom.vueInstance');
Route::view('vue-color-crud', 'custom.vueColor');
Route::view('vue-template-syntext', 'custom.vueTemplateSyntext');
Route::view('computed-watcher', 'custom.vueComputeAndWatcher');
