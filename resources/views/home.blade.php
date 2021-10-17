@extends('layouts.index')
@section('container')
  <!--Jumbo-->

  <div class="p-5 mb-4" style="background-image:url('img/bekpatu.jpg'); height: 90vh;">
    <div class="container-fluid py-5">
      <h1 class="display-6 fw-bold text-light text-end shadow-text">PILIH SEPATU KESUKAANMU</h1>
      <p class="col-md fs-6 text-light text-end shadow-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>

  <!--Slide 1-->

  <div class="container text-center my-3">
    <img src="img/bekpatu2.png" class="img-fluid rounded-3">
    <h1 class="fw-bolder text-center my-2">MULAI CARI SEPATUMU</h1>
    <a class="btn btn-dark rounded-pill fw-bold">CARI SEKARANG</a>
  </div>

  <!--Slide 2-->

  <div class="container my-2">
    <div class="row text-center">
      <div class="col-sm-4 my-3">
        <img src="img/pria.webp" class="rounded img-fluid" style="object-fit:cover; height:450px; width:250px; object-position: left;">
        <p class="h4 fw-bolder">PRIA</p>
        <a class="btn btn-dark rounded-pill fw-bold">CARI</a>
      </div>
      <div class="col-sm-4 my-3">
        <img src="img/wanita.webp" class="rounded img-fluid" style="object-fit:cover; height:450px; width:250px; object-position: center;">
        <p class="h4 fw-bolder">WANITA</p>
        <a class="btn btn-dark rounded-pill fw-bold">CARI</a>
      </div>
      <div class="col-sm-4 my-3">
        <img src="img/anak.webp" class="rounded img-fluid" style="object-fit:cover; height:450px; width:250px; object-position: center;">
        <p class="h4 fw-bolder">ANAK-ANAK</p>
        <a class="btn btn-dark rounded-pill fw-bold">CARI</a>
      </div>
    </div>
  </div>
      
@endsection