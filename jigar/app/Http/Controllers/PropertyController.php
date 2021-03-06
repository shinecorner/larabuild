<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePropertyRequest;
use App\Rules\Uppercase;
use Illuminate\Support\Facades\View;

use App\Models\Property;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PropertyController extends Controller
{
    public function chkLayout(Request $request){
        $properties = Property::all();
        return view('custom.tasks', ['tasks' => $properties]);
    }
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
        $array = ['name' => 'Jigar', 'surname' => 'Kariya', 'age' => 25];
//        $company = "<script>alert('Hi')</script>";
//        $array = [];
//        return view('property.insert');
        return view('property.insert', ['detail' => $array]);

    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [

//            print_r($request->all());exit;

            'type' => 'required',
//            'slug' => 'required|unique:properties',
//            'slug' => 'required|exists:properties',
//            'slug' => 'different:discription',
//            'slug' => 'ends_with:hi,hello',
//            'slug' => 'starts_with:hi,hello',
//                 'slug' => 'string',
//            'slug' => 'in:hi,hello',

//            'slug' =>  ['required', 'unique:properties', 'min:4', new Uppercase],


//            'slug' =>  ['required', 'unique:properties', 'min:4',
//                function ($attribute, $value, $fail) {
//                    if (!(strtoupper($value) === $value)) {
//                        $fail('The ' . $attribute . ' is invalid.');
//                    }
//                },
//            ],


//            'slug' => [
//                'required',
//                Rule::in(['hi', 'hello']),
//            ],
//            'slug' => [
//                'required',
//                Rule::notIn(['hi', 'hello']),
//            ],


//            'slug' => [
//                'required',
//                Rule::exists('properties')->where(function ($query) {
//                    return $query->where('is_sold', 1);
//                }),
//            ],
//            'slug' => 'same:discription',
//            'slug' => 'required|not_in:hi,hello',
//            'state' => 'exists:states',
//

//            'age' => 'numeric|multiple_of:5',


//            'sq_feet' => 'present',
//            'sq_feet' => 'filled',
// abbreviation like NY=new York, US=united states // 'state' => 'exists:states,abbreviation'
////            'sq_feet' => 'size:12',
            'direction' => 'required',
            'discription' => 'required',
                'age' => 'required',
//            'discription' => 'required_if:active,1',
//            'active' => 'required',
//            'discription' => 'exclude_if:active,1',
//            'is_sold' => 'boolean',
//            'is_sold' => 'accepted',
//            'active' => [
//                'sometimes',
//                'required',
//                Rule::in(['1']),
//            ],

            'password' => 'nullable|confirmed',
            'password_confirmation' => 'nullable',
//            'evidance_date' => 'required',
            'author.name' => 'required',
            'author.surname' => 'required',
//            'author.*' => 'distinct',
//            'author.*' => 'distinct:ignore_case',
            'v1\.0' => 'required',
//            'image' => 'file|size:512',
// of Image Dimension//            'image' => 'dimensions:min_width=100,min_height=200',

//            'image' => 'required|dimensions:ratio=3/2',
//            'image' => [
//                'required',
//                Rule::dimensions()->maxWidth(1000)->maxHeight(500)->ratio(3 / 2),
//            ],


//        'image' => 'file',
//            'image' => 'required|image',
//            'image' => 'mimes:jpg,jpeg,bmp,png',
//            'image' => 'required|mimetypes:video/avi,video/mpeg,video/quicktime',

//            'book' => 'array',
            'publish_at' => 'nullable|date',
//            'publish_at' => 'timezone',
            'aurl' => 'active_url',

//            'has_appointment' => 'required|boolean',
//            'appointment_date' => 'exclude_unless:has_appointment,true|required|date',
//            'doctor_name' => 'exclude_unless:has_appointment,true|required|string',

            'has_appointment' => 'required|boolean',
            'appointment_date' => 'exclude_if:has_appointment,false|required|date',
            'doctor_name' => 'exclude_if:has_appointment,false|required|string',


//            'has_appointment' => 'required|boolean',
//            'appointment_date' => 'required_if:has_appointment,true|required|date',
//            'doctor_name' => 'required_if:has_appointment,true|required|string',


//            'chk_json' => 'json',

//            'amount' => 'required|numeric|gt:12',
//            'amount' => 'required|numeric|gte:100',

//            'amount' => 'required|numeric|lt:100',
//            'amount' => 'required|numeric|lte:100',

//            'time' => 'required|in_array:time_0.*',

//            'email' => 'email:rfc,dns',
//            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
//            'email' => 'regex:/^.+@.+$/i',

//            'chk_date' => 'required|date|after:tomorrow',
//            'chk_date' => 'required|before: March 2021',
//            'chk_date' => 'required|date|after_or_equal:10 March 2021',
//            'chk_date' => 'required|date|before_or_equal:10 March 2021',
//            'chk_date' => 'required|date|after_or_equal:10 March 2021',
//                'chk_date' => 'date_equals:10 March 2021',
//        'age' => 'between:18,100',
//            'age' => 'digits_between:18,100',
//        'date_with_input' => 'date_format:Y-m-d',

//            'number' => 'alpha_num',

//            'number' => 'digits:3',
//            'number' => 'digits:3,5',

//            'number' => 'integer',
//
//            'ipadd' => 'ip',

//            'ipadd' => 'present',
//            'ipadd' => 'integer|size:10',
//            'ipadd' => 'url',
//            'ipadd' => 'uuid',

        ]);

        if ($validator->fails()) {
            return redirect('property/insert')
                ->withErrors($validator)
                ->withInput();
        }
        exit('hi');

    }
