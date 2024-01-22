@extends('layout.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tenda</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Barang</a></li>
              <li class="breadcrumb-item active">Data Tenda</li>
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
                {!! (isset($tenda))? method_field('PUT') : '' !!}
                
                <div class="form-group">
                    <label>Merk Tenda</label>
                    <input class="form-control @error('merk_tenda') is-invalid @enderror" value="{{ isset($tenda)? $tenda->merk_tenda : old('merk_tenda') }}" name="merk_tenda" type="text" /> 
                    @error('merk_tenda')
                        <span class="error invalid-feedback">{{ $message }} </span> 
                    @enderror
                </div>

                <div class="form-group">
                    <label>Kapasitas Tenda</label>
                    <input class="form-control @error('kapasitas') is-invalid @enderror" value="{{ isset($tenda)? $tenda->kapasitas : old('kapasitas') }}" name="kapasitas" type="text"/> 
                    @error('kapasitas')
                        <span class="error invalid-feedback">{{ $message }} </span> 
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>Harga Sewa/hari</label>
                    <input class="form-control @error('sewaperhari') is-invalid @enderror" value="{{ isset($tenda)? $tenda->sewaperhari : old('sewaperhari') }}" name="sewaperhari" type="text"/> 
                    @error('sewaperhari')
                        <span class="error invalid-feedback">{{ $message }} </span> 
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>Stok Tenda</label>
                    <input class="form-control @error('stok') is-invalid @enderror" value="{{ isset($tenda)? $tenda->stok : old('stok') }}" name="stok" type="text"/> 
                    @error('stok')
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