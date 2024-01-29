@extends('layout.template')
@push('custom_css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>KEGIATAN</h1>
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
        <div class="card-body">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <form action="/kegiatan" method="GET">
                        <input type="kegiatan" id="kegiatan" name="kegiatan" class="form-control" placeholder="Cari...">
                    </form>
                </div>

                <a href="{{ url('kegiatan/create') }}" class="btn btn-sm btn-success my-2">Tambah Kegiatan Baru</a>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">DataTable with minimal features & hover style</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Rek Program</th>
                                                    <th>Nama Program</th>
                                                    <th>Rek Kegiatan</th>
                                                    <th>Nama Kegiatan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                {{-- @if ($master_kegiatan->count() > 0)
                                                    @foreach ($master_kegiatan as $i => $t)
                                                        <tr>
                                                            <td>{{ ++$i }}</td>
                                                            <td>{{ $t->nama }}</td>
                                                            <td>{{ $t->jumlah }}</td>
                                                            <td>{{ $t->merk }}</td>
                                                            <td>
                                                                <!-- Bikin tombol edit dan delete -->
                                                                <a href="{{ url('/kegiatan/' . $t->id . '/edit') }}"
                                                                    class="btn btn-sm btn-warning">edit</a>

                                                                <form method="POST"
                                                                    action="{{ url('/kegiatan/' . $t->id) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                                        onclick="confirmDelete()">hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else --}}
                                                <td>1</td>
                                                <td> 123.456</td>
                                                <td>llala</td>
                                                <td>xxxcx</td>
                                                <td>ssw</td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                                                </td>
                                            </tbody>
                                            <tbody>
                                                <td>2</td>
                                                <td>345.678</td>
                                                <td>njanjdddc</td>
                                                <td>xxncjsndcxcx</td>
                                                <td>ssdmskmksdkcmsdcnmdsw</td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                                                </td>
                                            </tbody>

                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
        </div>
    </div>
@endsection

@push('custom_js')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
