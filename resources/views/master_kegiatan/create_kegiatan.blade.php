@extends('layout.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Kegiatan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
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
                        {{-- {!! isset($master_kegiatan) ? method_field('PUT') : '' !!} --}}

                        <div class="form-group">
                            <label for="tahun_aggaran">Tahun Anggaran</label>
                            <select class="form-control select2" style="width: 100%;" id="tahun_anggaran"
                                name="tahun_anggaran">
                                @php
                                    $startYear = 2022;
                                    //date('Y'); // Tahun mulai (tahun sekarang)
                                    $endYear = $startYear + 5; // Tambahkan 5 tahun ke depan (ganti sesuai kebutuhan)
                                @endphp

                                @for ($year = $startYear; $year <= $endYear; $year++)
                                    <option value="{{ $year }}"
                                        {{ old('tahun_anggaran') == $year ? 'selected' : '' }}>
                                        {{ $year }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pilih Program</label>
                            <select name="program"class="form-control select2">
                                <option value=""></option>
                                @foreach ($data as $d)
                                    <option value="{{ $d->id }}">{{ $d->nama_program }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Rekening Kegiatan</label>
                            <input class="form-control @error('nama') is-invalid @enderror"
                                value="{{ isset($master_kegiatan) ? $master_kegiatan->nama : old('nama') }}" name="nama"
                                type="text" />
                            @error('nama')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nama Kegiatan</label>
                            <input class="form-control @error('jumlah') is-invalid @enderror"
                                value="{{ isset($master_kegiatan) ? $master_kegiatan->jumlah : old('jumlah') }}"
                                name="jumlah" type="text" />
                            @error('jumlah')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>

                        <button class="btn btn-primary" type="submit">Simpan</button>
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
