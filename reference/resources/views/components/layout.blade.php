<!doctype html>

<html>

<head>

    @include('includes.head')
    <title>{{ $title ?? 'Todo Manager' }}</title>
    @stack('custom-styles')
    @stack('custom-scripts')
</head>

<body>

<div class="container">


    <h1>Todos</h1>
    <hr/>
    {{ $slot }}


</div>
</body>

</html>
