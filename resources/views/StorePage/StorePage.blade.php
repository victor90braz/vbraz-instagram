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
            <h1 class="store-name">My Awesome Store</h1>
            <p class="store-bio">Welcome to our Instagram Store! Discover amazing products.</p>
            <ul class="store-stats">
                <li><strong>Followers:</strong> 10,000</li>
                <li><strong>Posts:</strong> 100</li>
                <li><strong>Following:</strong> 500</li>
            </ul>
        </header>

        <section class="store-posts">
            <!-- Individual Post Items -->
            <div class="post">
                <img src="post_image1.jpg" alt="Post 1">
                <p class="post-description">Check out our latest product!</p>
            </div>

            <div class="post">
                <img src="{{ asset('/public/images/post-example.jpeg') }}" width="50px" height="50px" alt="Post 2">
                <p class="post-description">Special offer this week!</p>
            </div>

            <!-- Add more posts here -->
        </section>

        <footer>
            <p>&copy; 2023 My Awesome Store</p>
        </footer>
    </body>
</html>
