<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function list(Request $request)
    {
//        if ($request->is('property/list')) {
//            exit("here");
//        }
//        if ($request->routeIs('property.*')) {
//            exit("here here");
//        }
//        dd($method = $request->method());
        $records = Property::all();
        return view('property.list', compact('records'));
    }

    public function insert()
    {
        return view('property.insert');
    }

    public function store(Request $request)
    {
        $file = $request->file('image');
        $destinationPath = public_path('uploads');
        $isUpload = $file->move($destinationPath, $file->getClientOriginalName());
//        $isUpload = $request->image->storeAs('images', $file->getClientOriginalName(), 'public');
//        $file = $request->file('image');

//        echo $path = $request->image->path();
//        echo '<br>';
//        echo $extension = $request->image->extension();
//        exit;

//        $validated = $request->validate([
//            'type' => 'required',
//            'slug' => 'required',
//            'sq_feet' => 'required|',
//            'discription' => 'required|max:255',
//            'is_sold' => 'required',
//            'evidance_date' => 'required',
//        ]);
//        $request->flash();
        $inputs = $request->all();
        $inputs['image'] = 'uploads/'.$file->getClientOriginalName();


        if ($isUpload) {
            Property::create($inputs);
            }

        return redirect('property/list');

//            Property::create([

        //type' => $request->get('type'),
        //slug' => $request->get('slug'),
        //sq_feet' => $request->get('sq_feet'),
        //direction' => $request->get('direction'),
        //discription' => $request->get('discription'),
        //is_sold' => $request->get('is_sold'),
        //'image' => '/uploads/' . $file->getClientOriginalName()
//]);
    }


    public function edit(Request $request, Property $property)
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
