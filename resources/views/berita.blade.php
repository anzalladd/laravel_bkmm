<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@extends('layouts.navbar')
@section('content')
  <div class="container">
    <div class="row mt-4">
      <div class="col-xl-8">
        <div class="mainNews">
          <img src="{{ asset('img/main-news.png') }}" alt="main-news">
          <small class="date">Senin, 23 Agustus 2019</small>
          <h1>Pasien terkena penyakit katarak dan membutuhkan
            donasi</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl tincidunt eget nullam non. Quis hendrerit dolor magna eget est lorem ipsum dolor sit. Volutpat odio facilisis mauris sit amet massa. Commodo odio aenean sed adipiscing diam donec adipiscing tristique. Mi eget mauris pharetra et. Non tellus orci ac auctor augue. Elit at imperdiet dui accumsan sit. Ornare arcu dui vivamus arcu felis. Egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst quisque sagittis purus. Pulvinar elementum integer enim neque volutpat ac.

            Senectus et netus et malesuada. Nunc pulvinar sapien et ligula ullamcorper malesuada proin. Neque convallis a cras semper auctor. Libero id faucibus nisl tincidunt eget. Leo a diam sollicitudin tempor id. A lacus vestibulum sed arcu non odio euismod lacinia. In tellus integer feugiat scelerisque. Feugiat in fermentum posuere urna nec tincidunt praesent. Porttitor rhoncus dolor purus non enim praesent elementum facilisis. Nisi scelerisque eu ultrices vitae auctor eu augue ut lectus. Ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Et malesuada fames ac turpis egestas sed. Sit amet nisl suscipit adipiscing bibendum est ultricies. Arcu ac tortor dignissim convallis aenean et tortor at. Pretium viverra suspendisse potenti nullam ac tortor vitae purus. Eros donec ac odio tempor orci dapibus ultrices. Elementum nibh tellus molestie nunc. Et magnis dis parturient montes nascetur. Est placerat in egestas erat imperdiet. Consequat interdum varius sit amet mattis vulputate enim.
          <span><a href="#">Baca Selengkapnya</a></span>
          </p>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="otherNews">
          <h2>Berita Lainnya</h2>
          <div class="otherNews__content mt-5">
            <img src="{{ asset('img/news.png') }}" alt="news">
            <h4 class="mt-3">Doktor mata melaksanakan 
              operasi selama 24 jam</h4>
          </div>
          <div class="otherNews__content mt-5">
            <img src="{{ asset('img/news.png') }}" alt="news">
            <h4 class="mt-3">Doktor mata melaksanakan 
              operasi selama 24 jam</h4>
          </div>
          <div class="otherNews__content mt-5">
            <img src="{{ asset('img/news.png') }}" alt="news">
            <h4 class="mt-3">Doktor mata melaksanakan 
              operasi selama 24 jam</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.footer')
@endsection

<style>

.mainNews img{
  width: 100%;
  height: 400px;
}

.mainNews small{
  display: block;
  color: #818181;
  padding: 10px 0;
  font-size: 16px;
}

.mainNews p::first-letter{
  font-size: 30px;
  color: black;
}

.otherNews img{
  width: 100%;
  height: 200px;
}

</style>