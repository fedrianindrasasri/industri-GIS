@extends('../layout/master')

@section('title','Form Edit Daftar Industri')
    
@section('content-wrapper')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Industri</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Industri</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('main-content')
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Industri</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="/daftar-industri/update/{{ $industri->No }}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="card-body">
            <div class="form-group">
              <label for="">Nama PT</label>
              <input type="text" class="form-control" name="nama" id="" placeholder="Masukkan Nama PT" value="{{ $industri->nama }}">

              @if($errors->has('nama'))
                <div class="text-danger">
                    {{ $errors->first('nama')}}
                </div>
              @endif
            </div>


            <div class="form-group">
              <label for="">Alamat PT</label>
              <input type="text" class="form-control" name="alamat" id="" placeholder="Masukkan Alamat PT" value="{{ $industri->alamat }}">
              
              @if($errors->has('alamat'))
                  <div class="text-danger">
                      {{ $errors->first('alamat')}}
                  </div>
              @endif
            </div>

            <div class="form-group">
              <label for="">X PT</label>
              <input type="text" class="form-control" name="x" id="" placeholder="Masukkan X PT" value="{{ $industri->x }}">
              
              @if($errors->has('x'))
                <div class="text-danger">
                    {{ $errors->first('x')}}
                </div>
              @endif
            </div>

            <div class="form-group">
              <label for="">Y PT</label>
              <input type="text" class="form-control" name="y" id="" placeholder="Masukkan Y PT" value="{{ $industri->y }}">
              
              @if($errors->has('y'))
                <div class="text-danger">
                    {{ $errors->first('y')}}
                </div>
              @endif
            </div>

            <div class="form-group">
              <label for="">Link Foto PT</label>
              <input type="text" class="form-control" name="foto" id="" placeholder="Masukkan Link Foto PT" value="{{ $industri->foto }}">
            
              @if($errors->has('foto'))
                <div class="text-danger">
                    {{ $errors->first('foto')}}
                </div>
              @endif
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('daftar-industri') }}">
              <button type="button" class="btn btn-default">Kembali</button>
            </a>
            
          </div>
        </form>
      </div>
      </div>
  </div>
</div>

@endsection