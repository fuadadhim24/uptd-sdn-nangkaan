<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Visi dan Misi - UPTD SPF SDN Nangkaan Admin</title>



    <link rel="shortcut icon" href="{{asset('assets/img/logo-dikdasmen.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/img/logo-dikdasmen.png') }}" type="image/png">



    <link rel="stylesheet" href="{{ asset('extensions') }}/datatables.net-bs5/css/dataTables.bootstrap5.min.css">


    <link rel="stylesheet" href="{{ asset('css') }}/table-datatable-jquery.css">
    <link rel="stylesheet" href="{{ asset('css') }}/app.css">
    <link rel="stylesheet" href="{{ asset('css') }}/app-dark.css">
    <link rel="stylesheet" href="{{ asset('css') }}/iconly.css">
</head>

<body>
    <script src="{{ asset('js') }}/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('assets\img\survey\tut_wuri.png') }}" alt="Logo"
                                    srcset=""></a>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark"
                                    style="cursor: pointer">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">

                        <li class="sidebar-title">Survey &amp; Responden</li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('admin.surveys') }}" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Daftar Survey</span>
                            </a>


                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('admin.surveys.result') }}" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Hasil Survey</span>
                            </a>


                        </li>

                        <li class="sidebar-title">Manajemen Website</li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('admin.faq') }}" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>FAQ</span>
                            </a>


                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('admin.ppdb') }}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Informasi PPDB</span>
                            </a>


                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('admin.kalender-akademik') }}" class='sidebar-link'>
                                <i class="bi bi-calendar2-date-fill"></i>
                                <span>Kalender Akademik</span>
                            </a>


                        </li>

                        <li class="sidebar-item ">
                            <a href="{{ route('admin.karya') }}" class='sidebar-link'>
                                <i class="bi bi-circle-square  "></i>
                                <span>Karya dan Aktivitas</span>
                            </a>


                        </li>

                        <li class="sidebar-item has-sub active">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-journal-check"></i>
                                <span>Tentang</span>
                            </a>

                            <ul class="submenu ">

                                <li class="submenu-item  ">
                                    <a href="{{ route('admin.kurikulum') }}" class="submenu-link">Kurikulum</a>

                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('admin.guru') }}" class="submenu-link">Daftar Guru</a>

                                </li>

                                <li class="submenu-item  ">
                                    <a href="{{ route('admin.fasilitas') }}" class="submenu-link">Fasilitas</a>

                                </li>

                                <li class="submenu-item  ">
                                    <a href="{{ route('admin.ekstrakulikuler') }}"
                                        class="submenu-link">Ekstrakulikuler</a>

                                </li>

                                <li class="submenu-item  ">
                                    <a href="{{ route('admin.sambutan') }}" class="submenu-link">Sambutan Kepala
                                        Sekolah</a>

                                </li>

                                <li class="submenu-item active ">
                                    <a href="{{ route('admin.visi_misi') }}" class="submenu-link">Visi dan Misi</a>

                                </li>

                                <li class="submenu-item  ">
                                    <a href="{{ route('admin.data_sekolah') }}" class="submenu-link">Data Sekolah</a>

                                </li>

                            </ul>


                        </li>

                        {{-- <li class="sidebar-item  ">
                            <a href="form-layout.html" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>VisiMisi, Atletik &amp; Aktivitas</span>
                            </a>


                        </li> --}}

                        <li class="sidebar-item" style="margin-top: 20vh;">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm w-100">
                                    <i class="bi bi-box-arrow-right"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Daftar Visi dan Misi</h3>
                            <p class="text-subtitle text-muted">Manajemen informasi Visi dan Misi Sekolah.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Daftar Visi dan Misi
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Minimal jQuery Datatable start -->
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                                Tabel Daftar Visi
                            </h5>

                            <p class="text-subtitle text-muted">Terbatas 1 visi yang ditampilkan pada landing page.</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive datatable-minimal">
                                <table class="table" id="table2">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Deskripsi</th>
                                            {{-- <th>Biografi</th> --}}
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($visiMisis as $index => $visiMisi)
                                            @if ($visiMisi->type == 'Visi')
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $visiMisi->type }}</td>
                                                    <td>
                                                        {{ $visiMisi->description }}
                                                    </td>

                                                    {{-- <td>{{ $visiMisi->biography }}</td> --}}
                                                    <td>
                                                        <!-- Edit and Delete Buttons -->
                                                        <button type="button" class="btn btn-warning btn-sm"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editGuruModal-{{ $visiMisi->id }}">
                                                            Edit
                                                        </button>
                                                        <form action="{{ route('visi_misi.destroy', $visiMisi->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus guru ini?')">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>

                                                <!-- Edit Guru Modal -->
                                                <div class="modal fade" id="editGuruModal-{{ $visiMisi->id }}"
                                                    tabindex="-1"
                                                    aria-labelledby="editGuruModalLabel-{{ $visiMisi->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form method="POST"
                                                                action="{{ route('visi_misi.update', $visiMisi->id) }}"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="editGuruModalLabel-{{ $visiMisi->id }}">
                                                                        Edit
                                                                        Visi dan Misi</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="description">Deskripsi</label>
                                                                        <input type="text" id="description"
                                                                            class="form-control" name="description"
                                                                            value="{{ old('description', $visiMisi->description) }}"
                                                                            required>
                                                                    </div>
                                                                    <div class="form-group mt-3">
                                                                        <label for="type">Tipe</label>
                                                                        <select id="type" class="form-control"
                                                                            name="type" required>
                                                                            <option value="0"
                                                                                {{ $visiMisi->type == 'Visi' ? 'selected' : '' }}>
                                                                                Visi</option>
                                                                            <option value="1"
                                                                                {{ $visiMisi->type == 'Misi' ? 'selected' : '' }}>
                                                                                Misi</option>
                                                                        </select>
                                                                    </div>
                                                                    {{-- <div class="form-group">
                                                                    <label for="biography">Biografi</label>
                                                                    <textarea id="biography" class="form-control" name="biography" required>{{ $visiMisi->biography }}</textarea>
                                                                </div> --}}
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                            @endif
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">Tidak ada data visiMisi dan
                                                    aktivitas tersedia
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                                Tabel Daftar Misi
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive datatable-minimal">
                                <table class="table" id="table2">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Deskripsi</th>
                                            {{-- <th>Biografi</th> --}}
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($visiMisis as $index => $visiMisi)
                                            @if ($visiMisi->type == 'Misi')
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $visiMisi->type }}</td>
                                                    <td>
                                                        {{ $visiMisi->description }}
                                                    </td>

                                                    {{-- <td>{{ $visiMisi->biography }}</td> --}}
                                                    <td>
                                                        <!-- Edit and Delete Buttons -->
                                                        <button type="button" class="btn btn-warning btn-sm"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editGuruModal-{{ $visiMisi->id }}">
                                                            Edit
                                                        </button>
                                                        <form action="{{ route('visi_misi.destroy', $visiMisi->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus guru ini?')">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>

                                                <!-- Edit Guru Modal -->
                                                <div class="modal fade" id="editGuruModal-{{ $visiMisi->id }}"
                                                    tabindex="-1"
                                                    aria-labelledby="editGuruModalLabel-{{ $visiMisi->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form method="POST"
                                                                action="{{ route('visi_misi.update', $visiMisi->id) }}"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="editGuruModalLabel-{{ $visiMisi->id }}">
                                                                        Edit
                                                                        Visi dan Misi</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="description">Deskripsi</label>
                                                                        <input type="text" id="description"
                                                                            class="form-control" name="description"
                                                                            value="{{ old('description', $visiMisi->description) }}"
                                                                            required>
                                                                    </div>
                                                                    <div class="form-group mt-3">
                                                                        <label for="type">Tipe</label>
                                                                        <select id="type" class="form-control"
                                                                            name="type" required>
                                                                            <option value="0"
                                                                                {{ $visiMisi->type == 'Visi' ? 'selected' : '' }}>
                                                                                Visi</option>
                                                                            <option value="1"
                                                                                {{ $visiMisi->type == 'Misi' ? 'selected' : '' }}>
                                                                                Misi</option>
                                                                        </select>
                                                                    </div>
                                                                    {{-- <div class="form-group">
                                                                    <label for="biography">Biografi</label>
                                                                    <textarea id="biography" class="form-control" name="biography" required>{{ $visiMisi->biography }}</textarea>
                                                                </div> --}}
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                            @endif
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">Tidak ada data visiMisi dan
                                                    aktivitas tersedia
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- Minimal jQuery Datatable end -->

                <!-- Button to trigger modal -->
                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#lowonganModal">
                    Tambah Visi dan Misi
                </button>

                {{-- modal --}}
                <!-- Modal -->
                <div class="modal fade" id="lowonganModal" tabindex="-1" aria-labelledby="lowonganModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="POST" action="{{ route('visi_misi.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Visi dan Misi Baru</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <input type="text" id="description" class="form-control"
                                            name="description" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="type">Tipe</label>
                                        <select id="type" class="form-control" name="type" required>
                                            <option value="0">
                                                Visi</option>
                                            <option value="1">
                                                Misi</option>
                                        </select>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="biography">Biografi</label>
                                        <textarea id="biography" class="form-control" name="biography" required></textarea>
                                    </div> --}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2024 &copy; UPTD SPF SDN Nangkaan kec. Bondowoso</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted by</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <script src="{{ asset('js') }}/components/dark.js"></script>
    <script src="{{ asset('extensions') }}/perfect-scrollbar/perfect-scrollbar.min.js"></script>


    <script src="{{ asset('js') }}/app.js"></script>


    <script src="{{ asset('extensions') }}/jquery/jquery.min.js"></script>
    <script src="{{ asset('extensions') }}/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('extensions') }}/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('js') }}/pages/datatables.js"></script>

</body>

</html>
