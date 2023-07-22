@extends('user.app')
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
        <!-- <ul>
          <li><i class="ri-check-double-line"></i> Mencari kerja membuka usaha mandiri</li>
          <li><i class="ri-check-double-line"></i> Pekerja menggarap sektor perikanan ( kelautan )</li>
          <li><i class="ri-check-double-line"></i> Pekerja menggarap sektor pertanian (melalui kegiatan transmigrasi)</li>
        </ul>
        <p align="justify">
        Ketiga sektor merupakan kesempatan yang terbuka lebar karena 2/3 luas daerah Indonesia 
        adalah laut dan banyaknya SDA di Tanah Papua yang belum dikelola secara utuh. Alternatif
         pertama,  dimana pencari kerja membuka usaha sendiri adalah suatu langkah yang tepat tetapi
          sukar untuk diwujudkan karena banyaknya aspek yang mempengaruhinya, antara lain kompetensi 
          dan kemampuan yang dimiliki oleh pencari kerja tersebut masih rendah. Dalam usaha mewujudkan 
          altenatif yang pertama (pencari kerja membuka usaha mandiri) maka diperlukan suatu pendidikan
           dan pelatihan (Diklat) bagi pencari kerja yang berusia diatas 15 tahun (lulusan SLTP) dengan
            Program Keahlian yang layak jual dan sangat dibutuhkan dipasar kerja pada era sekarang maupun
             untuk masa-masa mendatang.
          
        </P>
        <h1>Sasaran Pengembangan</h1>
        <p align="justify">
        SMKN 3 Sorong Mengoptimalkan proses kegiatan belajar mengajar, karena ditunjang oleh peralatan yang
         memadai,kurikulum ( silabus ) yang mutahir dan tenaga pengajar yang kompeten
        </p>
        <h1>Bidang/Program Keahlian:</h1>
        <ul class="list-unstyled">
        <li>1.Teknik Otomotif Kendaraan Ringan</li>
        <li>2.Teknik Sepeda Motor</li>
        <li>3.Teknik Pemesinan</li>
        <li>4.Teknik Pengelasan</li>
        <li>5.Teknik Gambar Bangunan</li>
        <li>6.Teknik Perkayuan</li>
        <li>7.Teknik Konstruksi Batu Beton</li>
        <li>8.Teknik Alat Berat</li>
        <li>9.Teknik Elektronika Industri</li>
        <li>10.Teknik Instalasi Tenaga Listrik</li>
        <li>11.Teknik Audio Video</li>
        <li>12.Teknik Komputer dan Jaringan</li>
        </ul>
        <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p> -->
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

<!-- ======= Our Skills Section ======= -->

</main><!-- End #main -->
@endsection