@extends('panitia.layout.app')
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
                    <h2>Data Calon Siswa<small>Users</small></h2>
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
                            <div class="card-box table-responsive">
					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>NO</th>
                          <th>TAHUN AJARAN</th>
                          <th>TGL DAFTAR</th>
                          <th>ID PENDAFTARAN</th>
                          <th>STATUS</th>
                          <th>NAMA SISWA</th>
                          <th>ASAL SEKOLAH</th>
                          <th>JURUSAN</th>
                          <th>TEMPAT LAHIR</th>
                          <th>TGL LAHIR</th>
                          <th>AGAMA</th>
                          <th>JK</th>
                          <th>NO.TLP</th>
                          <th>EMAIL</th>
                          <th>Nama Panitia</th>
                          <th>ALAMAT</th>
                          <th>FILE RAPORT</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($pendaftaran as $no=>$p)
                        <tr>
                        <td>{{ ++$no }}</td>   
                        <td>{{ $p->tahun_ajaran }}</td>               
                          <td>{{ \Carbon\Carbon::parse( $p->tgl_daftar)->format('d-m-Y') }}</td>
                          <td>{{ $p->kode_pcs }}</td>
                          <td>{{ $p->status }}</td>
                          <td>{{ $p->nama_siswa }}</td>
                          <td>{{ $p->asal_sekolah }}</td>
                          <td>{{ $p->nama_jurusan }}</td>
                          <td>{{ $p->tempat_lahir }}</td>
                          <td>{{\Carbon\Carbon::parse( $p->tgl_lahir )->format('d-m-Y')}}</td>
                          <td>{{ $p->agama }}</td>
                          <td>{{ $p->jk }}</td>
                          <td>{{ $p->no_tlp }}</td>
                          <td>{{ $p->email }}</td>
                          <td>{{ $p->nama_panitia }}</td>
                          <td>{{ $p->alamat }}</td>
                          <td><img src="{{ asset('storage/'.$p->file_raport) }}" alt="" class="img-responsive" width="100%" ></td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

        <!-- /page content -->
@endsection