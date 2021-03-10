@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')
    <script>
        var records = @json($records)
    </script>
    <script src="{{mix('js/flights/list.js')}}"></script>
@endpush
@section('content')
    <div id="app">
        <table width="100%" border="1">
            <template v-for="flight in flights">
                        <flight-description :item="flight"></flight-description>
            </template>

        </table>
    </div>

@stop
