@extends('layouts.admin.main')
@section('container')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="card-title mb-5">Cek Pengajuan</h1>
                                </div>
                            </div>

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
