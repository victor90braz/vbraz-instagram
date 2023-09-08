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
                <a href="{{ config('routes.mainPage') }}">Main Page</a>
                <a href="{{ config('routes.aboutUsPage') }}">About US</a>
                <a href="{{ config('routes.storePage') }}">Store</a>
            </nav>
            <H1>VBRAZ INSTAGRAM</H1>
            <h2>About US</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Laborum libero blanditiis dicta omnis aspernatur corrupti perferendis corporis cumque voluptate,
                saepe delectus ipsa nisi placeat eaque non quo in perspiciatis quos.
            </p>
        </header>
    </body>
</html>
