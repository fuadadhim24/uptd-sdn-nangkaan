<!DOCTYPE html>
<!-- <html lang="en"> -->
<html translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPTD SPF SDN Nangkaan Kec. Bondowoso | Menumbuhkan Potensi, Mewujudkan Mimpi</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img') }}/favicon.png" rel="icon">
    <link href="{{ asset('assets/img') }}/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <!-- vendor files -->
    <link href="{{ asset('vendor') }}/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('vendor') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('vendor') }}/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('vendor') }}/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('vendor') }}/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('vendor') }}/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting.css" />
    <link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting-cells.css" />
    <script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>


    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css') }}/landingpage.css">
</head>

<body>
    <!-- floating wa -->
    <a href="https://wa.me/6287840199095" class="whatsapp-float" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>
    <!-- end floating wa -->

    <!-- header section -->
    <!-- header section -->
    <header id="header" class="header d-flex align-items-center fixed-top active">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <img src="{{ asset('img') }}/logo.png" alt="">
                <!-- Uncomment the line below if you also wish to use an text logo -->
                <!-- <h1 class="sitename">TheEvent</h1>  -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('/') }}">Beranda<br></a></li>
                    <li class="dropdown"><a href="#" class="active"><span>Tentang</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <!-- <li><a href="#">Sekolah</a></li>  -->
                            <!-- <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Visi Misi</a></li>
                    <li><a href="#">Kepemimpinan Sekolah</a></li>
                    <li><a href="#">Perlindungan Anak</a></li>
                    <li><a href="#">Inklusi dan Diversitas</a></li>
                    <li><a href="#">Bekerjasama</a></li>
                    <li><a href="#">Berita dan Media</a></li>
                  </ul>
                </li> -->
                            <li><a href="{{ route('kepala-sekolah') }}">Sambutan Kepala Sekolah</a></li>
                            <li><a href="{{ route('guru') }}">Guru</a></li>
                            <li><a href="{{ route('fasilitas') }}">Fasilitas</a></li>
                            <li><a href="{{ route('visi-misi') }}">Visi dan Misi</a></li>
                            <li><a href="{{ route('ekstrakulikuler') }}">Ekstrakulikuler</a></li>
                            <!-- <li><a href="#">Berita dan Media</a></li> -->
                        </ul>
                    </li>
                    <!-- <li><a href="#tentang">Tentang</a></li> -->
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#ppdbModal">Pendaftaran</a></li>
                    <li><a href="{{ route('/') }}">Akademik</a></li>
                    <li><a href="{{ route('/') }}">Prestasi</a></li>
                    <li><a href="{{ route('karya') }}">Karya, Atletik & Aktivitas</a></li>
                    <li><a href="{{ route('survey') }}">Survey</a></li>
                    <li><a href="https://wa.me/6287840199095" target="_blank">Hubungi Kami</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="cta-btn d-none d-sm-block" href="{{ route('login') }}">Sign In</a>

        </div>
    </header>
    <!-- end header section -->

    <!-- Modal -->
    <div class="modal fade" id="ppdbModal" tabindex="-1" aria-labelledby="ppdbModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ppdbModalLabel">Poster Pendaftaran PPDB</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="path/to/your/poster.jpg" class="img-fluid" alt="Poster PPDB">
                    <!-- Ganti `path/to/your/poster.jpg` dengan URL gambar poster yang sesuai -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a href="http://wa.me/6287840199095"
                            target="_blank">Hubungi Kami</a></button>
                </div>
            </div>
        </div>
    </div>
    <main class="main">
        <div class="page-title" data-aos="fade"
            style="background-image: url({{ asset('assets/img') }}/page-title-bg.webp );">
            <div class="container position-relative">
                <h1>Sambutan Kepala Sekolah</h1>
                <!-- <p>Bakat dan minat siswa kami berkembang melalui berbagai kegiatan kreatif dan olahraga.</p> -->
                <p class="mt-2">UPTD SPF SDN Nangkaan Kec. Bondowoso</p>

            </div>
        </div><!-- End Page Title -->
        <!-- ======= start box Section ======= -->
        <section class="info-box py-0 mt-4">
            <div class="container-fluid">

                <div class="row">

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3>{{ $message->title }}<br><strong>Kepala Sekolah</strong></h3>
                            <p>
                                Selamat datang di SD Nangkaan! Kami berusaha untuk menciptakan lingkungan belajar yang
                                mendukung pertumbuhan dan kesuksesan setiap anak.
                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse"
                                        data-bs-target="#accordion-list-1"><span>Apa yang Membuat SD Nangkaan
                                            unggul?</span></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show"
                                        data-bs-parent=".accordion-list">
                                        <p>
                                            {{ $message->message }}
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style="background-image: url({{ asset('storage') }}/principal_welcome_messages/{{ $message->photo_path }});">
                        &nbsp;</div>
                </div>

            </div>
        </section>
        <!-- End Box Section -->

        <!-- identitas sekolah section -->
        <section class="identitas-sekolah-box py-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 order-lg-2">
                        <div class="content">
                            <h3>Identitas Sekolah</h3>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr class="highlight-row">
                                        <td>Nama Sekolah</td>
                                        <td>SDN Nangkaan Bondowoso</td>
                                    </tr>
                                    <tr>
                                        <td>Status Sekolah</td>
                                        <td>Negeri</td>
                                    </tr>
                                    <tr>
                                        <td>NSS</td>
                                        <td>101052201023</td>
                                    </tr>
                                    <tr>
                                        <td>NPSN</td>
                                        <td>20521686</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Sekolah</td>
                                        <td>Jln. Brigpol Sudarlan NO. 457</td>
                                    </tr>
                                    <tr>
                                        <td>Desa / Kelurahan</td>
                                        <td>Nangkaan</td>
                                    </tr>
                                    <tr>
                                        <td>Kecamatan</td>
                                        <td>Bondowoso</td>
                                    </tr>
                                    <tr>
                                        <td>Kabupaten / Kota</td>
                                        <td>Bondowoso</td>
                                    </tr>
                                    <tr>
                                        <td>Provinsi</td>
                                        <td>Jawa Timur</td>
                                    </tr>
                                    <tr>
                                        <td>Kode Pos</td>
                                        <td>68215</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal SK Pendirian</td>
                                        <td>17 Agustus 1976</td>
                                    </tr>
                                    <tr>
                                        <td>SK Ijin Operasional</td>
                                        <td>Perbup. No. 34 Tahun 2018</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal SK Ijin Operasional</td>
                                        <td>16 April 2018</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end identitas sekolah -->
    </main>

    <footer id="footer" class="footer dark-background" style="margin-top: 100px">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 col-md-6 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">UPTD SPF SDN Nangkaan</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>Jln. Brigpol Sudarlan NO. 457</p>
                            <p>Nangkaan Barat, Nangkaan, Kec. Bondowoso</p>
                            <p class="mt-3"><strong>Telepon:</strong> +62 123 456 789</p>
                            <p><strong>Email:</strong> <a href="mailto:info@sdnnangkaan.sch.id"
                                    style="color: white;">info@sdnnangkaan.sch.id</a></p>
                        </div>
                    </div>


                    <!-- Useful Links -->
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Akses Cepat</h4>
                        <ul>
                            <li><a href="{{ route('/') }}">Beranda</a></li>
                            <li><a href="{{ route('karya') }}">Karya, Atletik & Aktivitas</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#ppdbModal">Pendaftaran</a>
                            </li>
                            <li><a href="https://wa.me/6287840199095" target="_blank">Kontak</a></li>
                        </ul>
                    </div>

                    <!-- Our Services -->
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Tentang Kami</h4>
                        <ul>
                            <li><a href="{{ route('kepala-sekolah') }}">Sambutan Kepala Sekolah</a></li>
                            <li><a href="{{ route('guru') }}">Guru</a></li>
                            <li><a href="{{ route('fasilitas') }}">Fasilitas</a></li>
                            <li><a href="{{ route('visi-misi') }}">Visi dan Misi</a></li>
                            <li><a href="{{ route('ekstrakulikuler') }}">Ekstrakulikuler</a></li>
                        </ul>
                    </div>

                    <!-- Support -->
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Dukungan</h4>
                        <ul>
                            <li><a href="https://wa.me/6287840199095" target="_blank">Hubungi Kami</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div>
                        © Copyright <strong><span>UPTD SPF SDN Nangkaan</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>

    </footer>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor') }}/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('vendor') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('vendor') }}/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('vendor') }}/isotope-layout/isotope.pkgd.min.js"></script>
    {{-- <!-- <script src="{{ asset('vendor') }}/swiper/swiper-bundle.min.js"></script> --> --}}
    <script src="{{ asset('vendor') }}/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('vendor') }}/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js') }}/landingpage.js"></script>

    <!-- vendor js -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>
