@extends('layout.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Pendaki</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Pendaki</a></li>
                            <li class="breadcrumb-item active">Data Pendaki</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">TAMBAH</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ $url_form }}">
                        @csrf
                        {!! isset($pendaki) ? method_field('PUT') : '' !!}

                        <div class="form-group">
                            <label>NIK</label>
                            <input class="form-control @error('NIK') is-invalid @enderror"
                                value="{{ isset($pendaki) ? $pendaki->NIK : old('NIK') }}" name="NIK" type="text" />
                            @error('NIK')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nama Pendaki</label>
                            <input class="form-control @error('nama') is-invalid @enderror"
                                value="{{ isset($pendaki) ? $pendaki->nama : old('nama') }}" name="nama" type="text" />
                            @error('nama')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input class="form-control @error('alamat') is-invalid @enderror"
                                value="{{ isset($pendaki) ? $pendaki->alamat : old('alamat') }}" name="alamat"
                                type="text" />
                            @error('alamat')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>No Hp</label>
                            <input class="form-control @error('no_hp') is-invalid @enderror"
                                value="{{ isset($pendaki) ? $pendaki->no_hp : old('no_hp') }}" name="no_hp"
                                type="text" />
                            @error('no_hp')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>

                        <button class="btn btn-primary" type="submit">Simpan</button>



                        <!-- /.card-body -->
                        <div class="card-footer">
                            Terima Kasih
                        </div>
                        <!-- /.card-footer-->
                </div>
                <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection

@push('custom_css')
    <style>
        th {}

        /* .card{
          background:green;
          color:aliceblue;
          transition: 0.5s;
      }

      .card:hover{
          background: aqua;
          color: blue;
          transform:scale(0.9);
      } */
    </style>
@endpush

@push('custom_js')
    {{-- <script>
  alert('Halaman Home')
</script> --}}
@endpush
