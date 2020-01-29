@extends('../layout/master')

@section('title','Daftar Industri')
    
@section('content-wrapper')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Industri</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Industri</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('main-content')
<section class="content">
    <div class="row">
    <div class="col-12">
        <!-- /.card -->

        <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h3 class="card-title">Data Industri Terdaftar</h3>
                </div>
                <div class="col-2">
                    <a href="{{ route('daftar-industri/tambah') }}">
                        <button type="button" class="btn btn-block btn-success">Tambah</button>
                    </a>
                </div>
            </div>
            
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>X</th>
                <th>Y</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($industri as $i)
            
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $i->nama }}</td>
                    <td>{{ $i->alamat }}</td>
                    <td>{{ $i->x }}</td>
                    <td>{{ $i->y }}</td>
                    <td><img src="{{ $i->foto }}" width="100"></td>
                    <td align="center">
                        <div class="btn-group">
                            <a class="btn btn-warning" href="/daftar-industri/edit/{{  $i->No }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a class="btn btn-danger" href="/daftar-industri/destroy/{{  $i->No }}">
                                <i class="fa fa-trash-o" aria-hidden="true" ></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>X</th>
                <th>Y</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
</div>
@endsection