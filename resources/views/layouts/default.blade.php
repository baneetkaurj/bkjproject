<!doctype html>
<html lang="en">

@include('includes.head')

<body>

<div class="container">


    <main role="main">
        @yield('content')
    </main>
    @include('includes.jsfooter')
    <footer>
        @include('includes.footer')
    </footer>
</div>
</body>
</html>