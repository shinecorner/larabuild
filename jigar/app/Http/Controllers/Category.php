<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Category extends Controller
{
    public function list(Request $request)
    {
        $categories = DB::table('category')->get();
        return view('category.list', ['records' => $categories]);
    }
    public function insert()
    {
        return view('category.insert');
    }
    public function store(Request $request)
    {

        DB::table('category')->insert([
            'name' => $request->get('name')
        ]);
        return redirect('category/list');
    }
    public function edit(Request $request, $id)
    {
        $category = DB::table('category')->find($id);
        //        $record = DB::table('post')->where('id', $id)->get();
        return view('category.edit', ['record' => $category]);
    }
    public function update(Request $request, $id)
    {
        DB::table('category')
            ->where('id', $id)
            ->update([
                'name' => $request->get('name')
            ]);
        return redirect('category/list');
    }
    public function delete(Request $request, $id){
        DB::table('category')
            ->where('id', $id)
            ->delete();
        return redirect('category/list');
    }
}
