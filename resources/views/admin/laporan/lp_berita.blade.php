@extends('admin.layout.app')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>PSB <small>SMA NEGRI 1 SERUI</small></h3>
              </div>
            </div>
            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Laporan Berita <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">Download File :
                            <div class="card-box table-responsive"> 
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                        <th>No</th>
                          <!-- <th>ID Berita</th> -->
                          <th>Tanggal Publish</th>
                          <th>Judul Berita</th>
                          <th>Author</th>
                          
                          <th>Kategori</th>
                          <th>Gambar</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                      @foreach($berita as $b)
                        <tr>
                          <td>{{ $b->id }}</td>
                          <td>{{ \Carbon\Carbon::parse( $b->tanggal)->format('d-m-Y') }}</td>
                          <td>{{ $b->judul }}</td>
                          <td>{{ $b->author }}</td>
                          <td>{{ $b->nama_kategori }}</td>
                          <td><img src="{{ asset('storage/'.$b->foto) }}" alt="" class="img-responsive" width="140px" ></td>
                        </tr>
                     @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>   
          </div>
        </div>
        <!-- /page content -->

@endsection