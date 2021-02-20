<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function list(Request $request)
    {
        $records = Customer::all();
        return view('customer.list', compact('records'));

    }
    public function insert()
    {
        return view('customer.insert');
    }
    public function store(Request $request)
    {
        Customer::create($request->all());
        return redirect('customer/list');

        // DB::table('customer')->insert([
        //     'firstname' => $request->get('firstname'),
        // 	'lastname' => $request->get('lastname')
        // ]);
        return redirect('customer/list');
    }
    public function edit(Request $request, $id)
    {
        $record = Customer::find($id);
        return view('customer.edit',compact('record'));

        // $customer = DB::table('customer')->find($id);
        // return view('customer.edit', ['record' => $customer]);
    }
    public function update(Request $request, $id)
    {
        Customer::find($id)->update([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname')
        ]);

        // DB::table('customer')
        //     ->where('id', $id)
        //     ->update([
        //         'firstname' => $request->get('firstname'),
        //         'lastname' => $request->get('lastname')
        //     ]);
        return redirect('customer/list');
    }
    public function delete(Request $request, $id)
    {
        Customer::where('id',$id)->delete();

        // DB::table('customer')
        //     ->where('id', $id)
        //     ->delete();
        return redirect('customer/list');
    }
}
