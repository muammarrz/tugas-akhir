<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tata Kelola Informasi - Indeks KAMI</title>
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
            <h2>Tata Kelola Informasi</h2>
        </header>

        <form id="governanceForm" class="governance-form" action="{{ route('store-tata-kelola', ['responden_id' => $responden_id]) }}" method="POST">
            @csrf
            <!-- Pertanyaan -->
            <div class="form-group">
                <label for="q1">1. Apakah pimpinan instansi/perusahaan anda secara prinsip dan resmi bertanggungjawab terhadap pelaksanaan program keamanan informasi (misal yang tercantum dalam ITSP), termasuk penetapan kebijakan terkait?</label>
                <div class="options">
                    <label><input type="radio" name="q1" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q1" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q1" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q1" value="3" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>



            <!-- Pertanyaan 2 -->
            <div class="form-group">
                <label for="q2">2. Apakah instansi/perusahaan anda memiliki fungsi atau bagian yang secara spesifik mempunyai tugas dan tanggungjawab mengelola keamanan informasi dan menjaga kepatuhannya?</label>
                <div class="options">
                    <label><input type="radio" name="q2" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q2" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q2" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q2" value="3" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 3 -->
            <div class="form-group">
                <label for="q3">3. Apakah pejabat/petugas pelaksana pengamanan informasi mempunyai wewenang yang sesuai untuk menerapkan dan menjamin kepatuhan program keamanan informasi? </label>
                <div class="options">
                    <label><input type="radio" name="q3" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q3" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q3" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q3" value="3" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q4">4. Apakah penanggungjawab pelaksanaan pengamanan informasi diberikan alokasi sumber daya yang sesuai untuk mengelola dan menjamin kepatuhan program keamanan informasi? </label>
                <div class="options">
                    <label><input type="radio" name="q4" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q4" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q4" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q4" value="3" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q5">5. Apakah pejabat/petugas pelaksana pengamanan informasi mempunyai wewenang yang sesuai untuk menerapkan dan menjamin kepatuhan program keamanan informasi? </label>
                <div class="options">
                    <label><input type="radio" name="q5" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q5" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q5" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q5" value="3" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q6">6. Apakah instansi/perusahaan anda sudah mendefinisikan persyaratan/standar kompetensi dan keahlian pelaksana pengelolaan keamanan informasi?</label>
                <div class="options">
                    <label><input type="radio" name="q6" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q6" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q6" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q6" value="3" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q7">7. Apakah semua pelaksana pengamanan informasi di instansi/perusahaan anda memiliki kompetensi dan keahlian yang memadai sesuai persyaratan/standar yang berlaku? </label>
                <div class="options">
                    <label><input type="radio" name="q7" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q7" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q7" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q7" value="3" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q8">8. Apakah instansi/perusahaan anda sudah menerapkan program sosialisasi dan peningkatan pemahaman untuk keamanan informasi, termasuk kepentingan kepatuhannya bagi semua pihak yang terkait?</label>
                <div class="options">
                    <label><input type="radio" name="q8" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q8" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q8" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q8" value="3" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q9">9. Apakah instansi/perusahaan anda menerapkan program peningkatan kompetensi dan keahlian untuk pejabat dan petugas pelaksana pengelolaan keamanan informasi? </label>
                <div class="options">
                    <label><input type="radio" name="q9" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q9" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q9" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q9" value="6" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q10">10. Apakah instansi/perusahaan anda sudah mengintegrasikan keperluan/persyaratan keamanan informasi dalam proses kerja yang ada?</label>
                <div class="options">
                    <label><input type="radio" name="q10" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q10" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q10" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q10" value="6" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q11">11. Apakah instansi/perusahaan anda sudah mengidentifikasikan data pribadi yang digunakan dalam proses kerja dan menerapkan pengamanan sesuai dengan peraturan perundangan yang berlaku?</label>
                <div class="options">
                    <label><input type="radio" name="q11" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q11" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q11" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q11" value="6" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q12">12. Apakah tanggungjawab pengelolaan keamanan informasi mencakup koordinasi dengan pihak pengelola/pengguna aset informasi internal dan eksternal maupun pihak lain yang berkepentingan, untuk mengidentifikasikan persyaratan/kebutuhan pengamanan (misal: pertukaran informasi atau kerjasama yang melibatkan informasi penting) dan menyelesaikan permasalahan yang ada? </label>
                <div class="options">
                    <label><input type="radio" name="q12" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q12" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q12" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q12" value="6" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q13">13. Apakah pengelola keamanan informasi secara proaktif berkoordinasi dengan satker terkait (SDM, Legal/Hukum, Umum, Keuangan dll) dan pihak eksternal yang berkepentingan (misal: regulator, aparat keamanan) untuk menerapkan dan menjamin kepatuhan pengamanan informasi terkait proses kerja yang melibatkan berbagai pihak?</label>
                <div class="options">
                    <label><input type="radio" name="q13" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q13" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q13" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q13" value="6" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q14">14. Apakah tanggungjawab untuk memutuskan, merancang, melaksanakan dan mengelola langkah kelangsungan layanan TIK (business continuity dan disaster recovery plans) sudah didefinisikan dan dialokasikan?  </label>
                <div class="options">
                    <label><input type="radio" name="q14" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q14" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q14" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q14" value="6" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q15">15. Apakah penanggungjawab pengelolaan keamanan informasi melaporkan kondisi, kinerja/efektifitas dan kepatuhan program keamanan informasi kepada pimpinan instansi/perusahaan secara rutin dan resmi?</label>
                <div class="options">
                    <label><input type="radio" name="q15" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q15" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q15" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q15" value="6" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q16">16. Apakah kondisi dan permasalahan keamanan informasi di instansi/perusahaan anda menjadi konsiderans atau bagian dari proses pengambilan keputusan strategis di instansi/perusahaan anda?</label>
                <div class="options">
                    <label><input type="radio" name="q16" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q16" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q16" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q16" value="6" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q17">17. Apakah pimpinan satuan kerja di instansi/perusahaan anda menerapkan program khusus untuk mematuhi tujuan dan sasaran kepatuhan pengamanan informasi, khususnya yang mencakup aset informasi yang menjadi tanggungjawabnya?</label>
                <div class="options">
                    <label><input type="radio" name="q17" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q17" value="3" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q17" value="6" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q17" value="9" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q18">18. Apakah instansi/perusahaan anda sudah mendefinisikan metrik, paramater dan proses pengukuran kinerja pengelolaan keamanan informasi yang mencakup mekanisme, waktu pengukuran, pelaksananya, pemantauannya dan eskalasi pelaporannya?</label>
                <div class="options">
                    <label><input type="radio" name="q18" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q18" value="3" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q18" value="6" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q18" value="9" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q19">19. Apakah instansi/perusahaan anda sudah menerapkan program penilaian kinerja pengelolaan keamanan informasi bagi individu (pejabat & petugas) pelaksananya?</label>
                <div class="options">
                    <label><input type="radio" name="q19" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q19" value="3" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q19" value="6" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q19" value="9" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q20">20. Apakah instansi/perusahaan anda sudah menerapkan target dan sasaran pengelolaan keamanan informasi untuk berbagai area yang relevan, mengevaluasi pencapaiannya secara rutin, menerapkan langkah perbaikan untuk mencapai sasaran yang ada, termasuk pelaporan statusnya kepada pimpinan instansi/perusahaan?</label>
                <div class="options">
                    <label><input type="radio" name="q20" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q20" value="3" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q20" value="6" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q20" value="9" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q21">21. Apakah instansi/perusahaan anda sudah mengidentifikasi legislasi, perangkat hukum dan standar lainnya terkait keamanan informasi yang harus dipatuhi dan menganalisa tingkat kepatuhannya?</label>
                <div class="options">
                    <label><input type="radio" name="q21" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q21" value="3" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q21" value="6" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q21" value="9" required> Diterapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 22 -->
            <div class="form-group">
                <label for="q22">22. Apakah instansi/perusahaan anda sudah mendefinisikan kebijakan dan langkah penanggulangan insiden keamanan informasi yang menyangkut pelanggaran hukum (pidana dan perdata)?</label>
                <div class="options">
                    <label><input type="radio" name="q22" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q22" value="3" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q22" value="6" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q22" value="9" required> Diterapkan Secara Menyeluruh</label>
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
