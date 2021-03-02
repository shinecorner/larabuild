<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function list(Request $request){

        dump($request->all());
//        if ($request->is('post/insert')) {
//            exit("here");
//        }
//        if ($request->routeIs('post.*')) {
//            exit("here");
//        }

//        dd($method = $request->method());



        $posts = DB::table('posts')->get();
//        print_r($posts);
//        exit;
        return view('posts.list', ['records' => $posts]);
    }
    public function insert(){
        return view('posts.insert');
    }
    public function store(Request $request){
//        $validator = Validator::make($request->all(), [
//            'title' => 'required|unique:posts|min:4',
//            'description' => 'required',
//            'author.name' => 'required',
//            'author.surname' => 'required',
//        ], [
//            'required' => 'The :attribute field is Mandatory.',
//        ]);
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|min:4',
            'description' => 'required_if:active,1',
            'password' => 'nullable|confirmed',
            'password_confirmation' => 'nullable',
            'author.name' => 'required',
            'author.surname' => 'required',
        ]);
        if($validator->fails()){
//            $errors = $validator->errors();
//            foreach ($errors->get('title') as $message) {
//                dump($message);
//            }
//            foreach ($errors->get('author.*') as $message) {
//                dump($message);
//            }
//            foreach ($errors->all() as $message) {
//                dump($message);
//            }
//            if ($errors->has('title')) {
//                exit("title khotu chhe");
//            }
//            exit;
//            dd($errors->first('title'));
//            dd($errors);
            return redirect('post/insert')
                ->withErrors($validator)
                ->withInput();
        }

//        Validator::make($request->all(), [
//            'title' => 'required|unique:posts|max:255',
//            'description' => 'required',
//        ])->validateWithBag('post');
//        $validator = Validator::make($request->all(), [
//            'title' => 'required|unique:posts|max:255',
//            'description' => 'required',
//        ]);
//
//        if ($validator->fails()) {
//            return redirect('post/insert')
//                ->withErrors($validator)
//                ->withInput();
//        }
//        $validated = $request->validated();
//        exit("111");
//        print_r($request->all());
//        exit;
//        $validated = $request->validate([
//            'title' => 'required|unique:posts|max:30',
//            'description' => 'required',
//        ]);
//        $validatedData = $request->validateWithBag('post', [
//            'title' => ['required', 'unique:posts', 'max:255'],
//            'body' => ['required'],
//        ]);

//        $validated = $request->validate();

        $file = $request->file('image');

//        echo $path = $request->image->path();
//        echo '<br>';
//        echo $extension = $request->image->extension();
//        exit;
        $destinationPath = public_path('uploads');
        $isUpload = $file->move($destinationPath,$file->getClientOriginalName());
//        $isUpload = $request->image->storeAs('images', $file->getClientOriginalName(), 'public');
//        $request->all();
//        echo $request->get('title');exit;
        if($isUpload){
            DB::table('posts')->insert([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'slug' => $request->get('slug'),
                'image' => '/uploads/' . $file->getClientOriginalName()
            ]);
        }

        return redirect('post/list');
    }
    public function edit(Request $request, Post $post){
//        $post = Post::find($id);
//        $post = DB::table('posts')->find($id);
//        $record = DB::table('posts')->where('id', $id)->get();
        return view('posts.edit', ['record' => $post]);
    }
    public function update(Request $request, $id){
        DB::table('posts')
            ->where('id', $id)
            ->update([
                'title' => $request->get('title'),
                'description' => $request->get('description')
            ]);
        return redirect('post/list');
    }
    public function delete(Request $request, $id){
        DB::table('posts')
            ->where('id', $id)
            ->delete();
        return redirect('post/list');
    }

}
