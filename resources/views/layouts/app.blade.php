<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME', 'Laravel Project') }} - @yield('title', 'My page')</title>

    @vite(['resources/js/app.js'])

    @yield('css')
</head>

<body>
    <div class="wrapper">

        @include('partials.header')


        <main>
            @yield('main-content')
        </main>



        @include('partials.footer')


        @yield('js')
    </div>
</body>

</html>
