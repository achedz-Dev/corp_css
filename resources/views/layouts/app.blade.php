<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'UMPSA Corporate CSS') }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <div class="umpsa-app">
    <header class="umpsa-topbar">
      <div class="umpsa-shell umpsa-topbar__inner">
        <a class="umpsa-brand" href="{{ route('home') }}" aria-label="UMPSA Corporate CSS">
          <span class="umpsa-brand__mark">U</span>
          <span class="umpsa-brand__text">
            <span class="umpsa-brand__name">UMPSA Corporate CSS</span>
            <span class="umpsa-brand__meta">Official system interface foundation</span>
          </span>
        </a>
        <nav class="umpsa-nav" aria-label="Primary navigation">
          <a href="{{ route('home') }}#tokens" @if(request()->routeIs('home')) aria-current="page" @endif>Tokens</a>
          <a href="{{ route('home') }}#components">Components</a>
          <a href="{{ route('home') }}#forms">Forms</a>
          <a href="{{ route('login') }}" @if(request()->routeIs('login')) aria-current="page" @endif>Login Mockup</a>
        </nav>
      </div>
    </header>

    <main>
      @yield('content')
    </main>
  </div>
</body>
</html>
