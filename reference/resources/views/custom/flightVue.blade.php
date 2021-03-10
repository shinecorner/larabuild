@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
    Vue.component('FlightDetail',{
        props: ['flight'],
        template: `<tr>
      <td>@{{ flight.name }}</td>
      <td>@{{ flight.number }}</td>
      <td>@{{ flight.departure }}</td>
      <td>@{{ flight.destination }}</td>
</tr>`
    });
    var app = new Vue({
       el: "#app",
       data: {
           records: @json($records)
       },
       // created: function (){
       //     console.log(this.flights[0]);
       // }
    });
</script>
@endpush
@section('content')
<div id="app">
{{--    <div v-for="record in records">--}}
{{--        <flight-detail :flight="record"></flight-detail>--}}
{{--    </div>--}}
    <table width="100%" border="1">
        <template v-for="record in records">
            <flight-detail :flight="record"></flight-detail>
        </template>
    </table>
</div>

@stop
