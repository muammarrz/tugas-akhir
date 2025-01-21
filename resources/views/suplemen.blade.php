<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suplemen - Indeks KAMI</title>
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
            <h2>Suplemen</h2>
        </header>

        <form id="supplementForm" class="supplement-form" action="{{ route('store-suplemen', ['responden_id' => $responden_id]) }}" method="POST">
            @csrf
            <h3>Manajemen Risiko dan Pengelolaan Keamanan Pihak Ketiga</h3>
            <!-- Pertanyaan -->
            <div class="form-group">
                <label for="q1">1. Apakah instansi/perusahaan mengidentifikasi risiko keamanan informasi yang ada terkait dengan kerjasama dengan pihak ketiga atau karyawan kontrak?</label>
                <div class="options">
                    <label><input type="radio" name="q1" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q1" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q1" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q1" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q2">2. Apakah instansi/perusahaan mengkomunikasikan dan mengklarifikasi risiko keamanan informasi yang ada pada pihak ketiga kepada mereka?</label>
                <div class="options">
                    <label><input type="radio" name="q2" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q2" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q2" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q2" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q3">3. Apakah instansi/perusahaan mengklarifikasi persyaratan mitigasi risiko instansi/perusahaan dan ekspektasi mitigasi risiko yang harus dipatuhi oleh pihak ketiga?</label>
                <div class="options">
                    <label><input type="radio" name="q3" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q3" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q3" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q3" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q4">4. Apakah rencana mitigasi terhadap risiko yang diidentifikasi tersebut disetujui oleh manajemen pihak ketiga atau karyawan kontrak?</label>
                <div class="options">
                    <label><input type="radio" name="q4" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q4" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q4" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q4" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q5">5. Apakah instansi/perusahaan telah menerapkan kebijakan keamanan informasi bagi pihak ketiga secara memadai, mencakup persyaratan pengendalian akses, penghancuran informasi, manajemen risiko penyediaan layanan pihak ketiga, dan NDA bagi karyawan pihak ketiga?</label>
                <div class="options">
                    <label><input type="radio" name="q5" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q5" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q5" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q5" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q6">6. Apakah kebijakan tersebut (7.1.1.5) telah dikomunikasikan kepada pihak ketiga dan mereka menyatakan persetujuannya dalam dokumen kontrak, SLA atau dokumen sejenis lainnya?</label>
                <div class="options">
                    <label><input type="radio" name="q6" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q6" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q6" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q6" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q7">7. Apakah hak audit TI secara berkala ke pihak ketiga/pihak ketiga telah ditetapkan sebagai bagian dan persyaratan kontrak, dikomunikasikan dan disetujui pihak ketiga? Termasuk di dalamnya akses terhadap laporan audit internal / eksternal tentang kondisi kontrol keamanan informasi pihak ketiga/pihak ketiga?</label>
                <div class="options">
                    <label><input type="radio" name="q7" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q7" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q7" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q7" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <h3>Pengelolaan Sub-Kontraktor/Alih Daya pada Pihak Ketiga</h3>
            <div class="form-group">
                <label for="q8">1. Apakah pihak ketiga sudah mengidentifikasi risiko terkait alih daya, subkontraktor atau penyedia teknologi/infrastruktur yang digunakan dalam layanannya?</label>
                <div class="options">
                    <label><input type="radio" name="q8" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q8" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q8" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q8" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q9">2. Apakah pihak ketiga sudah menerapkan pengendalian risikonya dalam perjanjian dengan mereka atau dokumen sejenis?</label>
                <div class="options">
                    <label><input type="radio" name="q9" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q9" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q9" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q9" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q10">3. Apakah pihak ketiga melakukan pemantauan dan evaluasi terhadap kepatuhan alih daya, subkontraktor atau penyedia teknologi/infrastruktur terhadap persyaratan keamanan yang ditetapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q10" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q10" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q10" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q10" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <h3>Pengelolaan Layanan dan Keamanan Pihak Ketiga</h3>
            <div class="form-group">
                <label for="q11">1. Apakah instansi/perusahaan telah menetapkan proses, prosedur atau rencana terdokumentasi untuk mengelola dan memantau layanan dan aspek keamanan informasi (termasuk pengamanan aset informasi dan infrastruktur milik instansi/perusahaan yang diakses) dalam hubungan kerjasama dengan pihak ketiga?</label>
                <div class="options">
                    <label><input type="radio" name="q11" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q11" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q11" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q11" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q12">2. Apakah peran dan tanggung jawab pemantauan, evaluasi dan/atau audit aspek keamanan informasi pihak ketiga telah ditetapkan dan/atau ditugaskan dalam unit organisasi tertentu?</label>
                <div class="options">
                    <label><input type="radio" name="q12" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q12" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q12" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q12" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q13">3. Apakah tersedia laporan berkala tentang pencapaian sasaran tingkat layanan (SLA) dan aspek keamanan yang disyaratkan dalam perjanjian komersil (kontrak)?</label>
                <div class="options">
                    <label><input type="radio" name="q13" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q13" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q13" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q13" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q14">4. Apakah ada rapat secara berkala untuk memantau dan mengevaluasi pencapaian sasaran tingkat layanan (SLA) dan aspek keamanan?</label>
                <div class="options">
                    <label><input type="radio" name="q14" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q14" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q14" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q14" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q15">5. Apakah hasil pemantauan dan evaluasi terhadap laporan atau pembahasan dalam rapat berkala tersebut didokumentasikan, dikomunikasikan dan ditindaklanjuti oleh pihak ketiga serta dilaporkan kemajuannya kepada instansi/perusahaan?</label>
                <div class="options">
                    <label><input type="radio" name="q15" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q15" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q15" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q15" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q16">6. Apakah instansi/perusahaan telah menetapkan rencana dan melakukan audit terhadap pemenuhan persyaratan keamanan informasi oleh pihak ketiga?</label>
                <div class="options">
                    <label><input type="radio" name="q16" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q16" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q16" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q16" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q17">7. Apakah hasil audit tersebut ditindaklanjuti oleh pihak ketiga dengan melaporkan rencana perbaikan yang terukur dan bukti-bukti penerapan rencana tersebut?</label>
                <div class="options">
                    <label><input type="radio" name="q17" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q17" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q17" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q17" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q18">8. Apakah kondisi terkait denda / penalti karena ketidakpatuhan pihak ketiga terhadap persyaratan dan / atau tingkat layanan telah didokumentasikan, dikomunikasikan, dipahami dan diterapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q18" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q18" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q18" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q18" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <h3>Pengelolaan Perubahan Layanan dan Kebijakan Pihak Ketiga</h3>
            <div class="form-group">
                <label for="q19">1. Apakah instansi/perusahaan mengelola perubahan yang terjadi dalam hubungan dengan pihak ketiga yang menyangkut antara lain?<br>
                    - Perubahan layanan pihak ketiga;<br>
                    - Perubahan kebijakan, prosedur, dan/atau <br>
                    - Kontrol risiko pihak ketiga?"</label>
                <div class="options">
                    <label><input type="radio" name="q19" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q19" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q19" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q19" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q20">2. Apakah risiko yang menyertai perubahan tersebut dikaji, didokumentasikan dan ditetapkan rencana mitigasi barunya?</label>
                <div class="options">
                    <label><input type="radio" name="q20" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q20" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q20" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q20" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <h3>Penanganan Aset</h3>
            <div class="form-group">
                <label for="q21">1. Apakah pihak ketiga memiliki prosedur formal untuk menangani data selama dalam siklus hidupnya mulai dari pembuatan, pendaftaran, perubahan, dan penghapusan / penghancuran aset?</label>
                <div class="options">
                    <label><input type="radio" name="q21" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q21" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q21" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q21" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q22">2. Apakah per untuk penghancuran (disposal) data secara aman telah disepakati bersama pihak ketiga (pihak ketiga)?</label>
                <div class="options">
                    <label><input type="radio" name="q22" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q22" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q22" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q22" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <h3>Pengelolaan Insiden oleh Pihak Ketiga</h3>
            <div class="form-group">
                <label for="q23">1. Apakah pihak ketiga memiliki prosedur untuk pelaporan, pemantauan, penanganan, dan analisis insiden keamanan informasi?</label>
                <div class="options">
                    <label><input type="radio" name="q23" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q23" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q23" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q23" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q24">2. Apakah pihak ketiga memiliki bukti-bukti penerapan yang memadai dalam menangani insiden keamanan informasi?</label>
                <div class="options">
                    <label><input type="radio" name="q24" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q24" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q24" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q24" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <h3>Rencana Kelangsungan Layanan Pihak Ketiga</h3>
            <div class="form-group">
                <label for="q25">1. Apakah pihak ketiga memiliki kebijakan, prosedur atau rencana terdokumentasi untuk mengatasi kelangsungan layanan pihak ketiga dalam keadaan darurat/bencana?</label>
                <div class="options">
                    <label><input type="radio" name="q25" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q25" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q25" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q25" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q26">2. Apakah kebijakan, prosedur atau rencana kelangsungan layanan tersebut telah diujicoba, didokumentasikan hasilnya dan dievaluasi efektivitasnya?</label>
                <div class="options">
                    <label><input type="radio" name="q26" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q26" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q26" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q26" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q27">2. Apakah pihak ketiga memiliki organisasi atau tim khusus yang ditugaskan untuk mengelola proses kelangsungan layanannya?</label>
                <div class="options">
                    <label><input type="radio" name="q27" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q27" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q27" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q27" value="3" required> Ditetapkan Secara Menyeluruh</label>
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
