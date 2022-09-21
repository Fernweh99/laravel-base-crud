@php
  $links = config('header_menu');
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="icon" href="{{asset('images/dc-logo.png')}}" sizes="16x16">
  <title>Dc Comics | @yield('head-title')</title>
</head>
<body>
  <header>
    <nav class="container">
      <div class="col-img h-100">
        <img src="{{asset('images/dc-logo.png')}}" alt="Dc Logo">
      </div>
      <div class="col-link h-100">
        <ul class="h-100">
          @foreach ($links as $link)
          <li class="h-100">
            <a href="{{$link['url']}}" class="{{str_contains((request()->url()), $link['url']) ? 'active' : ''}}">{{$link['text']}}</a>
          </li>
          @endforeach
        </ul>
      </div>
    </nav>
  </header>
  <div class="jumbotron"></div>