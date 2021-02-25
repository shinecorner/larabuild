<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function list(Request $request){
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
//        $request->all();
//        echo $request->get('title');exit;
        DB::table('posts')->insert([
            'title' => $request->get('title'),
            'description' => $request->get('description')
        ]);
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
