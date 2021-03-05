<!doctype html>
<html>

<head>

    @include('includes.head')
{{--    @includeIf('includes.head1')--}}
    @stack('custom-styles')
    @stack('custom-scripts')
{{--    @once('custom-scripts')--}}

</head>

<body>
    <div class="container">
        <header class="row">
            @include('includes.header')
{{--            @include('includes.header', ['status' => 'complete'])--}}

        </header>
        <div id="main" class="row">
            @yield('content')
        </div>
        <footer class="row">
            @include('includes.footer')

        </footer>

    </div>
</body>

</html>
