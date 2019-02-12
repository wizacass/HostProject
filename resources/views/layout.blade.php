<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'HostProject')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    </head>
    <body>
        <nav class="navbar is-dark" role="navigation" style="padding-left: 1em">
            <div class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="/">Home</a>
                    <a class="navbar-item" href="/diary">Diary</a>
                    <a class="navbar-item" href="/tasks">Tasks</a>
                </div>
            </div>
        </nav>

        <div style="margin: 2em">
            <h1 class="title" style="text-align: center">@yield('heading')</h1>
            <br/>
            @yield('content')
        </div>
    </body>
</html>