//        $validator = Validator::make($request->all(), [
//            'type' => 'required',
//            'slug' => 'required|unique:properties',
//            'sq_feet' => 'required',
//            'direction' => 'required',
//            'direction' => 'required',
//            'discription' => 'required',
//            'is_sold' => 'required',
//            'evidance_date' => 'required',
//            'author.name' => 'required',
//            'author.surname' => 'required',
//            'v1\.0' => 'required',
//            'publish_at' => 'nullable|date'
//        ],  [
//            'type' => 'Property Type',
//        ]);

//        Validator::make($request->all(), [
//            'type' => 'required',
//            'slug' => 'required|unique:properties',
//            'sq_feet' => 'required',
//            'direction' => 'required',
//            'direction' => 'required',
//            'discription' => 'required',
//            'is_sold' => 'required',
//            'evidance_date' => 'required',
//            'author.name' => 'required',
//            'author.surname' => 'required',
//            'v1\.0' => 'required',
//            'publish_at' => 'nullable|date'
//        ])->validate();

//        Validator::make($request->all(), [
//            'type' => 'required',
//            'slug' => 'required|unique:properties',
//            'sq_feet' => 'required',
//            'direction' => 'required',
//            'direction' => 'required',
//            'discription' => 'required',
//            'is_sold' => 'required',
//            'evidance_date' => 'required',
//            'author.name' => 'required',
//            'author.surname' => 'required',
//            'v1\.0' => 'required',
//            'publish_at' => 'nullable|date'
//        ])->validateWithBag('property');

//        $validator = Validator::make($request->all(), [
//            'type' => 'required',
//            'slug' => 'required|unique:properties',
//            'sq_feet' => 'required',
//            'direction' => 'required',
//            'direction' => 'required',
//            'discription' => 'required',
//            'is_sold' => 'required',
//            'evidance_date' => 'required',
//            'author.name' => 'required',
//            'author.surname' => 'required',
//            'v1\.0' => 'required',
////            'publish_at' => 'nullable|date',
//
//        ]);
//        if ($validator->fails()) {
//            $errors = $validator->errors();
//            foreach ($errors->get('slug') as $message) {
//                dump($message);
//            }
//            foreach ($errors->get('author.name') as $message) {
//                dump($message);
//            }
//            if($errors->has('slug')){
//                exit("Slug Goes Wrong");
//            }
//            return redirect('property/insert')
//                ->withErrors($validator)
//                ->withInput();
//        }

//        $validated = $request->validate([
////            'type' => 'required|unique:properties',
//            'slug' => 'required|unique:properties',
//            'sq_feet' => 'required',
//            'direction' => 'required',
//            'discription' => 'required',
//            'is_sold' => 'required',
//            'evidance_date' => 'required',
//            'author.name' => 'required',
//            'author.surname' => 'required',
//            'v1\.0' => 'required',
//            'publish_at' => 'nullable|date'
//        ]);
//$validatedData = $request->validateWithBag('property', [
//            'type' => ['required', 'unique:properties'],
//            'slug' => ['required', 'unique:properties'],
//            'sq_feet' => ['required'],
//            'direction' => ['required'],
//            'discription' => ['required'],
//            'is_sold' => ['required'],
//            'evidance_date' => ['required'],
//            'author.name' => ['required'],
//            'author.surname' => ['required'],
//            'author.surname' => ['required'],
//            'v1\.0' => ['required'],
//            'publish_at' => ['nullable', 'date'],
//        ]);


//        $validated = $request->validated();

//        $file = $request->file('image');
//        $destinationPath = public_path('uploads');
//        $isUpload = $file->move($destinationPath, $file->getClientOriginalName());
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
//        $inputs = $request->all();
//        $inputs['image'] = 'uploads/' . $file->getClientOriginalName();
//
//
//        if ($isUpload) {
//            Property::create($inputs);
//        }
//
//        return redirect('property/list');

//            Property::create([

    //type' => $request->get('type'),
    //slug' => $request->get('slug'),
    //sq_feet' => $request->get('sq_feet'),
    //direction' => $request->get('direction'),
    //discription' => $request->get('discription'),
    //is_sold' => $request->get('is_sold'),
    //'image' => '/uploads/' . $file->getClientOriginalName()
//]);
//    }


    public function edit(Request $request, Property $property)
    {
        // $record = Property::find($id);
//        return view('property.edit', ['record' => $property]);
        return view('property.edit')->with('record',$property);

//        return View::first(['custom.propertyedit','property.edit'], ['record' => $property]);
//        if (View::exists('property.edit')) {
//            exit('property Edit Page');
//        }
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
