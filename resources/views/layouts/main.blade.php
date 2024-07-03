<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/style.css">
  <script src="/js/script.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC:wght@100..400&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="font-sans antialiased">
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="/" class="navbar-brand">
        <img width="40px" src="/img/hdcevents_logo.svg" alt="HDC Events">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Eventos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/events/create">Criar Eventos</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">Meus Eventos</a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="POST">
              @csrf
              <a class="nav-link" href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
            </form>
          </li>
          @endauth
          @guest
          <li class="nav-item">
            <a class="nav-link" href="/login">Entrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Cadastrar</a>
          </li>
          @endguest
        </ul>
      </div>
    </nav>
  </header>
<main>
  <div class="container-fluid">
    <div class="row">
      @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
      @endif
      @yield('content')
    </div>

  </div>
  <footer>
    <p>
      &copy; 2024 HDC Events
    </p>
  </footer>
</main>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>