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
                  <h2>Jurusan <small>SMA NEGRI 1 SERUI</small></h2>
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
                          <a href="{{ route ('admin.tambah.jurusan') }}" class="btn btn-primary"  role="button">Tambah Data</a>
                            <div class="card-box table-responsive">
                            <h2>Data Jurusan</h2>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Jurusan</th>
                          <th>Kuota</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                      @foreach($jurusan as $j)
                        <tr>
                          <td>{{ $j->id }}</td>
                          <td>{{ $j->nama }} </td>
                          <td>{{ $j->kuota }}</td>
                          <td>
                          <button type="button" class="btn btn-outline-primary"><a href="{{ route('admin.jurusan.edit',['id'=>$j->id]) }}">Edit</button>
                          <button type="button" class="btn btn-outline-danger">
                            <a href="{{ route('admin.jurusan.delete',['id'=>$j->id]) }}" onclick="return confirm('Yakin Hapus data')">Hapus</button>
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