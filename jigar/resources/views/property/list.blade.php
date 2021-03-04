<p>
    <a class="btn btn-primary" href="{{route('property.insert')}}"> Add Record </a>
</p>

@extends('layout')

@push('custom-styles')
    <link rel="stylesheet" href="{{asset('vendor/dataTables.bootstrap4.min.css')}}">
@endpush

@push('custom-scripts')
@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <script src="{{asset('vendor/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#property_list").DataTable({
                "pageLength": 2
            });
        });
    </script>
    @endpush

@section('content')
    <table class="table table-striped" id="property_list">
        <thead>
        <tr>
            <th scope="col"> Id</th>
            <th scope="col"> Type</th>
            <th scope="col">Square Feet</th>
            <th scope="col">Slug</th>
            <th scope="col">Direction</th>
            <th scope="col">Discription</th>
            <th scope="col">Is Sold</th>
            <th scope="col">Evidance Date</th>
            <th scope="col">File</th>
            <th scope="col">Update</th>
            <th scope="col">Remove</th>
        </tr>
        </thead>
        <tbody>
        {{$person_name}}
        {!!  $surname !!}
        {{$usercount}}

        {{--        @@json()--}}
        {{--        {{$i = null}}--}}



        @foreach($records as $record)
            <tr>


                <td>{{$record->id}}</td>
                <td>{{$record->type}}</td>
                <td>{{$record->sq_feet}}</td>
                <td>{{$record->slug}}</td>
                <td>{{$record->direction}}</td>
                <td>{{$record->discription}}</td>
                <td>{{$record->is_sold}}</td>
                <td>{{$record->evidance_date}}</td>
                <td>
                    @if($record->image)
                        <img src="{{asset($record->image)}}" height="100"/>
                    @endif
                </td>
                <td>
                    <a href="{{route('property.edit',['property' => $record->id])}}" class="btn btn-primary">Edit</a>

                </td>
                <td>
                    <form action="{{ route('property.delete',['property' => $record->id]) }}" method="post">
                        <input class="btn btn-danger" type="submit" value="Delete"/>
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop













{{--                <td>--}}
{{--                    @if (count($records) === 1)--}}
{{--                        I have one record!--}}
{{--                    @elseif (count($records) > 1)--}}
{{--                        I have multiple records!--}}
{{--                    @else--}}
{{--                        I don't have any records!--}}
{{--                    @endif--}}

{{--                </td>--}}

{{--@isset($records)--}}
{{--@endisset--}}

{{--@empty($records)--}}
{{--@endempty--}}


{{--@auth('admin')--}}
{{--@endauth--}}

{{--@guest('admin')--}}
{{--@endguest--}}

{{--@production--}}
{{--@endproduction--}}

{{--@env('staging')--}}
{{--@endenv--}}

{{--@env(['staging','production'])--}}
{{--@endenv--}}


{{--@hasSection('navigation')--}}
{{--@endif()--}}


{{--@sectionMissing()--}}
{{--@endif--}}


{{--@switch($i)--}}
{{--    @case(1)--}}
{{--    First case...--}}
{{--    @break--}}

{{--    @case(2)--}}
{{--    Second case...--}}
{{--    @break--}}

{{--    @default--}}
{{--    Default case...--}}
{{--@endswitch--}}


{{--@for($i = 0;$i < 10;$i++)--}}
{{--    the current value is {{ nl2br(e($i)) }}--}}
{{--@endfor--}}


{{--{{$i = 5}}--}}
{{--@while ($i > 4)--}}
{{--    <p>I'm looping forever.</p>--}}
{{--@endwhile--}}


{{--@if ($loop->first)--}}
{{--    This is the first iteration.--}}
{{--@endif--}}

{{--@if ($loop->last)--}}
{{--    This is the last iteration.--}}
{{--@endif--}}


{{--@includeIf()--}}

{{--@includeWhen()--}}

{{--@includeUnless()--}}

{{--@includeFirst(['custom.admin','admin'],['status' => 'complete'])--}}


{{--@each('includes.head',$jobs,'job')--}}{{-- combine of foreach and include--}}

{{--@php--}}
{{--    $counter = 1;--}}
{{--    echo $counter;--}}
{{--@endphp--}}
