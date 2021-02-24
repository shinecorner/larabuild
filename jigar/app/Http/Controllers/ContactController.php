<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Contact;
use App\Models\Customer;

class ContactController extends Controller
{
    //
    public function list(Request $request)
    {
        $records = Customer::with('contacts')->get();

        return view('contacts.list', compact('records'));
    }
    public function insert()
    {
        $records = Customer::all();
        
        return view('contacts.insert', compact('records'));
    }
    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect('contacts/list');
    }
    public function edit(Request $request, $id)
    {
        $record = Contact::find($id);
        return view('contacts.edit', compact('record'));
    }
    public function delete(Request $request, $id)
    {
        Contact::where('id', $id)->delete();
        return redirect('contacts/list');
    }
}
