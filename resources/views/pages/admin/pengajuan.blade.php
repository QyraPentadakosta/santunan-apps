@extends('layouts.admin.main')
@section('container')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h1 class="card-title mb-5">Data Pengajuan Klaim</h1>
                            {{-- <p class="card-title-desc">The Buttons extension for DataTables
                                provides a common set of options, API methods and styling to display
                                buttons on a page that will interact with a DataTable. The core library
                                provides the based framework upon which plug-ins can built.
                            </p> --}}

                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Yang Mengajukan</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>No. KK</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item => $key)
                                    <tr>
                                        <td>{{$item+1}}</td>
                                        <td>{{Helper::nama($key->id_user)}}</td>
                                        <td>{{$key->nama}}</td>
                                        <td>{{$key->nik}}</td>
                                        <td>{{$key->kk}}</td>
                                        <td>
                                            <button class="btn btn-success btn-rounded btn-sm waves-effect waves-light">Terima</button>
                                            <button class="btn btn-danger btn-rounded btn-sm waves-effect waves-light">Tolak</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
@endsection
