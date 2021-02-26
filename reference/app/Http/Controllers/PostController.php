<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
//        $validated = $request->validate([
//            'title' => 'required|max:255',
//            'description' => 'required',
//        ]);
//        $request->flash();
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
