<!DOCTYPE html>
<!-- <html lang="en"> -->
<html translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPTD SPF SDN Nangkaan Kec. Bondowoso | Menumbuhkan Potensi, Mewujudkan Mimpi</title>

    <!-- Favicons -->
    <link href="{{ asset('img') }}/favicon.png" rel="icon">
    <link href="{{ asset('img') }}/apple-touch-icon.png" rel="apple-touch-icon">

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
    <style>
        /* custom.css */
        .section-spacing {
            margin-bottom: 2rem;
            /* Adjust the value as needed */
        }

        .pricing-item-spacing {
            margin-bottom: 1.5rem;
            /* Adjust the value as needed */
        }
    </style>
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
                    <li><a href="{{ route('akademik') }}">Akademik</a></li>
                    <li><a href="{{ route('/') }}">Prestasi</a></li>
                    <li><a href="{{ route('karya') }}">Karya, Atletik & Activities</a></li>
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
    <!-- end header section -->
    <main class="main">
        <div class="page-title section-spacing" data-aos="fade"
            style="background-image: url({{ asset('img') }}/page-title-bg.webp);">
            <div class="container position-relative">
                <h1>Ekstrakulikuler</h1>
                <p class="mt-2">UPTD SPF SDN Nangkaan Kec. Bondowoso</p>
            </div>
        </div><!-- End Page Title -->

        <!-- Buy Tickets Section -->
        <section id="ekstrakulikuler" class="ekstrakulikuler section light-background section-spacing">
            <div class="container">
                @forelse ($extracurriculars as $index => $extracurricular)
                    @if ($index % 2 === 0)
                        <!-- Structure for even items -->
                        <div class="row gy-4 pricing-item pricing-item-spacing featured" data-aos="fade-up"
                            data-aos-delay="{{ $index * 100 }}">
                            <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                <h3>{{ $extracurricular->name }}</h3>
                            </div>
                            <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                <h4><sup>x</sup>{{ $extracurricular->pertemuan }}<span> Pertemuan / bulan</span></h4>
                            </div>
                            <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                <ul>
                                    @php
                                        // Decode JSON formatted data
                                        $benefits = json_decode($extracurricular->manfaat, true);
                                    @endphp
                                    @foreach ($benefits as $benefit)
                                        <li><i class="bi bi-check"></i> <span>{{ $benefit }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    @php
                                        // Check if the phone number starts with 0 and replace it with 62
                                        $phoneNumber = $extracurricular->nomor_handphone;
                                        if (strpos($phoneNumber, '0') === 0) {
                                            $phoneNumber = '62' . substr($phoneNumber, 1);
                                        }
                                    @endphp
                                    <a href="https://wa.me/{{ $phoneNumber }}" class="buy-btn"
                                        target="_blank">Tertarik</a>
                                </div>
                            </div>
                        </div><!-- End Pricing Item -->
                    @else
                        <!-- Structure for odd items -->
                        <div class="row gy-4 pricing-item pricing-item-spacing" data-aos="fade-up"
                            data-aos-delay="{{ $index * 100 }}">
                            <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                <h3>{{ $extracurricular->name }}</h3>
                            </div>
                            <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                <h4><sup>x</sup>{{ $extracurricular->pertemuan }}<span> Pertemuan / bulan</span></h4>
                            </div>
                            <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                <ul>
                                    @php
                                        // Decode JSON formatted data
                                        $benefits = json_decode($extracurricular->manfaat, true);
                                    @endphp
                                    @foreach ($benefits as $benefit)
                                        <li><i class="bi bi-check"></i> <span>{{ $benefit }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    @php
                                        // Check if the phone number starts with 0 and replace it with 62
                                        $phoneNumber = $extracurricular->nomor_handphone;
                                        if (strpos($phoneNumber, '0') === 0) {
                                            $phoneNumber = '62' . substr($phoneNumber, 1);
                                        }
                                    @endphp
                                    <a href="https://wa.me/{{ $phoneNumber }}" class="buy-btn"
                                        target="_blank">Tertarik</a>
                                </div>
                            </div>
                        </div><!-- End Pricing Item -->
                    @endif
                @empty
                    <div class="row">
                        <div class="col-12 text-center">
                            <p>No extracurricular activities available at the moment.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </section><!-- /ekstrakulikuler Section -->
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



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
