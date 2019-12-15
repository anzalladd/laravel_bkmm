<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@extends('layouts.navbar')
@section('content')
  <div class="header">
    <div class="container">
      <h1 class="text-white font-weight-bold">Heal, Support and<br> 
        Balance Your Life</h1>
      <button class="btnInfo">Info Lainnya</button>
    </div>
  </div>
  <div class="container">
    <div class="cardGroup row">
      <div class="col-xl-4">
        <div class="card card--custom">
          <div class="card__main">
            <img src="{{ asset('img/icon1.png') }}" alt="icon">
            <h4>Cari Dokter</h4>
            <p>Kami menyediakan fasilitas 
              pencarian jadwal dokter 
            untuk memudahkan 
            anda dalam melihat 
            jadwal dokter yang anda inginkan.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card card--custom">
          <div class="card__main">
            <img src="{{ asset('img/icon2.png') }}" alt="icon2">
            <h4>Pelayanan Medis</h4>
            <p>Mulai dari fasilitas kesehatan 
              mendasar hingga unit-unit 
              perawatan khusus.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card card--custom">
          <div class="card__main">
            <img src="{{ asset('img/icon3.png') }}" alt="icon3">
            <h4>Kritik dan Saran</h4>
            <p>Kritik dan Saran anda akan 
              sangat membantu pengembangan 
              RumahSakit kami.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="about">
      <div class="row">
        <div class="col-xl-6">
          <div class="about__title">
            <h1>Tentang Kami</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quo doloremque assumenda facilis explicabo expedita ex ipsa dolores commodi. Aspernatur quibusdam totam recusandae odio ea consequuntur cumque. Aut, quam magni!</p>
            <button class="btnInfo">Info lainnya</button>
          </div>
        </div>
        <div class="col-xl-6 d-flex justify-content-end">
          <div class="about__img">
            <img src="{{ asset('img/about.png') }}" alt="test">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="profil">
    <div class="container">
      <h1 class="profil__title text-white font-weight-bold text-center">Profil Dokter</h1>
      <div class="row mt-5">
        <div class="col-xl-4 text-center">
          <img src="{{ asset('img/doctor1.png') }}" alt="doctor1">
          <h4 class="mt-3 text-white font-weight-bold">Dr. Budhi Supraptono</h4>
          <h5 class="text-white">Spesialis Mata</h5>
        </div>
        <div class="col-xl-4 text-center">
          <img src="{{ asset('img/doctor2.png') }}" alt="doctor1">
          <h4 class="mt-3 text-white font-weight-bold">Dr. Layla Haris</h4>
          <h5 class="text-white">Spesialis Anak</h5>
        </div>
        <div class="col-xl-4 text-center">
          <img src="{{ asset('img/doctor2.png') }}" alt="doctor1">
          <h4 class="mt-3 text-white font-weight-bold">DR. Suryati</h4>
          <h5 class="text-white">Spesialis Gigi</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="news">
    <div class="container">
      <h1 class="font-weight-bold text-center">Berita Terkini</h1>
      <div class="row">
        <div class="col-xl-4">
          <div class="card">
            <div class="card__bg">
              <img src="{{ asset('img/main-news.png') }}" alt="main-news">
            </div>
            <div class="card__main main--custom">
              <h4>Cari Dokter</h4>
              <p>Kami menyediakan fasilitas 
                pencarian jadwal dokter 
              untuk memudahkan 
              anda dalam melihat 
              jadwal dokter yang anda inginkan.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card__bg">
              <img src="{{ asset('img/main-news.png') }}" alt="main-news">
            </div>
            <div class="card__main main--custom">
              <h4>Pelayanan Medis</h4>
              <p>Mulai dari fasilitas kesehatan 
                mendasar hingga unit-unit 
                perawatan khusus.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card__bg">
              <img src="{{ asset('img/main-news.png') }}" alt="main-news">
            </div>
            <div class="card__main main--custom">
              <h4>Kritik dan Saran</h4>
              <p>Kritik dan Saran anda akan 
                sangat membantu pengembangan 
                RumahSakit kami.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="article">
    <div class="container">
      <h1 class="font-weight-bold text-center">Artikel Kesehatan</h1>
      <div class="row">
        <div class="col-xl-6">
          <div class="cardArticle" style="background-image:url({{ asset('img/main-news.png') }})">
            <h2>Keratoplasty</h2>
            <p>Apakah glaukoma? Glaukoma merupakan salah satu penyakit mata yang diakibatkan karena kenaikan tekanan bola mata...</p>
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="cardArticle" style="background-image:url({{ asset('img/other-news.png') }})">
            <h2>Amblyopia</h2>
            <p>Apakah glaukoma? Glaukoma merupakan salah satu penyakit mata yang diakibatkan karena kenaikan tekanan bola mata...</p>
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="cardArticle" style="background-image:url({{ asset('img/main-news.png') }})">
            <h2>Low Vision</h2>
            <p>Apakah glaukoma? Glaukoma merupakan salah satu penyakit mata yang diakibatkan karena kenaikan tekanan bola mata...</p>
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="cardArticle" style="background-image:url({{ asset('img/main-news.png') }})">
            <h2>Glaukoma</h2>
            <p>Apakah glaukoma? Glaukoma merupakan salah satu penyakit mata yang diakibatkan karena kenaikan tekanan bola mata...</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.footer')
@endsection