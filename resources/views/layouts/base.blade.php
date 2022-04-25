<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>@yield('page.title' , config('app.name'))</title>
</head>
<body>
<div class="d-flex flex-column justify-content-between min-vh-100">


    @include('includes.header')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('includes.footer')
</div>

<script src="js/app.js"></script>
</body>
</html>
