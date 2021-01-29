<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Customer extends Controller
{
    public function list(Request $request)
    {
//        exit("abc");
        $customers = DB::table('customer')->get();
        return view('customer.list', ['records' => $customers]);
    }
    public function insert()
    {
        return view('customer.insert');
    }
    public function store(Request $request)
    {
//        $request->all();
//        echo $request->get('fname');exit;
        DB::table('customer')->insert([
            'fname' => $request->get('fname'),
            'lname' => $request->get('lname')
        ]);
        return redirect('customer/list');
    }
    public function edit(Request $request, $id){
        $customers = DB::table('customer')->find($id);
//        $record = DB::table('customer')->where('id', $id)->get();
        return view('customer.edit', ['record' => $customers]);
    }
    public function update(Request $request, $id){
        DB::table('customer')
            ->where('id', $id)
            ->update([
                'fname' => $request->get('fname'),
                'lname' => $request->get('lname')
            ]);
        return redirect('customer/list');
    }
    }
