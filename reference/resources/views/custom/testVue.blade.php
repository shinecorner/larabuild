@extends('layout')
@push('custom-styles')

@endpush
@push('custom-scripts')
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
    Vue.component('AnnualFunction', {
        template: '<div>'+new Date().toLocaleString()+'</div>',
    });
    Vue.component('SchoolDescription', {
        // props: ['person'],
        // template: '<div>We have a school there are some pupils their name are like below @{{person.name}}</div>',

        // props: ['persons'],
        // template: `<div>
        //     <div v-for="person in persons">
        //         <span v-if="person.type == 'student'">Name of student:</span>
        //         <span v-else>Name of teacher:</span>
        //         @{{ person.name }}
        //     </div>
        //     </div>`

        props: ['person'],
        template: `<div>
                <span v-if="person.type == 'student'">Name of student:</span>
                <span v-else>Name of teacher:</span>
                @{{ person.name }}
                <br />
                <span v-if="person.type == 'student'">Surname of student: @{{ person.surname }}</span>
                <span v-else>Degree of teacher: @{{ person.degree }}</span>
                <annual-function></annual-function>
                <br /><br />
            </div>`

    });
    var app = new Vue({
       el: "#app",
       data: {
           message: "Hi good morning",
           students: [
               {name: "sandip", surname: "Bhalodiya", type: "student"},
               {name: "Prof. Sherma", degree: "Phd", type: "teacher"},
               {name: "jigar", surname: "kariya", type: "student"},
               {name: "Prof. Verma", degree: "Phd", type: "teacher"}

           ],
           // teachers: [
           //     {name: "Prof. Verma", degree: "Phd"},
           //     {name: "Prof. Sherma", degree: "Phd"},
           // ]
       }
    });
</script>
@endpush
@section('content')
<div id="app">
    @{{message}}

{{--    <div v-for="student in students">--}}
{{--        @{{ student.name }}--}}
{{--        <favourite-product :person="student" ></favourite-product>--}}
{{--    </div>--}}


{{--    <school-description :persons="students"></school-description>--}}
        <school-description v-for="student in students" :key="student.name" :person="student"></school-description>
</div>

@stop
