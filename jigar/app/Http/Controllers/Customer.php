<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Customer extends Controller
{
    public function list(Request $request)
    {
        $customers = DB::table('customer')->get();
        return view('customer.list', ['records' => $customers]);
    }
    public function insert()
    {
        return view('customer.insert');
    }
    public function store(Request $request)
    {

        DB::table('customer')->insert([
            'firstname' => $request->get('firstname'),
			'lastname' => $request->get('lastname')
        ]);
        return redirect('customer/list');
    }
    public function edit(Request $request, $id)
    {
        $customer = DB::table('customer')->find($id);
        
        return view('customer.edit', ['record' => $customer]);
    }
    public function update(Request $request, $id)
    {
        DB::table('customer')
            ->where('id', $id)
            ->update([
                'firstname' => $request->get('firstname'),
				'lastname' => $request->get('lastname')
            ]);
        return redirect('customer/list');
    }
    public function delete(Request $request, $id){
        DB::table('customer')
            ->where('id', $id)
            ->delete();
        return redirect('customer/list');
    }
}
