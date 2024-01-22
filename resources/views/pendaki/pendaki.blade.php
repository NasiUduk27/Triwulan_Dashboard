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
                            <form action="/pendaki" method="GET">
                                <input type="pendaki" id="pendaki" name="pendaki" class="form-control"
                                    placeholder="Cari...">
                            </form>
                        </div>
                    </div>

                    <a href="{{ url('pendaki/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No_hp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($pendaki->count() > 0)
                                @foreach ($pendaki as $i => $t)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $t->NIK }}</td>
                                        <td>{{ $t->nama }}</td>
                                        <td>{{ $t->alamat }}</td>
                                        <td>{{ $t->no_hp }}</td>
                                        <td>
                                            <!-- Bikin tombol edit dan delete -->
                                            <a href="{{ url('/pendaki/' . $t->id . '/edit') }}"
                                                class="btn btn-sm btn-warning">edit</a>

                                            <form method="POST" action="{{ url('/pendaki/' . $t->id) }}">
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
                        {{ $pendaki->links() }}
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
            } else {
                event.preventDefault();
            }
        }
    </script>
@endpush
