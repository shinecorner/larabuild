@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')
{{--    <script>--}}
{{--        var records = @json($records)--}}
{{--    </script>--}}
    <script src="{{mix('js/flights/lifecycle.js')}}"></script>
@endpush
@section('content')
    <div id="app">
            <template v-for="flight in flights">
                        <flight-description :item="flight"></flight-description>
            </template>

    </div>

@stop
