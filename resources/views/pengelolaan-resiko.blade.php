<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelolaan Risiko Keamanan Informasi - Indeks KAMI</title>
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
            <h2>Pengelolaan Risiko Keamanan Informasi</h2>
        </header>

        <form id="riskForm" class="risk-form" action="{{ route('store-pengelolaan-resiko', ['responden_id' => $responden_id]) }}" method="POST">
            @csrf
            <!-- Pertanyaan 1 -->
            <div class="form-group">
                <label for="q1">1. Apakah instansi/perusahaan anda mempunyai program kerja pengelolaan risiko keamanan informasi yang terdokumentasi dan secara resmi digunakan?</label>
                <div class="options">
                    <label><input type="radio" name="q1" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q1" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q1" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q1" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 2-16 -->
            <div class="form-group">
                <label for="q2">2. Apakah instansi/perusahaan anda sudah menetapkan penanggung jawab manajemen risiko dan eskalasi pelaporan status pengelolaan risiko keamanan informasi sampai ke tingkat pimpinan?</label>
                <div class="options">
                    <label><input type="radio" name="q2" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q2" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q2" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q2" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 3 -->
            <div class="form-group">
                <label for="q3">3. Apakah instansi/perusahaan anda mempunyai kerangka kerja pengelolaan risiko keamanan informasi yang terdokumentasi dan secara resmi digunakan?</label>
                <div class="options">
                    <label><input type="radio" name="q3" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q3" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q3" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q3" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q4">4. Apakah kerangka kerja pengelolaan risiko ini mencakup definisi dan hubungan tingkat klasifikasi aset informasi, tingkat ancaman, kemungkinan terjadinya ancaman tersebut dan dampak kerugian terhadap instansi/perusahaan anda?</label>
                <div class="options">
                    <label><input type="radio" name="q4" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q4" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q4" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q4" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q5">5. Apakah instansi/perusahaan anda sudah menetapkan ambang batas tingkat risiko yang dapat diterima?</label>
                <div class="options">
                    <label><input type="radio" name="q5" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q5" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q5" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q5" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q6">6. Apakah instansi/perusahaan anda sudah mendefinisikan kepemilikan dan pihak pengelola (custodian) aset informasi yang ada, termasuk aset utama/penting dan proses kerja utama yang menggunakan aset tersebut?</label>
                <div class="options">
                    <label><input type="radio" name="q6" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q6" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q6" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q6" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q7">7. Apakah ancaman dan kelemahan yang terkait dengan aset informasi, terutama untuk setiap aset utama sudah teridentifikasi? </label>
                <div class="options">
                    <label><input type="radio" name="q7" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q7" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q7" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q7" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q8">8. Apakah dampak kerugian yang terkait dengan hilangnya/terganggunya fungsi aset utama sudah ditetapkan sesuai dengan definisi yang ada?  </label>
                <div class="options">
                    <label><input type="radio" name="q8" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q8" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q8" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q8" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q9">9. Apakah instansi/perusahaan anda sudah menjalankan inisiatif analisa/kajian risiko keamanan informasi secara terstruktur terhadap aset informasi yang ada (untuk nantinya digunakan dalam mengidentifikasi langkah mitigasi atau penanggulangan yang menjadi bagian dari program pengelolaan keamanan informasi)? </label>
                <div class="options">
                    <label><input type="radio" name="q9" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q9" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q9" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q9" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q10">10. Apakah instansi/perusahaan anda sudah menyusun langkah mitigasi dan penanggulangan risiko yang ada? </label>
                <div class="options">
                    <label><input type="radio" name="q10" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q10" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q10" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q10" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q11">11. Apakah langkah mitigasi risiko disusun sesuai tingkat prioritas dengan target penyelesaiannya dan penanggungjawabnya, dengan memastikan efektifitas penggunaan sumber daya yang dapat menurunkan tingkat risiko ke ambang batas yang bisa diterima dengan meminimalisir dampak terhadap operasional layanan TIK?</label>
                <div class="options">
                    <label><input type="radio" name="q11" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q11" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q11" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q11" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q12">12. Apakah status penyelesaian langkah mitigasi risiko dipantau secara berkala, untuk memastikan penyelesaian atau kemajuan kerjanya? </label>
                <div class="options">
                    <label><input type="radio" name="q12" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q12" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q12" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q12" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q13">13. Apakah penyelesaian langkah mitigasi yang sudah diterapkan dievaluasi, melalui proses yang obyektif/terukur untuk memastikan konsistensi dan efektifitasnya? </label>
                <div class="options">
                    <label><input type="radio" name="q13" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q13" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q13" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q13" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q14">14. Apakah profil risiko berikut bentuk mitigasinya secara berkala dikaji ulang untuk memastikan akurasi dan validitasnya, termasuk merevisi profil terebut apabila ada perubahan kondisi yang signifikan atau keperluan penerapan bentuk pengamanan baru? </label>
                <div class="options">
                    <label><input type="radio" name="q14" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q14" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q14" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q14" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q15">15. Apakah kerangka kerja pengelolaan risiko secara berkala dikaji untuk memastikan/meningkatkan efektifitasnya?</label>
                <div class="options">
                    <label><input type="radio" name="q15" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q15" value="3" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q15" value="6" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q15" value="9" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>


            <!-- Pertanyaan 16 -->
            <div class="form-group">
                <label for="q16">16. Apakah pengelolaan risiko menjadi bagian dari kriteria proses penilaian obyektif kinerja efektifitas pengamanan?</label>
                <div class="options">
                    <label><input type="radio" name="q16" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q16" value="3" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q16" value="6" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q16" value="9" required> Ditetapkan Secara Menyeluruh</label>
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
