@extends('layout')

@push('custom-scripts')
    <script>
        // $(function(){
        //     $('#submit_form').click(function (){
        //         var datastring = $("#property_form").serialize();
        //         console.log(datastring);
        //         $.ajax({
        //             type: "POST",
        //             url: "property/store",
        //             data: datastring,
        //             dataType: "json",
        //             success: function(data) {
        //                 //var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
        //                 // do what ever you want with the server response
        //             },
        //             error: function() {
        //                 alert('error handling here');
        //             }
        //         });
        //
        //     });
        // })
    </script>
@endpush

@section('content')
    <form method="post" action="{{url('property/store')}}" id="property_form" enctype="multipart/form-data">
        @csrf
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="type">Type :</label>
                <select class="form-control" name="type" id="type">
                    <option value="">Select</option>
                    <option value="flat">Flat</option>
                    <option value="shop">Shop</option>
                    <option value="office">Office</option>

                </select>
                {{--            {{Form::select('type', ['flat' => 'Flat', 'shop' => 'Shop', 'office' => 'Office' , 'class' => 'form-control','id' => 'type'])}}--}}
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" value="{{old('slug')}}" class="form-control" id="slug" name="slug"
                       placeholder="Enter slug">
                @error('slug')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group">
                <label for="sq_feet">Square Feet:</label>
                <input type="text" name="sq_feet" value="{{old('sq_feet')}}" id="sq_feet" class="form-control"
                       placeholder="Enter Square Feet">
                @error('sq_feet')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group">
                <label for="direction">Type :</label>
                <select class="form-control" name="direction" id="direction">
                    <option value="">Select</option>
                    <option value="north">North</option>
                    <option value="south">South</option>
                    <option value="east">East</option>
                    <option value="west">West</option>
                </select>
                {{--                <div class="alert alert-danger">{{ $errors->property->first('direction') }}</div>--}}
            </div>

            <div class="form-group">
                <label for="discription">Discription:</label>
                <textarea class="form-control" rows="5" id="discription" name="discription"
                          placeholder="Enter Discription"></textarea>
            </div>
            @error('discription')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" value="{{old('age')}}" class="form-control" id="age" name="age"
                       placeholder="Enter Age">
                @error('age')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="is_sold">Is Sold:</label>
                <input type="checkbox" checked class="form-control" value="1" name="is_sold" id="is_sold">
            </div>

            <div class="form-group">
                <label for="evidance_date"> Evidance Date:</label>
                <input type="date" name="evidance_date" class="form-control" value="{{old('evidance_date')}}"
                       id="evidance_date">
            </div>
            @error('evidance_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="slug">Image</label>
                <input type="file" class="form-control" id="image" name="image"/>
            </div>
            <div class="form-group">
                <label>Book</label>
                <input type="text" class="form-control" id="book_0" name="book" maxlength="30"
                       placeholder="Enter Book Name">
                <input type="text" class="form-control" id="book_0" name="book[]" maxlength="30"
                       placeholder="Enter Book Name">
                <input type="text" class="form-control" id="book_0" name="book[]" maxlength="30"
                       placeholder="Enter Book Name">
            </div>
            <div class="form-group">
                <label for="author_name">Author Name</label>
                <input type="text" class="form-control" id="author_name" name="author[name]" maxlength="30"
                       placeholder="Enter Author Name">
            </div>

            <div class="form-group">
                <label for="author_surname">Author SurName</label>
                <input type="text" class="form-control" id="author_surname" name="author[surname]" maxlength="30"
                       placeholder="Enter Author SurName">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" value="{{old('password')}}" class="form-control" id="password" name="password"
                       placeholder="Enter password">
            </div>
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" value="{{old('password_confirmation')}}" class="form-control"
                       id="password_confirmation" name="password_confirmation"
                       placeholder="Confirm password">
            </div>
            <div class="form-group">
                <label for="version">Version</label>
                <input type="text" class="form-control" id="version" name="v1.0" maxlength="30"
                       placeholder="Enter Author SurName">
            </div>
            <div class="form-group">
                <label for="publish_at">Publish Date</label>
                <input type="text" class="form-control" id="publish_at" name="publish_at">
            </div>
            <div class="form-group">
                <label for="chk_date">Check Date</label>
                <input type="date" class="form-control" id="chk_date" name="chk_date">
            </div>
            <div class="form-group">
                <label for="date_with_input">Check Date With input</label>
                <input type="text" class="form-control" id="date_with_input" name="date_with_input">
            </div>
            <div class="form-group">
                <label for="active"></label>
                <input type="checkbox" value="1" class="form-check-input" id="active" name="active">
            </div>
            <div class="form-group">
                <label for="aurl">Active Url</label>
                <input type="text" class="form-control" id="aurl" name="aurl" placeholder="Enter Your Url">
            </div>
            <div class="form-group">
                <label for="number">Contact Number</label>
                <input type="text" class="form-control" id="number" name="number"
                       placeholder="Enter Your Contact Number">
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" class="form-control" id="email" name="email"
                       placeholder="Enter Your E-mail Address">
            </div>
            <div class="form-group">
                <label for="ipadd">Ip Address</label>
                <input type="text" class="form-control" id="ipadd" name="ipadd"
                       placeholder="Enter Your Ip address">
            </div>
            <div class="form-group">
                <label>Timer </label>
                <input type="text" class="form-control" id="time_0" name="time[]" maxlength="30"
                       placeholder="Enter Timer">
                <input type="text" class="form-control" id="time_0" name="time[]" maxlength="30"
                       placeholder="Enter Timer">
                <input type="text" class="form-control" id="time_0" name="time[]" maxlength="30"
                       placeholder="Enter Timer">
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <select class="form-control" id="state" name="state">
                    <option>Gujarat</option>
                    <option>Maharastra</option>
                    <option>Kerala</option>

                </select>
            </div>
            <div class="form-group">

                Has Appoitment <br><input type="checkbox" value="1" class="form-check-input" id="has_appointment"
                                          name="has_appointment">
            </div>
            <div class="form-group">
                <label for="appointment_date">Appoitment Date</label>
                <input type="date" class="form-control" id="appointment_date" name="appointment_date">
            </div>
            <div class="form-group">
                <label for="doctor_name">Doctor Name</label>
                <input type="text" class="form-control" id="doctor_name" placeholder="Enter Doctor Name"
                       name="doctor_name">
            </div>

            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" id="amount" placeholder="Enter Your Amount"
                       name="amount">
            </div>
            <div class="form-group">
                <label for="chk_json">Check Json</label>
                <textarea class="form-control" name="chk_json" placeholder="Enter Your Json " id="chk_json" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        {{--                <button type="button" id="submit_form" class="btn btn-primary">Submit</button>--}}
    </form>
    </div>

@stop
