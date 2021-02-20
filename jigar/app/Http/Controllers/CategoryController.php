<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;

class CategoryController extends Controller
{
    public function list(Request $request)
    {
        // exit('hello');
        $records = Category::all();
        return view('category.list',compact('records'));
        // $categories = DB::table('category')->get();
        // return view('category.list', ['records' => $categories]);
    }
    public function insert()
    {
        return view('category.insert');
    }
    public function store(Request $request)
    {
       Category::create($request->all());
        return redirect('category/list');

        // DB::table('category')->insert([
        //     'name' => $request->get('name')
        // ]);
        // return redirect('category/list');
    }
    public function edit(Request $request, $id)
    {
        $record = Category::find($id);
        return view('category.edit',compact('record'));
        
        // $category = DB::table('category')->find($id);
        //        $record = DB::table('post')->where('id', $id)->get();
        // return view('category.edit', ['record' => $category]);
    }
    public function update(Request $request, $id)
    {
        Category::find($id)->update([
                    'name' => $request->get('name')
                ]);

        // DB::table('category')
        //     ->where('id', $id)
        //     ->update([
        //         'name' => $request->get('name')
        //     ]);
        return redirect('category/list');
    }
    public function delete(Request $request, $id){
        Category::where('id',$id)->delete();
        // DB::table('category')
        //     ->where('id', $id)
        //     ->delete();
        return redirect('category/list');
    }
}
