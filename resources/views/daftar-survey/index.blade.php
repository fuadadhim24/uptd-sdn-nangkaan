<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css') }}/survey.css">
</head>

<body>
    <!-- Header -->
    <header class="header-main">
        <div class="stopwatch">
            <span id="time-display">00:00</span>
        </div>
        <div class="header-buttons">
            <button id="end-button" class="btn btn-dark">Akhiri Sekarang</button>
        </div>
    </header>

    <!-- Konten Utama -->
    <div class="container">
        <div class="header">
            <img src="{{ asset('assets') }}/img/survey/tut_wuri.png" alt="Logo" class="logo">
            <div class="header-text">
                <h1>UPTD SPF SDN Nangkaan Kec. Bondowoso</h1>
                <h3>Survey Kecerdasan Buatan</h3>
            </div>
        </div>

        <!-- Page 1 -->
        <div class="page" id="page-1">
            <div class="soal-container">
                <div class="soal">
                    <h2>1. Apakah Anda suka makanan pedas?</h2>
                    <div class="form-check-inline mt-4">
                        <div class="form-check-option">
                            <input class="form-check-input" type="radio" name="soal1" value="ya" id="soal1-ya">
                            <label class="form-check-label" for="soal1-ya">Ya</label>
                        </div>
                        <div class="form-check-option">
                            <input class="form-check-input" type="radio" name="soal1" value="tidak"
                                id="soal1-tidak">
                            <label class="form-check-label" for="soal1-tidak">Tidak</label>
                        </div>
                    </div>
                </div>

                <div class="soal">
                    <h2>2. Seberapa puas Anda dengan layanan kami?</h2>
                    <div class="form-group mt-4">
                        <select class="form-control" name="soal2">
                            <option value="sangat puas">Sangat Puas</option>
                            <option value="puas">Puas</option>
                            <option value="netral">Netral</option>
                            <option value="kurang puas">Kurang Puas</option>
                            <option value="sangat kurang puas">Sangat Kurang Puas</option>
                        </select>
                    </div>
                </div>

                <div class="soal">
                    <h2>3. Sebutkan nama makanan favorit Anda:</h2>
                    <input type="text" class="form-control mt-4" name="soal3" placeholder="Jawaban saya ...">
                </div>
            </div>
        </div>

        <!-- Page 2 -->
        <div class="page" id="page-2" style="display: none;">
            <div class="soal-container">
                <div class="soal">
                    <h2>4. Pilih gambar favorit Anda:</h2>
                    <div class="image-options mt-4">
                        <div class="image-option">
                            <input type="radio" name="soal4" value="gambar1" id="soal4-gambar1" class="image-radio">
                            <label for="soal4-gambar1" class="image-label">
                                <img src="{{ asset('assets') }}/img/survey/gambar1.jpg" alt="Gambar 1"
                                    class="img-thumbnail">
                            </label>
                        </div>
                        <div class="image-option">
                            <input type="radio" name="soal4" value="gambar2" id="soal4-gambar2" class="image-radio">
                            <label for="soal4-gambar2" class="image-label">
                                <img src="{{ asset('assets') }}/img/survey/gambar2.jpg" alt="Gambar 2"
                                    class="img-thumbnail">
                            </label>
                        </div>
                        <div class="image-option">
                            <input type="radio" name="soal4" value="gambar3" id="soal4-gambar3" class="image-radio">
                            <label for="soal4-gambar3" class="image-label">
                                <img src="{{ asset('assets') }}/img/survey/gambar3.jpg" alt="Gambar 3"
                                    class="img-thumbnail">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="soal">
                    <h2>5. Pilih hobi yang Anda sukai:</h2>
                    <div class="form-check-inline mt-4">
                        <div class="form-check-option">
                            <input class="form-check-input" type="checkbox" name="soal5" value="membaca"
                                id="soal5-membaca">
                            <label class="form-check-label" for="soal5-membaca">Membaca</label>
                        </div>
                        <div class="form-check-option">
                            <input class="form-check-input" type="checkbox" name="soal5" value="berlari"
                                id="soal5-berlari">
                            <label class="form-check-label" for="soal5-berlari">Berlari</label>
                        </div>
                        <div class="form-check-option">
                            <input class="form-check-input" type="checkbox" name="soal5" value="menulis"
                                id="soal5-menulis">
                            <label class="form-check-label" for="soal5-menulis">Menulis</label>
                        </div>
                    </div>
                </div>

                <div class="soal">
                    <h2>6. Pilih pekerjaan Anda saat ini:</h2>
                    <select class="form-control mt-4" name="soal6">
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="karyawan">Karyawan</option>
                        <option value="pengusaha">Pengusaha</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Page 3 -->
        <div class="page" id="page-3" style="display: none;">
            <div class="soal-container">
                <div class="soal">
                    <h2>7. Seberapa tertarik Anda dengan topik ini?</h2>
                    <div class="range-container">
                        <input type="range" id="range-input" min="0" max="3" step="1"
                            value="1">
                        <div class="range-labels">
                            <span class="range-label" data-value="0">Tidak Tertarik</span>
                            <span class="range-label" data-value="1">Biasa Saja</span>
                            <span class="range-label" data-value="2">Tertarik</span>
                            <span class="range-label" data-value="3">Sangat Tertarik</span>
                        </div>
                    </div>
                </div>
                <!-- <div class="reaction-question soal">
                    <h2 class="question-title">How satisfied are you with our service?</h2>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input class="radio-input" type="radio" name="satisfaction" value="extremely-dissatisfied" id="extremely-dissatisfied">
                            <label class="radio-label" for="extremely-dissatisfied">Extremely dissatisfied</label>
                        </div>
                        <div class="radio-option">
                            <input class="radio-input" type="radio" name="satisfaction" value="dissatisfied" id="dissatisfied">
                            <label class="radio-label" for="dissatisfied">Dissatisfied</label>
                        </div>
                        <div class="radio-option">
                            <input class="radio-input" type="radio" name="satisfaction" value="neutral" id="neutral">
                            <label class="radio-label" for="neutral">Neutral</label>
                        </div>
                        <div class="radio-option">
                            <input class="radio-input" type="radio" name="satisfaction" value="satisfied" id="satisfied">
                            <label class="radio-label" for="satisfied">Satisfied</label>
                        </div>
                        <div class="radio-option">
                            <input class="radio-input" type="radio" name="satisfaction" value="extremely-satisfied" id="extremely-satisfied">
                            <label class="radio-label" for="extremely-satisfied">Extremely satisfied</label>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="nav-buttons text-center mt-4">
            <button id="prev-button" class="btn btn-custom-prev">Previous</button>
            <button id="next-button" class="btn btn-primary btn-custom">Next</button>
            <button id="submit-button" class="btn btn-custom" style="display: none; background-color: #1bbca3; color:white">Submit</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/survey.js') }}"></script>
</body>

</html>