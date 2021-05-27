<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - LARAVEL 1</title>
</head>
<body>
    <header>
        <h1>Header</h1>
        <hr/>
    </header>
    <section>
       @yield('content')
       <hr/>
    </section>
    <footer>
        Rodapé.
    </footer>
</body>
</html>