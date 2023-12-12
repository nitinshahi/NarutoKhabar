<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="/frontend/assets/style.css" />
    <script src="/frontend/assets/my-script.js"></script>
  </head>
  <body>
<header class="page-title">
      <a href="#">
        <img src="frontend/src/logo/logo.png" alt="Naruto Khabar" />
        <h1>Naruto Khabar</h1>
      </a>
</header>
<nav class="header">
      <ul>
        <li><a href="{{url('/test')}}"><span></span>Konoha</a></li>
        <li><a href="#"><span></span>Senoga</a></li>
        <li><a href="#"><span></span>Kumoga</a></li>
        <li><a href="#"><span></span>Iwaga</a></li>
        <li><a href="#"><span></span>Kiriga</a></li>
      </ul>
</nav>