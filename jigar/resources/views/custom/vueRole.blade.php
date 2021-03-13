@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')

    <script src="{{mix('js/role/crud.js')}}"></script>

@endpush

@section('content')

    <div id="app">
        <form>
            <input type="text" name="role" v-model="role" />
            <button type="button" @click="submitForm">Save</button>
        </form>

                <template v-for="record in records">
                                <role-detail :item="record"></role-detail>
                </template>
    </div>
@stop
