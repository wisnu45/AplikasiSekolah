@extends('user.app')
@section('content')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Jurusan</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Jurusan</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
  <div class="container">

    <div class="row">

      <!-- <div class="col-lg-3 col-md-6">
        <div class="box">
          <h3>Free</h3>
          <h4><sup>$</sup>0<span> / month</span></h4>
          <ul>
            <li>Aida dere</li>
            <li>Nec feugiat nisl</li>
            <li>Nulla at volutpat dola</li>
            <li class="na">Pharetra massa</li>
            <li class="na">Massa ultricies mi</li>
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>
      </div> -->
      @foreach($jurusan as $j)
      <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
        <div class="box featured">
          <h3>{{$j->nama}}</h3>
          <h4>{{$j->kuota}}<span> / Kuota</span></h4>
          <ul>
            <li>Aida dere</li>
            <li>Nec feugiat nisl</li>
            <li>Nulla at volutpat dola</li>
            <li>Pharetra massa</li>
            <li class="na">Massa ultricies mi</li>
          </ul>
          <div class="btn-wrap">
            <a href="{{ route ('register') }}" class="btn-buy">Daftar Sekarang</a>
          </div>  
        </div> 
      </div>
      @endforeach
    </div>
  </div>
</section><!-- End Pricing Section -->

</main><!-- End #main -->
@endsection