<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div id="app">
      <div class="container">
        <div class="whitebar py-4 d-flex align-items-center">
          <img src="{{ asset('img/logo.png') }}"/>
          <div class="whitebar__information ml-auto d-flex align-items-center mt-2">
            <div class="callcenter d-flex align-items-start mr-5">
              <img src="{{ asset('img/call.png') }}" alt="callcenter">
              <div class="callcenter__detail ml-2">
                <p class="pa-0 mb-0">Customer support & sales</p>
                <h6 class="font-weight-bold mt-1">(0281) 635602</h6>
              </div>
            </div>
            <div class="email d-flex align-items-start">
              <img src="{{ asset('img/envelope.png') }}" alt="email">
              <div class="email__detail ml-2">
                <p class="pa-0 mb-0">Email</p>
                <h6 class="font-weight-bold mt-1">banyumasbkmm@yahoo.com</h6>
              </div>
            </div>
          </div>
        </div>
      </div>  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
          <a class="nav-item nav-link navbar--custom__link" href="#">Beranda</a>
          <a class="nav-item nav-link navbar--custom__link" href="#">Profil Kami</a>
          <a class="nav-item nav-link navbar--custom__link" href="#">Fasilitas dan Pelayanan</a>
          <a class="nav-item nav-link navbar--custom__link" href="#">Jadwal Dokter</a>
          <a class="nav-item nav-link navbar--custom__link" href="{{ url('/berita') }}">Berita</a>
          <a class="nav-item nav-link navbar--custom__link" href="#">Kontak</a>
        </div>
      </div>
    </div>
  </nav>
  <main>
    @yield('content')
  </main>
  </div>
</body>
</html>
