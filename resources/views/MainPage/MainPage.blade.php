<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VBRAZ INSTAGRAM</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            *{
                box-sizing: border-box;
                margin: 0;
            }
            body{
                border: 1px solid black
            }
        </style>
    </head>
    <body>
        <header>
            <nav>
                <a href="{{ config('configViewRoutes.mainPage') }}">Main Page</a>
                <a href="{{ config('configViewRoutes.aboutUsPage') }}">About US</a>
            </nav>
            <H1>VBRAZ INSTAGRAM</H1>
        </header>
    </body>
</html>
