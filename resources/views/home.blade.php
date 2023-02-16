@extends('layouts.main')

@section('container')


<section class="gradient-banner" style="background-image: linear-gradient(
        rgba(0,0,0,0.6),
        rgba(0,0,0,0.6)
        ),
        url('img/1.jpg'); background-repeat:no-repeat">

  <div class="container mt-1" id="beranda">
    <div class="row align-items-center">
      <div class="col-12 order-2 order-md-1 text-center text-md-left mt-5">
        <h2 class="text-white font-weight-bold mb-3">PPDB TP 2023-2024<br>SMK Wikrama Bogor</h2>
        <p class="text-white mb-5">Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik <b>PENDAFTARAN PPDB</b> dibawah ini! <br><strong>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</strong></p>
        <a href="/register" class="btn btn-main-md shadow-md bordered font-weight-bold">Pendaftaran PPDB</a>
      </div>

    </div>
  </div>
</section>

<section class="pt-0 position-relative pull-top mb-5" id="jumbotron-card">
  <div class="container">
    <div class="rounded shadow p-5 bg-white">
      <div class="row">
        <div class="col-lg-4 col-md-6 mt-0 text-center">
          <h3 class="font-weight-bold text-capitalize h5 ">MOTTO</h3>
          <p class="regular text-muted">Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
          <h3 class="font-weight-bold text-capitalize h5 ">AFIRMASI</h3>
          <p class="regular text-muted">Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri</p>
        </div>
        <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
          <h3 class="font-weight-bold text-capitalize h5 ">ATITUDE</h3>
          <p class="regular text-muted">Aku ada lingkunganku <br> bahagia</p>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection