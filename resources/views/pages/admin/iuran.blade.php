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
                                    <h1 class="card-title mb-5">Data Iuaran Anggota</h1>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" style="float: right" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="bx bx-plus-medical" style=""></i><strong>Tambah Data Iuaran Anggota</strong></button>
                                </div>
                            </div>

                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Pembayaran</th>
                                        <th>Tanggal Pembayaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($iuran as $item => $key)
                                    <tr>
                                        <td>{{$item+1}}</td>
                                        <td>{{$key->nik}}</td>
                                        <td>{{$key->nama}}</td>
                                        <td>{{$key->bulan}}, {{$key->tahun}}</td>
                                        <td>{{Helper::tanggal($key->created_at)}}</td>
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
       <form action="{{url('')}}/admin/iuran" method="post">
        @method('post')
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myMoalLabel">Tambah Data Iuaran Anggota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Nama</label>
                                <div class="col-md-10">
                                    <select class="form-select" name="id_user">
                                        @foreach ($user as $item)
                                        <option>--Nama Anggota--</option>
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-md-2 col-form-label">Tahun</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="tahun" type="number" placeholder="Masukan tahun pembayaran" id="example-number-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Bulan</label>
                                <div class="col-md-10">
                                    <select class="form-select" name="bulan">
                                        <option>--Bulan--</option>
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-md-2 col-form-label">Jumlah Iuran</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="jumlah" type="number" placeholder="Masukan jumlah pembayaran iuran" id="example-number-input">
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
