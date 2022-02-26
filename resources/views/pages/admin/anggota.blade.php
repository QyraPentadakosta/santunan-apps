@extends('layouts.admin.main')
@section('container')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <h1 class="card-title">Data Anggota</h1>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" style="float: right" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="bx bx-plus-medical" style=""></i><strong>Tambah Anggota</strong></button>
                                </div>
                            </div>

                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Tempat, Tanggal Lahir</th>
                                        <th>No. HP</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $item => $key)
                                    <tr>
                                        <td>{{$item+1}}</td>
                                        <td>{{$key->nik}}</td>
                                        <td>{{$key->name}}</td>
                                        <td>{{$key->ttl}}</td>
                                        <td>{{$key->hp}}</td>
                                        <td>
                                            @if ($key->jk == 'L')
                                                Laki-Laki
                                            @else
                                                Perempuan
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-rounded btn-sm waves-effect waves-light">Ubah</button>
                                            <button class="btn btn-danger btn-rounded btn-sm waves-effect waves-light">Hapus</button>
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

<!-- sample modal content -->
<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
       <form action="{{url('')}}/admin/anggota" method="post">
        @method('post')
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myMoalLabel">Tambah Anggota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Nama Lengkap</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="nama" type="text" placeholder="Masukan Nama Lengkap"
                                        id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-md-2 col-form-label">NIK</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="nik" type="number" placeholder="Masukan NIK" id="example-number-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-md-2 col-form-label">No KK</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="kk" type="number" placeholder="Masukan Nomor Kartu Keluarga" id="example-number-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-datetime-local-input" class="col-md-2 col-form-label">Tempat,Tanggal Lahir</label>
                                <div class="col-md-5">
                                    <input class="form-control" name="tempat" type="text" placeholder="Masukan Tempat Lahir"
                                        id="example-datetime-local-input">
                                </div>
                                <div class="col-md-5">
                                    <input class="form-control" name="tgl" type="date"
                                        id="example-datetime-local-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="email" type="email" placeholder="Masukan Email"
                                        id="example-email-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="hp" type="tel" placeholder="Masukan Telephone"
                                        id="example-tel-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-md-10">
                                    <select class="form-select" name="jk">
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-tel-input" class="col-md-2 col-form-label">Foto</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="foto" type="file" id="example-tel-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="password" type="password" placeholder="Masukan Password"
                                        id="example-password-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light">Tambah</button>
            </div>
        </div><!-- /.modal-content -->
       </form>
    </div>
</div><!-- /.end -->
@endsection
