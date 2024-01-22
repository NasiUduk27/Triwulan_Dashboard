@extends('layout.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Sleeping Bag</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Barang</a></li>
              <li class="breadcrumb-item active">Data Sleeping Bag</li>
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
                {!! (isset($sb))? method_field('PUT') : '' !!}
                
                <div class="form-group">
                    <label>Merk Sleeping Bag</label>
                    <input class="form-control @error('merk_sb') is-invalid @enderror" value="{{ isset($sb)? $sb->merk_sb : old('merk_sb') }}" name="merk_sb" type="text" /> 
                    @error('merk_sb')
                        <span class="error invalid-feedback">{{ $message }} </span> 
                    @enderror
                </div>

                <div class="form-group">
                    <label>Warna</label>
                    <input class="form-control @error('warna') is-invalid @enderror" value="{{ isset($sb)? $sb->warna : old('warna') }}" name="warna" type="text"/> 
                    @error('warna')
                        <span class="error invalid-feedback">{{ $message }} </span> 
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>Harga Sewa/hari</label>
                    <input class="form-control @error('sewaperhari') is-invalid @enderror" value="{{ isset($sb)? $sb->sewaperhari : old('sewaperhari') }}" name="sewaperhari" type="text"/> 
                    @error('sewaperhari')
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