<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <button>
        @yield('anchortag')
        </button>

    </nav>
    <header>
        <h1>HELLO WORLD!</h1>
    </header>
    <div>
        <h6>
            @yield('content')
        </h6>
    </div>
    <sidebar>
        @section('sidebar')
        <ul>
<li>
    A
</li>
<li>B</li>
<li>C</li>
    </ul>
    @show
</sidebar>
    <footer><h1>
    HELLO EARTH!
    </h1></footer>
</body>
</html>