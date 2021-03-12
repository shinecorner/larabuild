@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')
    <script src="{{mix('js/size/crud.js')}}"></script>
@endpush
@section('content')
        <div id="app">
            <form>
                <input type="text" name="size" v-model="size" />
                <button type="button" @click="submitForm">save</button>
            </form>
                <table>
                    <tr v-for="record in records">
                        <td>@{{record.cloth_size}}</td>
                    </tr>
                </table>
        </div>
@stop
