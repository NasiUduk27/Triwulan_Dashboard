@extends('layout.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Barang yang tidak ada di list</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Others</a></li>
                            <li class="breadcrumb-item active">Data Others</li>
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
                        {!! isset($others) ? method_field('PUT') : '' !!}

                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input class="form-control @error('nama') is-invalid @enderror"
                                value="{{ isset($others) ? $others->nama : old('nama') }}" name="nama" type="text" />
                            @error('nama')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Jumlah</label>
                            <input class="form-control @error('jumlah') is-invalid @enderror"
                                value="{{ isset($others) ? $others->jumlah : old('jumlah') }}" name="jumlah" type="text" />
                            @error('jumlah')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Merk</label>
                            <input class="form-control @error('merk') is-invalid @enderror"
                                value="{{ isset($others) ? $others->merk : old('merk') }}" name="merk"
                                type="text" />
                            @error('merk')
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
