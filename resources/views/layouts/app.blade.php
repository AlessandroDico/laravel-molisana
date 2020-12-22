<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>titolo</title>
    </head>
    <body>
        <header>
            @include('partials.header')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @include('partials.footer')
        </footer>
    </body>
</html>
