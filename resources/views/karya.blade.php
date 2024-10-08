<!DOCTYPE html>
<!-- <html lang="en"> -->
<html translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPTD SPF SDN Nangkaan Kec. Bondowoso | Menumbuhkan Potensi, Mewujudkan Mimpi</title>

    <!-- Favicons -->
    <link href="{{asset('assets/img/logo-dikdasmen.png') }}" rel="icon">
    <link href="{{asset('assets/img/logo-dikdasmen.png') }}" rel="apple-touch-icon">

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
                {{-- <img src="{{ asset('img') }}/logo.png" alt=""> --}}
                <!-- Uncomment the line below if you also wish to use an text logo -->
                <!-- <h1 class="sitename">TheEvent</h1>  -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('/') }}">Beranda<br></a></li>
                    <li class="dropdown"><a href="#"><span>Tentang</span> <i
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
                    <li><a href="{{ route('akademik') }}">Akademik</a></li>
                    <li><a href="{{ route('/') }}">Prestasi</a></li>
                    <li><a href="{{ route('karya') }}" class="active">Karya, Atletik & Activities</a></li>
                    <li><a href="{{ route('survey') }}">Survey</a></li>
                    <li><a href="https://wa.me/6287840199095" target="_blank">Hubungi Kami</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="cta-btn d-none d-sm-block" href="{{ route('login') }}">Sign In</a>

        </div>
    </header>

    <!-- Modal -->
    <div class="modal fade" id="ppdbModal" tabindex="-1" aria-labelledby="ppdbModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ppdbModalLabel">Poster Pendaftaran PPDB</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($ppdbInformation && $ppdbInformation->file_path)
                        <img src="{{ asset('storage/ppdb/' . $ppdbInformation->file_path) }}" class="img-fluid"
                            alt="{{ $ppdbInformation->title }}">
                    @else
                        <p>No poster available at the moment.</p>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a href="http://wa.me/6287840199095"
                            target="_blank">Hubungi Kami</a></button>
                </div>
            </div>
        </div>
    </div>
    <main>
        <!-- activity Section -->
        <!-- Page Title -->
        <div class="page-title" data-aos="fade"
            style="background-image: url({{ asset('assets/img') }}/page-title-bg.webp );">
            <div class="container position-relative">
                <h1>Karya, Atletik & Aktivitas</h1>
                <p>Bakat dan minat siswa kami berkembang melalui berbagai kegiatan kreatif dan olahraga.</p>
                <p>UPTD SPF SDN Nangkaan Kec. Bondowoso</p>

            </div>
        </div><!-- End Page Title -->

        <section id="activity" class="activity section py-4 mt-4">


            <div class="container-fluid" data-aos="fade-up">

                <div class="row g-0">
                    <div class="col-lg-6 activity-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15806.643060537925!2d113.8052491!3d-7.9304544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6dd2b819c48eb%3A0xaff819504d67324b!2sSD%20Negeri%20Nangkaan!5e0!3m2!1sid!2sid!4v1722313965978!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-lg-6 activity-info">
                        <div class="row justify-content-center">
                            <div class="col-11 col-lg-8 position-relative">
                                <h3>Nangkaan Barat, Nangkaan, Kec. Bondowoso</h3>
                                <p>Dengan memberikan dukungan akademis dan emosional, guru memastikan setiap siswa
                                    mendapatkan perhatian yang diperlukan untuk tumbuh dan berkembang dengan baik.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container-fluid activity-gallery-container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-0">
                    @forelse ($karyas as $karya)
                        <div class="col-lg-3 col-md-4">
                            <div class="activity-gallery">
                                <a href="{{ asset('storage') }}/karya/{{ $karya->photo_path }}" class="glightbox"
                                    data-gall="activity-gallery">
                                    <img src="{{ asset('storage') }}/karya/{{ $karya->photo_path }}" alt=""
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <p class="text-center">No gallery items available.</p>
                        </div>
                    @endforelse
                </div>
            </div>


        </section><!-- /activity Section -->

    </main>


    <footer id="footer" class="footer dark-background">

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
    <script src="{{ asset('vendor') }}/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('vendor') }}/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('vendor') }}/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js') }}/landingpage.js"></script>

    <!-- vendor js -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>
