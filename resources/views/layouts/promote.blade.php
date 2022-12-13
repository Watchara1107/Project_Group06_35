<!DOCTYPE html>
<html>
<head>
@include('include.promote.head')
</head>
<body>
    <header>
        @include('include.promote.header')
    </header>

    <div>

    @yield('content')

    </div>

    <footer class="row">
    @include('include.promote.footer')
    </footer>
</body>
</html>