<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>App name - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    <!-- Styles -->

</head>
<body>

<div class="container" style="text-align: center">
    <ul class="nav nav-tabs" style="">
        <li role="presentation"><a href="/">Home</a></li>
        <li role="presentation"><a href="/products">Produkty</a></li>
        <li role="presentation"><a href="/pages">Strony</a></li>
    </ul>

</div>

<div class="container">

    @yield('content')

</div>

</body>
</html>
