@extends('layouts.app')

@section('content')

 <!-- Start Alignment -->
 <div class="container-fluid bg-light text-dark">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner" style="margin-top: -25px">
        <div class="carousel-item active">
          <img src={{ asset('img/bayar1.jpg') }} class="d-block w-100" style="height: 500px; object-fit: cover" alt="..." />
          <div class="carousel-caption">
            <h5 class="text-dark">Point Of Sale Management By Kelompok 2</h5>
            <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quia!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src={{ asset('img/bayar2.jpg') }} class="d-block w-100" style="height: 500px; object-fit: cover" alt="..." />
          <div class="carousel-caption">
            <h5 class="text-dark">Point Of Sale Management</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore expedita perferendis magni ab sit itaque autem quam, aspernatur magnam, hic iste eveniet. Quam enim et debitis accusamus, vitae provident non.</p>
          </div>
        </div>
        <div class="carousel-item">
            <img src={{ asset('img/bayar3.jpg') }} class="d-block w-100" style="height: 500px; object-fit: cover" alt="..." />
          <div class="carousel-caption">
            <h5 class="text-dark">POS Application</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, sed.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  <!-- End Alignment -->

   <!-- Jumbotron Home -->
   <section class="jumbotron text-center shadow-sm mt-5">
    <img src={{ asset('img/kelompok3.jpeg') }} alt="Shikimori-san" width="200px" class="rounded-circle img-thumbnail" style="height: 150px" />
    <h1 class="display-4">Kelompok 2</h1>
    <p class="lead">M.Naufhal.Zakwan | Daffa Aditya R | Farhan Cahya N</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>
  <!-- End Jumbot Home -->

   
    <!-- Section Card -->

  <section>
     <!-- About -->
     <section class="min-vh-100 d-flex align-items-center py-lg-0 py-5 mb-5" id="about">
        <div class="container">
          <div class="row align-items-center g-5 g-lg-0">
            <div class="col-lg-7 order-lg-1 order-2">
              <h1 class="main-header">
                Welcome To
                <br />
                <span class="text-success">POS(Point Of Sale Management Application)</span>
                <br>
                <a class="btn btn-primary" href="{{ url('/cart') }}">
                    Click Here To Access
                </a>
              </h1>
            </div>

            <div class="col-lg-5 order-lg-1 order-2">
                <h1 class="main-header">
                 <img src={{ asset('img/bayar3.jpg ')}} style="width:650px; border-radius:3px;" class="shadow-sm p-3 mb-5 bg-body rounded" alt="">             
                </h1>
              </div>
          </div>
        </div>
</section>

  {{-- Footer --}}
  <footer class=" text-white text-center pb-3" style="background-color: #00cba9; margin:0;">
    <p>Created By<i class="bi bi-suit-heart-fill text-danger"></i> <a class="text-white fw-bold" href="https://www.instagram.com/nfhlz._/"> Kelompok 2 </a></p>
  </footer>
  {{-- Footer End --}}
@endsection
