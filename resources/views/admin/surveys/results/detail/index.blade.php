<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Survey - UPTD SPF SDN Nangkaan Admin Survey</title>



    <link rel="shortcut icon" href="{{asset('assets/img/logo-dikdasmen.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/img/logo-dikdasmen.png') }}" type="image/png">



    <link rel="stylesheet" href="{{ asset('css') }}/app.css">
    <link rel="stylesheet" href="{{ asset('css') }}/app-dark.css">
    <link rel="stylesheet" href="{{ asset('css') }}/iconly.css">

    <style>
        .custom-card {
            border: 2px solid #ced4da;
            border-radius: 0.5rem;
        }
    </style>
</head>

<body>
    <script src="{{ asset('js/initTheme.js') }}js/initTheme.js"></script>
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

                        <li class="sidebar-item ">
                            <a href="{{ route('admin.surveys') }}" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Daftar Survey</span>
                            </a>


                        </li>

                        <li class="sidebar-item active ">
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

                        <li class="sidebar-item  ">
                            <a href="{{ route('admin.karya') }}" class='sidebar-link'>
                                <i class="bi bi-circle-square  "></i>
                                <span>Karya dan Aktivitas</span>
                            </a>


                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('admin.prestasi') }}" class='sidebar-link'>
                                <i class="bi bi-trophy-fill  "></i>
                                <span>Prestasi</span>
                            </a>


                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-journal-check"></i>
                                <span>Tentang</span>
                            </a>

                            <ul class="submenu ">

                                <li class="submenu-item  ">
                                    <a href="{{ route('admin.kurikulum') }}" class="submenu-link">Kurikulum</a>

                                </li>
                                <li class="submenu-item  ">
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

                                <li class="submenu-item  ">
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
                                <span>Karya, Atletik &amp; Aktivitas</span>
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
                            <h3>Hasil Survey</h3>
                            <input type="hidden" id="survey-id" value="{{ $surveyId }}">
                            <p class="text-subtitle text-muted">Collapse your content and control its visibility with
                                buttons.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Hasil Survey</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- list groups simple & disabled start -->
                <section id="basic-list-group">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ $surveyData['respondent_count'] }} Responden</h4>
                        </div>
                        <div class="card-body">
                            {{-- <div id="survey-results"></div> --}}
                            <div class="row">
                                <div class="col-3">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-ringkasan-tab" data-bs-toggle="pill"
                                            href="#v-pills-ringkasan" role="tab"
                                            aria-controls="v-pills-ringkasan" aria-selected="true">Ringkasan</a>
                                        <a class="nav-link" id="v-pills-pertanyaan-tab" data-bs-toggle="pill"
                                            href="#v-pills-pertanyaan" role="tab"
                                            aria-controls="v-pills-pertanyaan" aria-selected="false">Pertanyaan</a>
                                        <a class="nav-link" id="v-pills-individual-tab" data-bs-toggle="pill"
                                            href="#v-pills-individual" role="tab"
                                            aria-controls="v-pills-individual" aria-selected="false">Individual</a>
                                        <a class="nav-link" id="v-pills-download-tab" data-bs-toggle="pill"
                                            href="#v-pills-download" role="tab" aria-controls="v-pills-download"
                                            aria-selected="false">Download</a>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-ringkasan" role="tabpanel"
                                            aria-labelledby="v-pills-ringkasan-tab">
                                            <div class="col-12 col-xl-12">
                                                <div class="card custom-card">
                                                    <div class="card-header">
                                                        <h4>1. Nama & Teks Input</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-lg">
                                                                <tbody>
                                                                    @foreach ($namesAndTexts as $item)
                                                                        <tr>
                                                                            <td class="col-auto">
                                                                                <p class="mb-0">{{ $item }}
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-xl-12">
                                                <div class="card custom-card">
                                                    <div class="card-header">
                                                        <h4>2. Radio Button & Range Input</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="chart-visitors-profile"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-xl-12">
                                                <div class="card custom-card">
                                                    <div class="card-header">
                                                        <h4>3. CheckBox</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="bar"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-xl-12">
                                                <div class="card custom-card">
                                                    <div class="card-header">
                                                        <h4>4. File Input</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-lg">
                                                                <tbody>
                                                                    @foreach ($files as $file)
                                                                        <tr>
                                                                            <td class="col-auto">
                                                                                <div>
                                                                                    <span><i
                                                                                            class="bi bi-file-earmark-arrow-down-fill"></i></span>
                                                                                    <a href="{{ asset('storage/answer/' . $file['file_path']) }}"
                                                                                        class="mb-0"
                                                                                        download>{{ basename($file['file_path']) }}</a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Need: Apexcharts -->
                                        <script src="{{ asset('extensions') }}/apexcharts/apexcharts.min.js"></script>

                                        <script>
                                            var optionsVisitorsProfile = {
                                                series: @json($radioButtonData['series']),
                                                labels: @json($radioButtonData['labels']),
                                                colors: ["#0e1b4d", "#1bbca3"],
                                                chart: {
                                                    type: "donut",
                                                    width: "100%",
                                                    height: "350px",
                                                },
                                                legend: {
                                                    position: "right",
                                                },
                                                plotOptions: {
                                                    pie: {
                                                        donut: {
                                                            size: "30%",
                                                        },
                                                    },
                                                },
                                            };

                                            var chartVisitorsProfile = new ApexCharts(
                                                document.getElementById("chart-visitors-profile"),
                                                optionsVisitorsProfile
                                            );

                                            chartVisitorsProfile.render();

                                            var barOptions = {
                                                series: @json($checkboxData['series']),
                                                chart: {
                                                    type: "bar",
                                                    height: 350,
                                                },
                                                plotOptions: {
                                                    bar: {
                                                        horizontal: true,
                                                        columnWidth: "55%",
                                                        endingShape: "rounded",
                                                    },
                                                },
                                                dataLabels: {
                                                    enabled: false,
                                                },
                                                stroke: {
                                                    show: true,
                                                    width: 2,
                                                    colors: ["transparent"],
                                                },
                                                xaxis: {
                                                    categories: @json($checkboxData['categories']),
                                                },
                                                yaxis: {
                                                    title: {
                                                        text: "",
                                                    },
                                                },
                                                fill: {
                                                    opacity: 1,
                                                },
                                                tooltip: {
                                                    y: {
                                                        formatter: function(val) {
                                                            return val + " responden";
                                                        },
                                                    },
                                                },
                                            };

                                            var bar = new ApexCharts(
                                                document.querySelector("#bar"),
                                                barOptions
                                            );

                                            bar.render();
                                        </script>
                                        <div class="tab-pane fade" id="v-pills-pertanyaan" role="tabpanel"
                                            aria-labelledby="v-pills-pertanyaan-tab">
                                            <div class="row match-height">
                                                @foreach ($surveyData['questions'] as $question)
                                                    <div class="col-12 col-md-6 mb-4">
                                                        <div class="card custom-card">
                                                            <div class="card-header">
                                                                <h5>{{ $question['question_text'] }}</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                @if ($question['question_type'] === 'text_input' || $question['question_type'] === 'text_description')
                                                                    <div class="table-responsive">
                                                                        <table class="table table-hover table-lg">
                                                                            <tbody>
                                                                                @foreach ($question['responses'] as $response)
                                                                                    <tr>
                                                                                        <td class="col-auto">
                                                                                            <p class="mb-0">
                                                                                                {{ $response['answer_text'] }}
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                @elseif ($question['question_type'] === 'radio')
                                                                    @foreach (json_decode($question['options']) as $option)
                                                                        <div class="form-check mb-3">
                                                                            @php
                                                                                $isChecked = $question[
                                                                                    'responses'
                                                                                ]->contains(function ($response) use (
                                                                                    $option,
                                                                                ) {
                                                                                    return $response['answer_text'] ===
                                                                                        $option;
                                                                                });
                                                                            @endphp
                                                                            <input class="form-check-input"
                                                                                type="radio"
                                                                                id="radio{{ $loop->index }}" checked
                                                                                disabled>
                                                                            <label class="form-check-label"
                                                                                for="radio{{ $loop->index }}">
                                                                                {{ $option }}
                                                                            </label>
                                                                        </div>
                                                                    @endforeach
                                                                @elseif ($question['question_type'] === 'checkbox')
                                                                    @php
                                                                        // Decode the options from JSON
                                                                        $options = json_decode(
                                                                            $question['options'],
                                                                            true,
                                                                        );
                                                                        // Extract all selected answers for easy lookup
                                                                        $selectedAnswers = [];
                                                                        foreach ($question['responses'] as $response) {
                                                                            $answers = explode(
                                                                                ', ',
                                                                                $response['answer_text'],
                                                                            ); // Assuming answers are comma-separated
                                                                            foreach ($answers as $answer) {
                                                                                $selectedAnswers[] = trim($answer); // Clean up spaces
                                                                            }
                                                                        }
                                                                        $selectedAnswers = array_unique(
                                                                            $selectedAnswers,
                                                                        ); // Remove duplicates if necessary
                                                                    @endphp

                                                                    @foreach ($options as $index => $option)
                                                                        <div class="form-check mb-3">
                                                                            @php
                                                                                $isChecked = in_array(
                                                                                    $option,
                                                                                    $selectedAnswers,
                                                                                ); // Check if the option is selected
                                                                            @endphp
                                                                            <input class="form-check-input"
                                                                                type="checkbox"
                                                                                id="checkbox{{ $index }}"
                                                                                {{ $isChecked ? 'checked' : '' }}
                                                                                disabled>
                                                                            <label class="form-check-label"
                                                                                for="checkbox{{ $index }}">
                                                                                {{ $option }}
                                                                            </label>
                                                                        </div>
                                                                    @endforeach
                                                                @elseif ($question['question_type'] === 'range')
                                                                    <div class="mb-3">
                                                                        @foreach (range(1, 5) as $value)
                                                                            @php
                                                                                $isChecked = $question[
                                                                                    'responses'
                                                                                ]->contains(function ($response) use (
                                                                                    $value,
                                                                                ) {
                                                                                    return $response['answer_text'] ==
                                                                                        $value;
                                                                                });
                                                                            @endphp
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input"
                                                                                    type="radio"
                                                                                    name="range{{ $question['question_id'] }}"
                                                                                    id="rangeRadio{{ $value }}"
                                                                                    {{ $isChecked ? 'checked' : '' }}
                                                                                    disabled>
                                                                                <label class="form-check-label"
                                                                                    for="rangeRadio{{ $value }}">{{ $value }}</label>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                @elseif ($question['question_type'] === 'file')
                                                                    <table class="table table-hover table-lg">
                                                                        <tbody>
                                                                            @foreach ($question['responses'] as $response)
                                                                                @if ($response['file_path'])
                                                                                    <tr>
                                                                                        <td class="col-auto">
                                                                                            <div>
                                                                                                <span><i
                                                                                                        class="bi bi-file-earmark-arrow-down-fill"></i></span>
                                                                                                <a href="{{ asset('storage/answer/' . $response['file_path']) }}"
                                                                                                    class="mb-0"
                                                                                                    download>{{ basename($response['file_path']) }}</a>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endif
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-individual" role="tabpanel"
                                            aria-labelledby="v-pills-individual-tab">
                                            <div class="btn-group d-flex justify-content-end mb-4">
                                                <div class="dropdown">
                                                    <button class="btn btn-light-primary dropdown-toggle me-1"
                                                        type="button" id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Select Respondent
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                                        id="dropdown-menu">
                                                        <!-- Respondent items will be populated here -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="survey-results">
                                                <!-- Survey results will be populated here -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-download" role="tabpanel"
                                            aria-labelledby="v-pills-download-tab">
                                            <div class="row match-height">
                                                <div class="col-12 col-xl-6">
                                                    <a href="#" class="card custom-card">
                                                        <div class="card-header">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <h4 class="mb-0">Download Spreadsheet</h4>
                                                                <i class="bi bi-file-earmark-spreadsheet"></i>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <a href="#" class="card custom-card">
                                                        <div class="card-header">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <h4 class="mb-0">Download PDF</h4>
                                                                <i class="bi bi-file-earmark-pdf"></i>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- list groups simple & disabled end -->


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

    {{-- <script src="{{ asset('js') }}/pages/detail-result.js"></script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const surveyId = document.getElementById('survey-id').value;

            if (surveyId) {
                fetchSurveyResponses(surveyId);
            }
        });

        async function fetchSurveyResponses(surveyId) {
            try {
                const response = await fetch(`/admin-hasil-survey/detail/${surveyId}/data`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();
                populateDropdown(data.respondents);
                setupDropdownEventListeners(data);
                console.log(data);


                if (data.respondents.length > 0) {
                    const firstRespondentId = data.respondents[0].respondent_id;
                    updateSurveyResults(data, firstRespondentId);
                }
                // console.log('hallo');

            } catch (error) {
                console.error('Error fetching survey responses:', error);
            }
        }

        function populateDropdown(respondents) {
            const dropdownMenu = document.getElementById('dropdown-menu');
            dropdownMenu.innerHTML = respondents.map(respondent => `
                <a class="dropdown-item" href="#" data-respondent-id="${respondent.respondent_id}">
                    ${respondent.name}
                </a>
            `).join('');
        }

        function setupDropdownEventListeners(data) {
            const dropdownMenu = document.getElementById('dropdown-menu');
            dropdownMenu.querySelectorAll('.dropdown-item').forEach(item => {
                item.addEventListener('click', (e) => {
                    e.preventDefault();
                    const respondentId = e.target.dataset.respondentId;
                    updateSurveyResults(data, respondentId);
                });
            });
        }

        function updateSurveyResults(data, selectedRespondentId) {
            const resultsContainer = document.getElementById('survey-results');
            resultsContainer.innerHTML = '';


            // Filter responses for the selected respondent
            const filteredQuestions = data.questions.map(question => {
                const responses = question.responses.filter(response => response.respondent_id ==
                    selectedRespondentId);

                if (responses.length > 0) {
                    return {
                        ...question,
                        responses: responses
                    };
                }
                return null;
            }).filter(question => question !== null);
            // console.log(data);

            // Render the survey data
            resultsContainer.innerHTML = `
                <h1>Survey Results for Respondent ${selectedRespondentId}</h1>
                <div>
                    ${filteredQuestions.map(question => generateQuestionHTML(question)).join('')}
                </div>
            `;
        }

        function generateQuestionHTML(question) {
            const baseURL = '{{ asset('storage/answer') }}/';
            switch (question.question_type) {
                case 'text_input':
                    return `
            <div class="col-12 col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h4>${question.question_text}</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" readonly="readonly" value="${question.responses[0].answer_text}">
                        </div>
                    </div>
                </div>
            </div>
        `;

                case 'text_description':
                    return `
            <div class="col-12 col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h4>${question.question_text}</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <textarea class="form-control" rows="4" readonly>${question.responses[0].answer_text}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        `;

                case 'radio':
                    const radioOptions = JSON.parse(question.options || '[]');
                    const selectedRadio = question.responses[0].answer_text;
                    return `
            <div class="col-12 col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h4>${question.question_text}</h4>
                    </div>
                    <div class="card-body">
                        ${radioOptions.map((option, index) => `
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" id="radio${question.question_id}_${index}" disabled ${selectedRadio === option ? 'checked' : ''}>
                                                                    <label class="form-check-label" for="radio${question.question_id}_${index}">${option}</label>
                                                                </div>
                                                            `).join('')}
                    </div>
                </div>
            </div>
        `;

                case 'checkbox':
                    const checkboxOptions = JSON.parse(question.options || '[]');
                    const selectedCheckboxes = question.responses[0].answer_text.split(', ').map(option => option.trim());
                    return `
            <div class="col-12 col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h4>${question.question_text}</h4>
                    </div>
                    <div class="card-body">
                        ${checkboxOptions.map((option, index) => `
                                                                <div class="form-check">
                                                                    <input type="checkbox" id="checkbox${question.question_id}_${index}" class="form-check-input" disabled ${selectedCheckboxes.includes(option) ? 'checked' : ''}>
                                                                    <label for="checkbox${question.question_id}_${index}">${option}</label>
                                                                </div>
                                                            `).join('')}
                    </div>
                </div>
            </div>
        `;

                case 'range':
                    const [rangeStart, rangeEnd] = question.range.split('-').map(Number);
                    const rangeOptions = Array.from({
                        length: (rangeEnd - rangeStart + 1)
                    }, (_, i) => rangeStart + i);
                    const selectedRange = parseInt(question.responses[0].answer_text, 10);
                    return `
            <div class="col-12 col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h4>${question.question_text}</h4>
                    </div>
                    <div class="card-body">
                        ${rangeOptions.map(option => `
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" id="range${question.question_id}_${option}" disabled ${selectedRange === option ? 'checked' : ''}>
                                                                    <label class="form-check-label" for="range${question.question_id}_${option}">${option}</label>
                                                                </div>
                                                            `).join('')}
                    </div>
                </div>
            </div>
        `;

                case 'file':
                    return `
            <div class="col-12 col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h4>${question.question_text}</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-lg">
                            <tbody>
                                <tr>
                                    <td class="col-auto">
                                        <div>
                                            <span><i class="bi bi-file-earmark-arrow-down-fill"></i></span>
                                            <a href="${baseURL+question.responses[0].file_path}" class="mb-0">${question.responses[0].file_path}</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        `;

                default:
                    return '';
            }
        }
    </script>



</body>

</html>
