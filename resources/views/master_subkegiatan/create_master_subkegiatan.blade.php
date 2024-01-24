@extends('layout.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data SubKegiatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Barang</a></li>
              <li class="breadcrumb-item active">Data Jaket</li>
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
                {!! (isset($master_subkegiatan))? method_field('PUT') : '' !!}
                
                <div class="form-group">
                    <label>Nomor Rekening</label>
                    <input class="form-control @error('rekening_program') is-invalid @enderror" value="{{ isset($master_subkegiatan)? $master_subkegiatan->rekening_program : old('rekening_program') }}" name="rekening_program" type="text" /> 
                    @error('rekening_program')
                        <span class="error invalid-feedback">{{ $message }} </span> 
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nama Program</label>
                    <input class="form-control @error('nama_program') is-invalid @enderror" value="{{ isset($master_subkegiatan)? $master_subkegiatan->nama_program : old('nama_program') }}" name="nama_program" type="text" /> 
                    @error('nama_program')
                        <span class="error invalid-feedback">{{ $message }} </span> 
                    @enderror
                </div>

                <div class="form-group">
                    <label>Rekening Kegiatan</label>
                    <input class="form-control @error('rekening_kegiatan') is-invalid @enderror" value="{{ isset($master_subkegiatan)? $master_subkegiatan->rekening_kegiatan : old('rekening_kegiatan') }}" name="rekening_kegiatan" type="text"/> 
                    @error('rekening_kegiatan')
                        <span class="error invalid-feedback">{{ $message }} </span> 
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>Nama Kegiatan</label>
                    <input class="form-control @error('nama_kegiatan') is-invalid @enderror" value="{{ isset($master_subkegiatan)? $master_subkegiatan->nama_kegiatan : old('nama_kegiatan') }}" name="nama_kegiatan" type="text"/> 
                    @error('nama_kegiatan')
                        <span class="error invalid-feedback">{{ $message }} </span> 
                    @enderror
                </div>

                <div class="form-group">
                    <label>Rekening SubKegiatan</label>
                    <input class="form-control @error('rekening_subkegiatan') is-invalid @enderror" value="{{ isset($master_subkegiatan)? $master_subkegiatan->rekening_subkegiatan : old('rekening_subkegiatan') }}" name="rekening_subkegiatan" type="text"/> 
                    @error('rekening_subkegiatan')
                        <span class="error invalid-feedback">{{ $message }} </span> 
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nama SubKegiatan</label>
                    <input class="form-control @error('nama_subkegiatan') is-invalid @enderror" value="{{ isset($master_subkegiatan)? $master_subkegiatan->nama_subkegiatan : old('nama_subkegiatan') }}" name="nama_subkegiatan" type="text"/> 
                    @error('nama_subkegiatan')
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
  th{
      
  }
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