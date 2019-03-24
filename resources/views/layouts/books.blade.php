<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Publications & Subscribers')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <style>
        .gradient{
            background-image: linear-gradient(to right, hsl(171, 100%, 41%), hsl(204, 86%, 53%));
        }
        </style>
    </head>
    <body>
        <nav class="navbar is-dark" role="navigation" style="padding-left: 1em">
            <div class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="/">Home</a>
                    {{-- <a class="navbar-item" href="/diary">Diary</a> --}}
                    <a class="navbar-item" href="/tasks">Tasks</a>
                    <a class="navbar-item" href="/apps">JavaScript</a>
                </div>
            </div>
        </nav>

        <section class="hero is-info gradient">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title" style="text-align: center">@yield('heading')</h1>
                </div>
            </div>
        </section>
        <nav class="navbar is-primary gradient" role="navigation" style="padding-left: 1em">
            <div class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href=@yield('back-link', '/')>@yield('back-text', 'Home')</a>
                    <a class="navbar-item" href="/tasks/books/publications">Publications</a>
                    <a class="navbar-item" href="/tasks/books/subscribers">Subscribers</a>
                </div>
            </div>
        </nav>

        <div style="margin: 2em">
            @yield('content')
        </div>
    </body>
</html>
