<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HELLO BITCHES</title>
    <link href="/css/app.css" rel="stylesheet"/>
</head>

<body>
<header>
    @include ('layouts.header')
</header>

<div id="content">
    @yield ('content')
</div>

<footer>
    @include ('layouts/footer')
</footer>

<script src="/js/app.js"></script>
@yield ('static')
</body>

</html>