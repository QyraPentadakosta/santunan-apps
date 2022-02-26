@extends('layouts.admin.main')
@section('container')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{url('')}}/user/tambah-pengajuan" method="post">
                            @method('post')
                            @csrf
                            <div class="card-body">

                                <h1 class="card-title mb-5">Tambah Pengajuan Santunan</h1>

                                <div class="mb-3 row">
                                    <label for="example-number-input" class="col-md-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-md-10">
                                        <input class="form-control" name="nama" type="text" placeholder="Masukan Nama Lengkap" id="example-number-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-number-input" class="col-md-2 col-form-label">NIK</label>
                                    <div class="col-md-10">
                                        <input class="form-control" name="nik" type="number" placeholder="Masukan NIK" id="example-number-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-number-input" class="col-md-2 col-form-label">NO KK</label>
                                    <div class="col-md-10">
                                        <input class="form-control" name="kk" type="number" placeholder="Masukan No KK" id="example-number-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-number-input" class="col-md-2 col-form-label">Surat Kematian</label>
                                    <div class="col-md-10">
                                        <input class="form-control" name="surat_kematian" type="file" placeholder="" id="example-number-input">
                                    </div>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary" style="float: right">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
</div>
@endsection
