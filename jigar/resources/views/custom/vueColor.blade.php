@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')

    <script src="{{mix('js/color/crud.js')}}"></script>

@endpush
@section('content')
    <div id="app">
        <form>
            <input type="text" name="color" v-model="color" />
            <button type="button" @click="submitForm">Save</button>
        </form>

        <table>
            <tr v-for="record in records">
                <td>@{{record.cloth_color}}</td>
            </tr>
        </table>
    </div>
@stop
