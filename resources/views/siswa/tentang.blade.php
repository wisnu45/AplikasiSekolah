@extends('siswa.app')
@section('content')
<main id="main">
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Tentang</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>About</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row content">
      <div class="col-lg-6">
      <img src="{{ asset('user') }}/img/team/SMAN1SERUI.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <h2>Latar Belakang</h2>
          <p align="justify">
          SMA Negeri 1 Serui, merupakan salah satu Sekolah Menengah Atas Negeri 
                yang ada di Provinsi Papua, Indonesia. Sama dengan SMA 
                pada umumnya di Indonesia masa pendidikan sekolah di SMAN 1 Serui 
                ditempuh dalam waktu tiga tahun pelajaran, 
                mulai dari Kelas X sampai Kelas XII.
          </p>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Guru</h2>
      <p>Daftar Guru-guru</p>
    </div>

    <div class="row">

      <div class="col-lg-6">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="{{ asset('user') }}/img/team/team-1.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <p>Explicabo voluptatem mollitia et repellat</p>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4 mt-lg-0">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="{{ asset('user') }}/img/team/team-2.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Sarah Jhonson</h4>
            <span>Product Manager</span>
            <p>Aut maiores voluptates amet et quis</p>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="{{ asset('user') }}/img/team/team-3.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>William Anderson</h4>
            <span>CTO</span>
            <p>Quisquam facilis cum velit laborum corrupti</p>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="{{ asset('user') }}/img/team/team-4.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <p>Dolorum tempora officiis odit laborum officiis</p>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Team Section -->

</main><!-- End #main -->
@endsection