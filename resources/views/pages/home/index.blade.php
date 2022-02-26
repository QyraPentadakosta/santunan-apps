@extends('layouts.main')
@section('container')


    <!-- banner-style-one -->
    <section class="banner-style-one" id="home">
        <div class="container">
            <div class="content-box">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <span class="floted-text">e-Santunan</span>
                            <h3>Selamat Datang di eSantunan Kematian. </h3>
                            <div class="text">Untuk pengajuan santunan, sudah bisa dilakukan penginputan. Bagi operator desa, yang belum mengisi Data Penandatangan Surat, dimohon untuk mengisi terlebih dahulu Penandatangan (Nama Kepala Desa/Lurah) dan Jabatan Penandatangan pada menu Profil. Terima kasih.-</div>
                            <div class="btn-box" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500"><a href="{{url('')}}/login" class="btn-style-one">Get Started</a></div>
                        </div>
                    </div>
                </div>
                <div class="image-box">
                    <figure class="image flot-bob-y"><img src="{{asset('')}}image/depan.png" alt=""></figure>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-style-one end -->


    <!-- creative-section -->
    <section class="creative-section" id="tentang" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="content-block">
                        <div class="title-block">
                            <span class="floated-text">Tentang e-Santunan</span>
                            <h3 style="color: #6e6870">Tentang e-Santunan</h3>
                        </div>
                        <p style="color: #6e6870">E-Sakti adalah Aplikasi Santunan Kematian yang digunakan sebagai media warga Kabupaten Batang untuk mengajukan permohonan santunan kematian. Masyarakat miskin yang meninggal dunia akan mendapatkan santunan kematian sebesar Rp. 1.000.000 (Satu Juta Rupiah).</p>
                        <p style="color: #6e6870">Persyaratan yang dibutuhkan yakni KTP serta Kartu Keluarga (KK) Almarhum/Almarhumah dan Ahli Waris. Proses pengajuan santunan melalui desa setempat dan akan diverifikasi oleh Dinas Sosial Kabupaten Batang.</p>
                        {{-- <div class="fact-counter clearfix">
                            <div class="counter-block wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <h4>Agency Result</h4>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="20"></span><span>k</span>
                                </div>
                            </div>
                            <div class="counter-block wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <h4>Work history</h4>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="10"></span><span>k</span>
                                </div>
                            </div>
                            <div class="counter-block wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <h4>ward-winning</h4>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="99"></span><span>%</span>
                                </div>
                            </div>
                        </div>
                        <div class="btn-box wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms"><a href="#" class="btn-style-one">Capabilities</a></div> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-block wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                        {{-- <figure class="image-box alter-image"><img src="{{asset('')}}image/logo.png" alt=""></figure> --}}
                        <figure class="image-box paroller"><img src="{{asset('')}}image/depan2.png"  alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- creative-section end -->


    <!-- agency-section -->
    <section class="agency-section" id="pengajuan">
        <div class="container">
            <div class="sec-title centred">
                <h2>Cara Pengajuan</h2>
                <p>Berikut kami jelaskan tentang tata cara pengajuan permohonan santunan kematian</p>
            </div>
            <div class="inner-content">
                <div class="single-item">
                    <div class="row">
                        <div class="col-xl-4 col-lg-12 col-md-12 image-column">
                            <figure class="image-box paroller"><img src="{{asset('')}}image/alur.jpeg" style="width: 100%" alt=""></figure>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-2 content-column">
                            <div class="content-box wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <h2><a href="#">Prosedur Permohonan Santunan Kematian</a></h2>
                                    <ul>
                                        <li><strong>1.</strong> Ahli Waris / Keluarga melaporkan berita meninggal dunia kepada Ketua RT</li>
                                        <li><strong>2.</strong> Ketua RT membuat berita acara laporan kematian yang ditujukan ke Kepala Desa</li>
                                        <li><strong>3.</strong> Kepala desa membuat permohonan santunan</li>
                                        <li><strong>4.</strong> Upload data dukung untuk permohonan santunan kematian</li>
                                        <li><strong>5.</strong> Permohonan dikirim melalui aplikasi esakti</li>
                                        <li><strong>6.</strong> Setleah permohonan dikirim, ditunggu sampai status permohonan berubah menjadi "setuju dicairkan"</li>
                                        <li><strong>7.</strong> Jika status telah berubah, selanjutnya ahli waris membawa bukti asli data dukung yang diupload ke dinsos untuk mencairkan santunan</li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- agency-section end -->


    <!-- pricing-section -->
    <section class="pricing-section" id="syarat">
        <div class="shape-box">
            <div class="bubble"></div>
            <img src="{{asset('')}}assets/images/icons/pricing-shape-1.png" alt="" class="pricing-shape-one">
            <img src="{{asset('')}}assets/images/icons/pricing-shape-2.png" alt="" class="pricing-shape-two">
        </div>
        <div class="container">
            <div class="sec-title text-center">
                <span class="floated-text">Syarat</span>
                <h2>Syarat Permohonan Santunan Kematian</h2>
            </div>
            <div class="tabs-box">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="sec-title">
                                <h2>Syarat Sah :</h2>
                                <p>Syarat sah yang berhak mengajukan Permohonan Santunan Kematian adalah Warga Miskin yang terdaftar di Basis Data Terpadu (BDT) Kemisikinan di Kabupaten Batang</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="tabs-content">
                            <div class="tab active-tab clearfix" id="tab-2">
                                <div class="pricing-table">
                                    <div class="table-head">
                                        {{-- <span>Year</span> --}}
                                        <h3>Syarat Pendukung :</h3>
                                        {{-- <div class="price">$79</div> --}}
                                    </div>
                                    <div class="table-content">
                                        <ul>
                                           <li>Fotokopi KTP Almarhum / Almarhumah</li>
                                           <li>Fotokopi KTP Ahli Waris</li>
                                           <li>Fotokopi KK Almarhum / Almarhumah</li>
                                           <li>Fotokopi KK Ahli Waris</li>
                                           <li>Surat Keterngan Meninggal Dunia dari desa setempat (by Aplikasi)</li>
                                           <li>Surat Permohonan Santunan Kematian (by Aplikasi)</li>
                                        </ul>
                                        {{-- <a href="#" class="bye-btn"><i class="fa fa-check"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-section end -->

    <!-- faq-section -->
    <section class="faq-section" id="umum">
        <div class="container">
            <div class="inner-content">
                <div class="sec-title text-center">
                    <h2>Pertanyaan Umum</h2>
                </div>
                <ul class="accordion-box">
                    <li class="accordion block active-block">
                        <div class="acc-btn active">
                            <div class="icon-outer">
                                <span class="icon fa fa-plus"></span>
                            </div>
                            Bagaimana cara mengajukan Permohonan Santunan?
                        </div>
                        <div class="acc-content current">
                            <div class="content">
                                <div class="text">
                                    <p>Presedur permohonan dan syarat bisa dilihat pada kolom menu Cara Pengajuan dan Persyaratan.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn"><div class="icon-outer"><span class="icon fa fa-plus"></span></div>
                        Apakah semua warga Kab. Batang berhak mengajukan Permohonan Santunan Kematian?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">Yang berhak mengajukan permohonan santunan kematian adalah Warga Miskin yang masuk dalam Database Basis Data Terpadu Kemiskinan.</div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn"><div class="icon-outer"><span class="icon fa fa-plus"></span></div>Apabila warga benar-benar miskin, tapi tidak masuk database, Apakah bisa mengajukan Permohonan Santunan Kematian?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    <p>Warga benar-benar miskin tapi tidak masuk dataabase BDT dapat mengajukan permohonan santunan kematian, dari desa dapat mengisi permohonan santunan khusus warga yang tidak masuk dalam BDT, kemudian TIm Kabupaten akan melakukan verifikasi ke lapangan apakah warga tersebut benar-benar masuk kategori miskin, apablila lolos permohonan santunan akan disetujui. Namun perlu diketahui, untuk warga yang tidak masuk kategori miskin, jangan mencoba-coba untuk mengajukan permohonan khusus, karena tim yang turun langsung dari Bupati Batang, termasuk bagi operator sistem, jangan memasukkan permohonan yang secara jelas warga tersebut tidak masuk kategori miskin.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 faq-content">
                    <div class="content-box">
                        <div class="inner-box">
                            <h4>Tidak mendapat jawaban?</h4>
                            <div class="text">Kami dapat membantu! Kirim pesan kepada kami dan kami akan segera menghubungi Anda kembali.</div>
                            <a href="contact.html">Hubungi kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-section end -->

    <!-- call-to-action -->
    {{-- <section class="call-to-action" id="cek">
        <figure class="image-box flot-bob-y"><img src="images/resource/call-to-action-1.png" alt=""/></figure>
        <div class="container">
            <div class="inner-box">
                <div class="title-block">
                    <span>Cek Data</span>
                    <h3>Cek Penerima Santunan?</h3>
                </div>
                <div class="call-to-action-form default-form">
                    <form action="/cek-data" method="post">
                        @method('get')
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Ketik nik almarhum/almarhumah" required>
                        </div>
                        <div class="form-group message-btn" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <button class="btn-style-one" data-toggle="modal" data-target="#penerimaan" type="submit">Cek Data</button>
                        </div>
                    </form>
                </div>

                @if ($data == 1)
                <div class="card mt-5" style="width: 100%">
                    <div class="card-body">
                      <h5 class="card-title" style="text-align: center">Card title</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                @else

                @endif

                <div class="title-block mt-5">
                    <h3>Tracking Permohonan Santunan</h3>
                </div>
                <div class="call-to-action-form default-form">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Ketik nik almarhum/almarhumah" required>
                        </div>
                        <div class="form-group message-btn" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <button class="btn-style-one" data-toggle="modal" data-target="#permohonan"  type="submit">Cek Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- call-to-action end -->

    {{-- <div class="modal fade" id="penerimaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="permohonan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
    </div> --}}

@endsection
