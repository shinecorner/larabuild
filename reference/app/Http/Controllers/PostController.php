<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function list(Request $request){
        $posts = DB::table('post')->get();
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
        DB::table('post')->insert([
            'title' => $request->get('title'),
            'description' => $request->get('description')
        ]);
        return redirect('post/list');
    }
    public function edit(Request $request, $id){
        $post = DB::table('post')->find($id);
//        $record = DB::table('post')->where('id', $id)->get();
        return view('posts.edit', ['record' => $post]);
    }
    public function update(Request $request, $id){
        DB::table('post')
            ->where('id', $id)
            ->update([
                'title' => $request->get('title'),
                'description' => $request->get('description')
            ]);
        return redirect('post/list');
    }
    public function delete(Request $request, $id){
        DB::table('post')
            ->where('id', $id)
            ->delete();
        return redirect('post/list');
    }

}
