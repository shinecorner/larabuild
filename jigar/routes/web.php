<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TestingDB;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\FlightController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Property;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category/list', [CategoryController::class, 'list']);
Route::get('/category/insert', [CategoryController::class, 'insert'])->name('category.insert');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');


Route::get('/customer/list', [CustomerController::class, 'list']);
Route::get('/customer/insert', [CustomerController::class, 'insert'])->name('customer.insert');
Route::post('/customer/store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');

Route::middleware(['propertytest', 'throttle:propertyratelimit','auth'])->prefix('property')->name('property.')->group(function () {
    Route::get('list', [PropertyController::class, 'list'])->name('list');
    Route::get('chk-layout', [PropertyController::class, 'chkLayout'])->name('chk-layout');
    Route::get('insert', [PropertyController::class, 'insert'])->name('insert');
    Route::post('store', [PropertyController::class, 'store'])->name('store');
    Route::get('edit/{property}', [PropertyController::class, 'edit'])->name('edit')->missing(function (Request $request) {
        // return Redirect::route('property.list');
        return "helo";
        // return redirect()->route('property.list');
    });
    Route::put('update/{property}', [PropertyController::class, 'update'])->name('update');
    Route::delete('delete/{property}', [PropertyController::class, 'delete'])->name('delete');
});

Route::get('/contacts/list', [ContactController::class, 'list']);
Route::get('/contacts/insert', [ContactController::class, 'insert'])->name('contacts.insert');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/contacts/edit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/update/{id}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/delete/{id}', [ContactController::class, 'delete'])->name('contacts.delete');

Route::get('qbuilder', [TestingDB::class, 'qbuilder']);
Route::get('eloquent', [TestingDB::class, 'eloquent']);
Route::get('relation', [TestingDB::class, 'relation'])->name('test.relation');
Route::get('/server', TestingDB::class);
Route::get('di', [TestingDB::class, 'checkDI'])->name('test.di');
//Route::get('check-req/{id}', [TestingDB::class, 'checkReq'])->name('test.chkReq');
Route::get('set-cookie', [TestingDB::class, 'setCookie'])->name('test.setCookie');
//Route::get('get-cookie', [TestingDB::class, 'getCookie'])->name('test.getCookie');

Route::get('flights/list', [FlightController::class, 'list'])->middleware(['auth'])->name('flight.list');
Route::get('test-vue', [TestingDB::class, 'testVue']);

Route::get('flight-vue', [TestingDB::class, 'flightList']);

Route::get('/test-json', function () {
    return [1, 2, 3];
});
Route::get('/test-resp', function () {
//        return response('Hello World<br>how are you', 200)
//        ->header('Content-Type', 'text/html');
//    return redirect('/test-json');

    return response("Hello world")
        ->header('Content-Type', "text/html")
        ->header('X-Country', 'India')
        ->header('X-State', 'Kerala');

});
Route::get('/user/{user}', function (User $user) {
    return $user;
    //Pass user = id//
});

Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () {
    Route::get('/privacy', function () {
        return response("Privacy12")->withoutCookie('surname');
    });

    Route::get('/terms', function () {
        return "Terms & Condition";
    });
});

Route::get('cookie-action', [TestingDB::class, 'setCookie'])->name('test.getCookie');

//Route::get('set-cookie', function (){
//    return response('Hello World')->cookie(
//        'surname', 'Kariya',0.5
//    );
//})->name('test.setCookie');

Route::get('ext',function (){
//    return redirect()->away('https://www.google.com');
    return redirect()->route('property.list')->with('message', 'List executed');
})->name('ext');





Route::get('/get-user-by-id/{id}', function (Request $request, $id) {
    return $id;
})->name('get-user');

Route::get('/check-user', function () {
//    $user = User::find(2);
//    return redirect()->route('get-user', [$user]);
});





//include Property model in getRouteKey method
Route::get('/get-property/{id}', function (Request $request, $id) {
    return $id;
})->name('get-property');

Route::get('/check-property', function () {
    $property = Property::find(9);
    return redirect()->route('get-property', [$property]);
//    return redirect()->action([TestDB::class, 'qbuilder']);
});



Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::view('vue-instance-check', 'custom.vueInstance');
Route::view('vue-color-crud','custom.vueColor');
Route::view('vue-size-crud','custom.vueSize');
Route::view('vue-role-crud','custom.vueRole');

Route::view('vue-view-flight','custom.flightVue');

Route::view('vue-event','custom.vueEvent');
Route::view('vue-template-syntext', 'custom.vueTemplateSyntext');

Route::view('computed-watcher', 'custom.vueComputeAndWatcher');
Route::view('list-rendering', 'custom.vueListRendering');



//Route::get('chk-json', function (){
//    return response()->json([
//        'name' => 'jigar',
//        'state' => 'gujrat',
//    ]);
//});

//Route::get('file-download', function (){
//    return response()->download(public_path('uploads/ghost.jpeg'));
//});



Route::get('stream-download', function (){
    return response()->streamDownload(function () {
        $res = Http::get('http://www.shinecorner.com/');
        echo $res;
    }, 'temp.html');
});


Route::get('file-show', function (){
    return response()->file(public_path('uploads/ghost.jpeg'));
});

Route::get('chk-mecro', function (){
    return response()->caps('my laptop');
});
//    return redirect()->route('get-user', ['id' => 2]);


//Route::resource('colors', ColorController::class)->except([
//    'show'
//]);

//Route::resource('colors', ColorController::class);
//Route::apiResource('colors', ColorController::class);

// Route::fallback(function () {
//     return "Your route is not found";
// });


//Route::resource('user.phone', PhoneController::class);

//Route::resource('user.phone', PhoneController::class)->shallow();

//Route::resource('user.phone', PhoneController::class)->parameters([
//    'user' => 'admin_user'
//]);

//Route::resource('user.phone', PhoneController::class)->scoped([
//    'phone' => 'slug'
//]);


// Route::get('gm', [TestingDB::class, 'gm']);
// Route::get('/greeting', function () {
//     return 'Hello World';
// });

// Route::any('/phpinfo', function (){
//     return phpinfo();
// });

// Route::redirect('relation', '/qbuilder');

// Route::view('/gm', 'greetings', ['name' => 'jigar']);


// Route::get('/gm/{id}', function ($id) {
//    return 'User '.$id;
// });
// Route::get('/gm/{id}/message/{message?}', [TestingDB::class, 'gm']);

// Route::get('/gm/{id}/message/{message?}', [TestingDB::class, 'gm'])
//    ->where('id', '[0-9]+');

// Route::get('/user-profile/{username}/message/{message?}', [TestingDB::class, 'profile'])
//     ->whereAlphaNumeric('username');

// Route::get('/user-profile/{username}/message/{message?}', [TestingDB::class, 'profile'])
//    ->whereUuid('message');

// Route::get('/gm/{id}/message/{message?}', [TestingDB::class, 'gm']);

// Route::get('/gm/{id}/message/{message?}', [TestingDB::class, 'gm'])->name('gm');
// Route::get('/message-me', [TestingDB::class, 'messageMe'])->name('msg');


// Route::get('/user/{name}', function ($name) {
//     //
// })->('name');
