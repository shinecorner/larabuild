<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function list(Request $request)
    {
        $records = Property::all();
        return view('property.list', compact('records'));
    }
    public function insert()
    {
        return view('property.insert');
    }
    public function store(Request $request)
    {
        Property::create($request->all());
        return redirect('property/list');
    }
    public function edit(Request $request,Property $property)
    {
        // $record = Property::find($id);
        return view('property.edit', ['record' => $property]);
    }
    public function update(Request $request, Property $property)
    {
        // print_r($request->all()); exit;
        $property->update([
            'type' => $request->get('type'),
            'sq_feet' => $request->get('sq_feet'),
            'direction' => $request->get('direction'),
            'discription' => $request->get('discription'),
            'is_sold' => ($request->get('is_sold')) ? $request->get('is_sold') : 0,
            'evidance_date' => $request->get('evidance_date')
        ]);


        return redirect('property/list');
    }
    
    public function delete(Request $request, Property $property)
    {
        $property->delete();
        return redirect('property/list');
    }

}
