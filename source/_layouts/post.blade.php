<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,500,700|Source+Code+Pro" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="container m1 p3">
            <div class="content centered post-content">

                <h1 class="text-centered">{{ $page->title }}</h1>
                <p class="text-centered text-medium text-sm color-dark-grey">{{ date('jS F Y', $page->date) }} &bull; {{ $page->category }}</p>

                <div class="divider centered mt-1 mb-3"></div>

                @yield('post')
            </div>
        </div>
    </body>
</html>
