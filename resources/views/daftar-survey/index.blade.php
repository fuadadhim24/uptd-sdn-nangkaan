<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css') }}/survey.css">

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
    <!-- Header -->
    <header class="header-main">
        <div class="stopwatch">
            <span id="time-display">00:00</span>
        </div>
        <div class="header-buttons">
            <button id="end-button" class="btn btn-custom" style="background-color: #1bbca3; color:white">Akhiri
                Sekarang</button>
        </div>
    </header>

    <!-- Konten Utama -->
    <div class="container">
        <div class="header">
            <img src="{{ asset('assets') }}/img/survey/tut_wuri.png" alt="Logo" class="logo">
            <div class="header-text">
                <h1>UPTD SPF SDN Nangkaan Kec. Bondowoso</h1>
                <h3>{{ $surveyData['title'] }}</h3>
            </div>
        </div>

        @php
            $totalPages = count($surveyData['pages']); // Calculate total pages
        @endphp
        <form action="{{ route('survey.submit', $surveyId) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="name" value="{{ $name }}">
            @foreach ($surveyData['pages'] as $pageNumber => $questions)
                <div class="page" id="page-{{ $pageNumber }}"
                    style="{{ $pageNumber == 1 ? 'display: block;' : 'display: none;' }}">
                    <div class="soal-container">
                        @forelse ($questions as $question)
                            <div class="col-12 col-xl-12 mb-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <h4>{{ $question->question_text }}</h4>
                                    </div>
                                    <div class="card-body">
                                        @switch($question->question_type)
                                            @case('text_input')
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        name="question_{{ $question->id }}" placeholder="Jawaban Anda ...">
                                                </div>
                                            @break

                                            @case('text_description')
                                                <div class="form-group">
                                                    <textarea class="form-control" name="question_{{ $question->id }}" rows="4" placeholder="Jawaban Anda ..."></textarea>
                                                </div>
                                            @break

                                            @case('radio')
                                                @php
                                                    $radioOptions = json_decode($question->options, true);
                                                @endphp
                                                @forelse ($radioOptions as $index => $option)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="question_{{ $question->id }}"
                                                            id="radio{{ $question->id }}_{{ $index }}"
                                                            value="{{ $option }}">
                                                        <label class="form-check-label"
                                                            for="radio{{ $question->id }}_{{ $index }}">{{ $option }}</label>
                                                    </div>
                                                @empty
                                                    <p>No options available.</p>
                                                @endforelse
                                            @break

                                            @case('checkbox')
                                                @php
                                                    $checkboxOptions = json_decode($question->options, true);
                                                @endphp
                                                <div class="custom-checkbox-group">
                                                    @forelse ($checkboxOptions as $index => $option)
                                                        <div class="form-check form-check-inline">
                                                            <input type="checkbox"
                                                                id="checkbox{{ $question->id }}_{{ $index }}"
                                                                class="form-check-input" name="question_{{ $question->id }}[]"
                                                                value="{{ $option }}">
                                                            <label
                                                                for="checkbox{{ $question->id }}_{{ $index }}">{{ $option }}</label>
                                                        </div>
                                                    @empty
                                                        <p>No options available.</p>
                                                    @endforelse
                                                </div>
                                            @break

                                            @case('range')
                                                @php
                                                    $rangeParts = explode('-', $question->range);
                                                    $rangeStart = (int) $rangeParts[0];
                                                    $rangeEnd = (int) $rangeParts[1];
                                                    $rangeOptions = range($rangeStart, $rangeEnd);
                                                @endphp
                                                <div class="custom-range-group">
                                                    @forelse ($rangeOptions as $option)
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                id="range{{ $question->id }}_{{ $option }}"
                                                                name="question_{{ $question->id }}"
                                                                value="{{ $option }}">
                                                            <label class="form-check-label"
                                                                for="range{{ $question->id }}_{{ $option }}">{{ $option }}</label>
                                                        </div>
                                                    @empty
                                                        <p>No range options available.</p>
                                                    @endforelse
                                                </div>
                                            @break

                                            @case('file')
                                                <div class="form-group">
                                                    <input type="file" class="form-control-file"
                                                        name="question_{{ $question->id }}">
                                                </div>
                                            @break
                                        @endswitch
                                    </div>
                                </div>
                            </div>
                            @empty
                                <div class="col-12 col-xl-12 mb-4">
                                    <div class="card custom-card text-center">
                                        <div class="card-body">
                                            <p>Silakan hubungi Customer Service kami jika Anda membutuhkan bantuan.</p>
                                            <a href="https://wa.me/1234567890" class="btn btn-primary">Hubungi CS</a>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        </div>

                        <!-- Navigation buttons -->
                        <div class="nav-buttons text-center mt-4">
                            @if ($pageNumber > 1)
                                <button id="prev-button-{{ $pageNumber }}" class="btn btn-custom-prev"
                                    type="button">Previous</button>
                            @endif

                            @if ($pageNumber < $totalPages)
                                <button id="next-button-{{ $pageNumber }}" class="btn btn-primary btn-custom"
                                    type="button">Next</button>
                            @else
                                <button id="confirm-button" class="btn btn-custom"
                                    style="background-color: #1bbca3; color:white" type="button" type="button"
                                    data-toggle="modal" data-target="#confirmModal">Submit</button>
                            @endif
                        </div>
                    </div>
                @endforeach
                <!-- Modal Konfirmasi -->
                <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog"
                    aria-labelledby="confirmModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmModalLabel">Konfirmasi Pengiriman</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin mengirimkan survei ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button id="confirm-button" class="btn btn-custom"
                                    style="background-color: #1bbca3; color:white" type="submit">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let currentPage = parseInt('{{ $currentPage }}');
                const totalPages = parseInt('{{ $totalPages }}');

                const showPage = (pageNumber) => {
                    document.querySelectorAll('.page').forEach(page => page.style.display = 'none');
                    document.getElementById(`page-${pageNumber}`).style.display = 'block';

                    // Hide all navigation buttons first
                    document.querySelectorAll('.nav-buttons button').forEach(button => button.style.display =
                        'none');

                    if (pageNumber > 1) {
                        document.getElementById(`prev-button-${pageNumber}`).style.display = 'inline-block';
                    }

                    if (pageNumber < totalPages) {
                        document.getElementById(`next-button-${pageNumber}`).style.display = 'inline-block';
                    } else {
                        document.getElementById('confirm-button').style.display = 'inline-block';
                    }
                };

                // Event listener for the "Previous" button
                document.querySelectorAll('.btn-custom-prev').forEach(button => {
                    button.addEventListener('click', () => {
                        if (currentPage > 1) {
                            currentPage--;
                            showPage(currentPage);
                        }
                    });
                });

                // Event listener for the "Next" button
                document.querySelectorAll('.btn-custom').forEach(button => {
                    button.addEventListener('click', () => {
                        if (currentPage < totalPages) {
                            currentPage++;
                            showPage(currentPage);
                        }
                    });
                });

                // // Event listener for the "Submit" button
                // document.getElementById('submit-button').addEventListener('click', () => {
                //     alert('Survey submitted!');
                //     // document.getElementById('survey-form').submit();
                // });

                // Initialize the display
                showPage(currentPage);

                // Timer code
                const timeDisplay = document.getElementById('time-display');
                let startTime = Date.now();

                setInterval(() => {
                    const elapsed = Date.now() - startTime;
                    const minutes = Math.floor(elapsed / 60000);
                    const seconds = Math.floor((elapsed % 60000) / 1000);
                    timeDisplay.textContent =
                        `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
                }, 1000);
            });
        </script>


    </body>

    </html>
