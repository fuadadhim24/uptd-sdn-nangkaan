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
    <header id="header" class="header d-flex align-items-center fixed-top active">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <img src="{{ asset('img') }}/logo.png" alt="">
                <!-- Uncomment the line below if you also wish to use an text logo -->
                <!-- <h1 class="sitename">TheEvent</h1>  -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('/') }}">Home<br></a></li>
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
                    <li><a href="#gallery">Akademik</a></li>
                    <li><a href="#achievement">Prestasi</a></li>
                    <li><a href="{{ route('karya') }}">Karya, Atletik & Activities</a></li>
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
        <!-- section hero -->
        <section id="sub-hero">
            <div class="hero-container">
                <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                    data-bs-interval="5000">

                    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">

                        <!-- Slide 1 -->
                        <div class="carousel-item active"
                            style="background-image: url({{ asset('assets/img') }}/landingpage/sub-hero.jpg);">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <div class="row animate__animated animate__fadeInUp justify-content-center">
                                        <div class="horizontal-line animate__animated animate__fadeInUp"
                                            style="max-width: 90%;"></div>
                                        <div class="col-lg-4">
                                            <h2>Temukan Bakat Anak <span>Anda</span></h2>
                                        </div>
                                        <div class="col-lg-5">
                                            <p>Cari bakat dan minat yang menjadikan mereka bernilai dan memiliki
                                                kepercayaan diri.</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="">Selengkapnya ></a>
                                        </div>
                                    </div>

                                    <!-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> -->
                                    <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a> -->
                                </div>
                            </div>
                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bi bi-chevron-double-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bi bi-chevron-double-right" aria-hidden="true"></span>
                    </a>

                </div>
            </div>
        </section>


        <!-- ======= Counts Section ======= -->
        <section class="counts section-bg">
            <div class="container">
                <div class="container section-title" data-aos="fade-up">
                    <h2>Jumlah Ruang Kelas</h2>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-pencil-square"></i>
                            <div class="row">
                                <span data-purecounter-start="0" data-purecounter-end="1"
                                    data-purecounter-duration="1" class="purecounter"></span>

                            </div>
                            <p><strong>Ruang Kelas 1</strong> adalah awal dari perjalanan pendidikan dasar, di mana
                                siswa kami belajar untuk mengembangkan keterampilan sosial dan akademik dasar mereka
                                dengan penekanan pada membaca, menulis, dan berhitung.</p>
                            <!-- <a href="#">Find out more &raquo;</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-book"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Ruang Kelas 2</strong> adalah waktu di mana siswa kami mulai mengembangkan
                                keterampilan penulisan yang lebih kompleks, memperluas pengetahuan mereka dalam ilmu
                                pengetahuan dan matematika, serta mulai mengeksplorasi berbagai subjek yang menarik.</p>
                            <!-- <a href="#">Find out more &raquo;</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-boxes"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Ruang Kelas 3</strong> adalah tahap di mana siswa kami mulai mengembangkan
                                keterampilan kritis mereka dalam memecahkan masalah matematika dan sains, serta belajar
                                berkolaborasi dalam proyek-proyek tim yang kreatif.</p>
                            <!-- <a href="#">Find out more &raquo;</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-globe"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Ruang Kelas 4</strong> adalah tahun di mana siswa kami mulai memperdalam
                                pemahaman mereka tentang sejarah dan budaya, mengasah keterampilan interpersonal mereka,
                                dan mengeksplorasi minat akademik khusus mereka.</p>
                            <!-- <a href="#">Find out more &raquo;</a> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-laptop"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Ruang Kelas 5</strong> adalah tahun di mana siswa kami mulai mempersiapkan diri
                                untuk transisi ke tingkat pendidikan menengah, dengan mengeksplorasi minat dan bakat
                                mereka dalam mata pelajaran yang lebih kompleks dan mendalam.</p>
                            <!-- <a href="#">Find out more &raquo;</a> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-clipboard-data"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Ruang Kelas 6</strong> adalah tahun terakhir di SD kami, di mana siswa kami
                                menyelesaikan perjalanan dasar mereka dengan memperdalam pengetahuan akademik mereka,
                                mempersiapkan diri untuk ujian akhir, dan mempersiapkan langkah berikutnya menuju
                                pendidikan menengah.</p>
                            <!-- <a href="#">Find out more &raquo;</a> -->
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <section id="ruang-lain" class="ruang-lain section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Ruang Penunjang Akademik</h2>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-3">
                    @forelse ($facilities as $facility)
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <img src="{{ $facility->photo ? asset('storage/facilities/' . $facility->photo) : asset('assets/img/landingpage/fasilitas/default.jpg') }}"
                                    class="img-fluid" alt="{{ $facility->name }}">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>{{ $facility->name }}
                                        </h4>
                                        <span
                                            style="color: white; margin-bottom: 3em;">{{ $facility->description }}</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Team Member -->
                    @empty
                        <div class="col-12">
                            <p>No facilities available at the moment.</p>
                        </div>
                    @endforelse
                </div>
            </div>

        </section><!-- /ruang-lain Section -->


    </main>

    <footer id="footer" class="footer dark-background mt-4">

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
                            <li><a href="index.html">Beranda</a></li>
                            <li><a href="karya.html">karya</a></li>
                            <li><a href="#">Pendaftaran</a></li>
                            <li><a href="https://wa.me/6287840199095" target="_blank">Kontak</a></li>
                        </ul>
                    </div>

                    <!-- Our Services -->
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Tentang Kami</h4>
                        <ul>
                            <li><a href="sambutan.kepala.sekolah.html">Sambutan Kepala Sekolah</a></li>
                            <li><a href="guru.html">Guru</a></li>
                            <li><a href="guru.html">Fasilitas</a></li>
                            <li><a href="visi.misi.html">Visi dan Misi</a></li>
                            <li><a href="ekstrakulikuler.html">Ekstrakurikuler</a></li>
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
    <script src="{{ asset('vendor') }}/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js') }}/landingpage.js"></script>

    <!-- vendor js -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>
