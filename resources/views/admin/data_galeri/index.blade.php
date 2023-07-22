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
        @include('sweetalert::alert')
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Galeri <small>SMA NEGRI 1 SERUI</small></h2>
                  <ul class="nav navbar-right panel_toolbox"> </ul>
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
                          <div class="col-sm-12">
                          <a href="{{ route ('admin.tambah.galeri') }}" class="btn btn-primary"  role="button">Tambah Data</a>
                            <div class="card-box table-responsive">
                            <h2>Data Galeri <small>Users</small></h2>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <!-- <th>ID Berita</th> -->
                          <th>Nama</th>
                          <th>Tanggal</th>
                          <th>Foto</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($galeri as $g)
                        <tr>
                          <td>{{ $g->id }}</td>
                          <td>{{ $g->judul }}</td>
                          <td>{{ $g->tanggal }}</td>
                          <td><img src="{{ asset('storage/'.$g->foto) }}" alt="" class="img-responsive" width="140px" ></td>
                          <td align="center">
                          <!-- <button type="button" class="btn btn-outline-success"><a href="#">Detail</button>
                          <button type="button" class="btn btn-outline-primary"><a href="#">Edit</button> -->
                          <button type="button" class="btn btn-outline-danger">
                            <a href="{{ route('admin.galeri.delete',['id'=>$g->id]) }}" onclick="return confirm('Yakin Hapus data')">Hapus</button>
                          
                          </td>
                        </tr>
                     @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
           
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection