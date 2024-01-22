@extends('layout.template')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Sepatu</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Sepatu</a></li>
                            <li class="breadcrumb-item active">Data Sepatu</li>
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

                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <form action="/sepatu" method="GET">
                                <input type="sepatu" id="sepatu" name="sepatu" class="form-control"
                                    placeholder="Cari...">
                            </form>
                        </div>
                    </div>

                    <a href="{{ url('sepatu/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Merk</th>
                                <th>Ukuran</th>
                                <th>Warna</th>
                                <th>Harga Sewa</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($sepatu->count() > 0)
                                @foreach ($sepatu as $i => $t)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $t->merk }}</td>
                                        <td>{{ $t->ukuran }}</td>
                                        <td>{{ $t->warna }}</td>
                                        <td>{{ $t->harga_sewa }}</td>
                                        <td>
                                            <!-- Bikin tombol edit dan delete -->
                                            <a href="{{ url('/sepatu/' . $t->id . '/edit') }}"
                                                class="btn btn-sm btn-warning">edit</a>

                                            <form method="POST" action="{{ url('/sepatu/' . $t->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="confirmDelete()">hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">Data tidak ada</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        {{ $sepatu->links() }}
                    </div>
                </div>
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

    <script>
        function confirmDelete() {
            if (confirm('Apakah Anda yakin? Data akan dihapus. Apakah Anda ingin melanjutkan?')) {
                document.getElementById('form').submit();
            }else {
                event.preventDefault();
            }
        }
    </script>
@endpush
