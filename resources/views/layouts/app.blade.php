<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">

        <div class="container">

            @yield('content')

        </div>

    </div>
    @yield('footer')
</div>
</body>
</html>
