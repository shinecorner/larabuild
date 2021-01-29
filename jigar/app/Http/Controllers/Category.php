<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Category extends Controller
{
    public function list(Request $request){
        $categories = DB::table('category')->get();
        return view('category.list', ['records' => $categories]);
    }
}
