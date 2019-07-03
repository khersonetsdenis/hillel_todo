<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container" id="app">

    <header class="row">
        {{--@include('includes.header')--}}
    </header>

    <div id="main" class="container">
        @yield('content')
    </div>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>

</div>
</body>
</html>
