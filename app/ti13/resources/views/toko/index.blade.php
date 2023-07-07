@extends('template/main')

@section('content1')
<link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre&display=swap" rel="stylesheet">
<style>
   body{
        background-color: #F9F9F9;
        font-family: 'Abhaya Libre', Arial;
    }
</style>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/img1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/img3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection

@section('content2')
<div class="row row-cols-2 row-cols-md-4 g-4 mb-5">
  <div class="col">
    <div class="card h-100">
      <img src="img/g1.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">KAUS KOMBINASI</h5>
        <p class="card-text">Rp.250.000</p>
        <a href="../resources/auth/login.blade.php" class="btn btn-primary btn-sm">Pesan Sekarang</a>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/g2.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">JEANS BALLOON FIT</h5>
        <p class="card-text">Rp.300.000</p>
        <a href="#" class="btn btn-primary btn-sm">Pesan Sekarang</a>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/g3.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">BLAZER WANITA</h5>
        <p class="card-text">Rp.500.000</p>
        <a href="#" class="btn btn-primary btn-sm">Pesan Sekarang</a>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/g4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">KEMEJA KAIN PERCA</h5>
        <p class="card-text">Rp.450.000</p>
        <a href="#" class="btn btn-primary btn-sm">Pesan Sekarang</a>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/g8.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SOMBRERO</h5>
        <p class="card-text">Rp.150.000</p>
        <a href="#" class="btn btn-primary btn-sm">Pesan Sekarang</a>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/g5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">GAUN RIMPEL</h5>
        <p class="card-text">Rp.350.000</p>
        <a href="#" class="btn btn-primary btn-sm">Pesan Sekarang</a>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/g6.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">CELANA PANJANG</h5>
        <p class="card-text">Rp.400.000</p>
        <a href="#" class="btn btn-primary btn-sm">Pesan Sekarang</a>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/g7.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">KACAMATA HITAM</h5>
        <p class="card-text">Rp.200.000</p>
        <a href="#" class="btn btn-primary btn-sm">Pesan Sekarang</a>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/g9.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">KALUNG RESIN WARNA</h5>
        <p class="card-text">Rp.100.000</p>
        <a href="#" class="btn btn-primary btn-sm">Pesan Sekarang</a>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/g10.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">KEMEJA MOTIF</h5>
        <p class="card-text">Rp.600.000</p>
        <a href="#" class="btn btn-primary btn-sm">Pesan Sekarang</a>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/g11.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">GAUN TULE </h5>
        <p class="card-text">Rp.800.000</p>
        <a href="#" class="btn btn-primary btn-sm">Pesan Sekarang</a>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/g12.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">TAS BAHU WANITA</h5>
        <p class="card-text">Rp.300.000</p>
        <a href="#" class="btn btn-primary btn-sm">Pesan Sekarang</a>
      </div>
    </a>
    </div>
  </div>
</div>
@endsection