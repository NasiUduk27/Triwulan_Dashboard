@extends('layout.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Indikator Kegiatan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"> Home</a></li>
                            <li class="breadcrumb-item"><a href="#"> Tables</a></li>
                            <li class="breadcrumb-item active">Data tables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">LIST</h3>
                </div>

                <div class="card-body">
                    <form action="" style="display: flex">
                        <div class="col-2">
                            <select name="tahun" class="form-control" placeholder="Cari Tahun">
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-success">Pilih Tahun</button>
                        </div>
                    </form>

                    <a href="{{ url('indkegiatan/create') }}" class="btn btn-sm btn-success my-2">Tambah Indikator</a>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Rekening</th>
                                <th>Kegiatan</th>
                                <th>Indikator </th>
                                <th>Target</th>
                                <th>Satuan</th>
                                <th>Pagu Anggaran (Rp)</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>1</td>
                            <td>1234567</td>
                            <td>Lalala</td>
                            <td>wer</td>
                            <td>2</td>
                            <td>2</td>
                            <td>23.00</td>
                            <td>
                                <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                            </td>
                            {{-- @if ($indikator_kegiatan->count() > 0)
                                @foreach ($indikator_kegiatan as $i => $t)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $t->merk_sb }}</td>
                                        <td>{{ $t->warna }}</td>
                                        <td>{{ $t->sewaperhari }}</td>
                                        <td>
                                            <!-- Bikin tombol edit dan delete -->
                                            <a href="{{ url('/indkegiatan/' . $t->id . '/edit') }}"
                                                class="btn btn-sm btn-warning">edit</a>

                                            <form method="POST" action="{{ url('/indkegiatan/' . $t->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirmDelete()">hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">Data tidak ada</td>
                                </tr>
                            @endif --}}
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    {{-- <div class="col-md-12">
                        {{ $indikator_kegiatan->links() }}
                    </div> --}}
                </div>
                <!-- /.card-body -->
                {{-- <div class="card-footer">
                    Terima Kasih
                </div> --}}
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

    <script>
        function confirmDelete() {
            if (confirm('Apakah Anda yakin? Data akan dihapus. Apakah Anda ingin melanjutkan?')) {
                document.getElementById('form').submit();
            } else {
                event.preventDefault();
            }
        }
    </script>
@endpush
