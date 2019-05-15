<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.css')  }}">

</head>
<body>
<main>
    <header class="header">
        <h1 class="title">Day Off Planner</h1>

        <h2 class="subtitle">@yield('title')</h2>
    </header>

    <section class="content">
        @yield('content')
    </section>
</main>
</body>
</html>
