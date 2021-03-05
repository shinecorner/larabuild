
<x-layout>
    <ul>

        @foreach ($tasks as $task)
            <li>{{ $task->number }}</li>

        @endforeach
            <h5> You must be the change you wish to see in the world </h5>
    </ul>
</x-layout>
