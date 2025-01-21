<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perlindungan Data Pribadi - Indeks KAMI</title>
    <link rel="stylesheet" href="{{ asset('assets/styles/styleasesmen.css') }}">
</head>
<body>
    <!-- Navbar Sidebar -->
    <nav class="sidebar">
        <div class="logo">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
            <h1>Indeks Keamanan Informasi</h1>
        </div>
        <ul>
            <li><a href="{{ url('/') }}">Homepage</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="content">
        <header class="header">
            <h2>Perlindungan Data Pribadi</h2>
        </header>

        <form id="pdpForm" class="pdp-form" action="{{ route('store-pdp', ['responden_id' => $responden_id]) }}" method="POST">
            @csrf
            <!-- Pertanyaan -->
            <div class="form-group">
                <label for="q1">1. Apakah instansi/perusahaan sudah mendokumentasikan jenis dan bentuk (dokumen kertas/elektronik) data pribadi yang disimpan, diolah dan dipertukarkan dengan pihak eksternal?</label>
                <div class="options">
                    <label><input type="radio" name="q1" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q1" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q1" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q1" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q2">2. Apakah instansi/perusahaan sudah memetakan alur pemrosesan data di internal dan pertukaran data dengan pihak eksternal, termasuk kapan dan dimana data pribadi tersebut diperoleh?</label>
                <div class="options">
                    <label><input type="radio" name="q2" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q2" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q2" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q2" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q3">3. Apakah proses terkait penyimpanan, pengolahan dan pertukaran data pribadi di instansi/perusahaan sudah didokumentasikan?</label>
                <div class="options">
                    <label><input type="radio" name="q3" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q3" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q3" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q3" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Tambahkan pertanyaan lainnya -->
            <div class="form-group">
                <label for="q4">4. Apakah instansi/perusahaan sudah memiliki kebijakan terkait Pelindungan Data Pribadi sesuai dengan Peraturan dan Perundangan yang berlaku?</label>
                <div class="options">
                    <label><input type="radio" name="q4" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q4" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q4" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q4" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 5 -->
            <div class="form-group">
                <label for="q5">5. Apakah instansi/perusahaan sudah menunjuk fungsi/unit Pejabat Pelindung Data Pribadi yang bertanggung jawab dan berwenang dalam penerapan kebijakan dan proses Pelindungan Data Pribadi?</label>
                <div class="options">
                    <label><input type="radio" name="q5" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q5" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q5" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q5" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 6 -->
            <div class="form-group">
                <label for="q6">6. Apakah instansi/perusahaan sudah menganalisa dampak terkait terungkapnya data pribadi yang disimpan, diolah dan dipertukarkan secara ilegal atau karena insiden lain?</label>
                <div class="options">
                    <label><input type="radio" name="q6" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q6" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q6" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q6" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 7 -->
            <div class="form-group">
                <label for="q7">7. Apakah kajian risiko keamanan pada instansi/perusahaan sudah memasukkan aspek Pelindungan Data Pribadi?</label>
                <div class="options">
                    <label><input type="radio" name="q7" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q7" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q7" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q7" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 8 -->
            <div class="form-group">
                <label for="q8">8. Apakah mekanisme pelindungan data pribadi sudah diterapkan sesuai keperluan mitigasi risiko dan peraturan perundangan yang berlaku?</label>
                <div class="options">
                    <label><input type="radio" name="q8" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q8" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q8" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q8" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 9 -->
            <div class="form-group">
                <label for="q9">9. Apakah instansi/perusahaan sudah menjalankan program peningkatan pemahaman/kepedulian kepada seluruh pegawai terkait Perlindungan Data Pribadi, termasuk hal-hal terkait Peraturan Perundangan yang berlaku?</label>
                <div class="options">
                    <label><input type="radio" name="q9" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q9" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q9" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q9" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 10 -->
            <div class="form-group">
                <label for="q10">10. Apakah instansi/perusahaan sudah mendapatkan persetujuan dari pemilik data pribadi saat mengambil data tersebut, termasuk penjelasan hak pemilik data, apa saja yang akan diberlakukan pada data pribadi tersebut dan menyimpan catatan persetujuan tersebut?</label>
                <div class="options">
                    <label><input type="radio" name="q10" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q10" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q10" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q10" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 11 -->
            <div class="form-group">
                <label for="q11">11. Apakah instansi/perusahaan sudah memiliki proses untuk melaporkan insiden terkait terungkapnya data pribadi?</label>
                <div class="options">
                    <label><input type="radio" name="q11" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q11" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q11" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q11" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 12 -->
            <div class="form-group">
                <label for="q12">12. Apakah instansi/perusahaan sudah menerapkan proses yang menjamin hak pemilik data pribadi untuk mengakses data tersebut?</label>
                <div class="options">
                    <label><input type="radio" name="q12" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q12" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q12" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q12" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 13 -->
            <div class="form-group">
                <label for="q13">13. Apakah instansi/perusahaan sudah menerapkan proses yang dapat memastikan data pribadi tersebut akurat dan termutakhirkan?</label>
                <div class="options">
                    <label><input type="radio" name="q13" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q13" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q13" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q13" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 14 -->
            <div class="form-group">
                <label for="q14">14. Apakah instansi/perusahaan sudah menerapkan proses terkait periode penyimpanan data pribadi dan penghapusan/pemusnahannya sesuai dengan peraturan atau perjanjian dengan pemilik data?</label>
                <div class="options">
                    <label><input type="radio" name="q14" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q14" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q14" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q14" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 15 -->
            <div class="form-group">
                <label for="q15">15. Apakah instansi/perusahaan sudah menerapkan proses terkait penghapusan/pemusnahan data apabila sudah tidak ada keperluan yang sah untuk menyimpan/mengolahnya lebih lanjut atau atas permintaan pemilik data dan menyimpan catatan proses tersebut?</label>
                <div class="options">
                    <label><input type="radio" name="q15" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q15" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q15" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q15" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 16 -->
            <div class="form-group">
                <label for="q16">16. Apakah instansi/perusahaan sudah menerapkan proses terkait pengungkapan data pribadi atas permintaan resmi aparat penegak hukum?</label>
                <div class="options">
                    <label><input type="radio" name="q16" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q16" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q16" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q16" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>


            <!-- Navigation Buttons -->
            <div class="navigation-buttons">
                <button type="button" class="nav-btn previous" onclick="window.history.back()">←</button>
                <button type="submit" class="nav-btn next">→</button>
            </div>
        </form>
    </main>

    <script src="scripts/script.js"></script>
</body>
</html>
