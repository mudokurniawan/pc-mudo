<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link rel = "stylesheet" type="text/css" href = "http://localhost/blog/public/css/css.css">
</head>
<body>
<header>
@include('layout.header')
</header>
<ul>
@section('sidebar')
<li>HTML</li>
<li>CSS</li>
<li>JS</li>
</ul>
@show
<div class="container">
@yield('content')
</div>
</body>
</html>