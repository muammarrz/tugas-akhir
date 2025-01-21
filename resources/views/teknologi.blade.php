<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teknologi dan Keamanan Informasi - Indeks KAMI</title>
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
            <h2>Teknologi dan Keamanan Informasi</h2>
        </header>

        <form id="technologyForm" class="technology-form" action="{{ route('store-teknologi', ['responden_id' => $responden_id]) }}" method="POST">
            @csrf
            <!-- Pertanyaan -->
            <div class="form-group">
                <label for="q1">1. Apakah layanan TIK (sistem komputer) yang menggunakan internet sudah dilindungi dengan lebih dari 1 lapis pengamanan?</label>
                <div class="options">
                    <label><input type="radio" name="q1" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q1" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q1" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q1" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q2">2. Apakah jaringan komunikasi disegmentasi sesuai dengan kepentingannya (pembagian instansi/perusahaan, kebutuhan aplikasi, jalur akses khusus, dll)?</label>
                <div class="options">
                    <label><input type="radio" name="q2" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q2" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q2" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q2" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q3">3. Apakah tersedia konfigurasi standar untuk keamanan sistem bagi keseluruhan aset jaringan, sistem dan aplikasi, yang dimutakhirkan sesuai perkembangan (standar industri yang berlaku) dan kebutuhan?</label>
                <div class="options">
                    <label><input type="radio" name="q3" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q3" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q3" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q3" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q4">4. Apakah tersedia proses pengelolaan konfigurasi perangkat komputasi (server, perangkat jaringan, sistem operasi dan aplikasi) yang diterapkan secara konsisten?</label>
                <div class="options">
                    <label><input type="radio" name="q4" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q4" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q4" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q4" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q5">5. Apakah perangkat komputasi terpasang tersebut sudah dikaji ulang secara berkala sesuai dengan konfigurasi standard untuk keamanan sistem, dipantau efektivitasnya dan dimutakhirkan/disesuaikan konfigurasnyai melalui proses Manajemen Perubahan (change management)?</label>
                <div class="options">
                    <label><input type="radio" name="q5" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q5" value="3" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q5" value="6" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q5" value="9" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q6">6. Apakah jaringan, sistem dan aplikasi yang digunakan secara rutin dipindai untuk mengidentifikasi kemungkinan adanya celah kelemahan atau perubahan/keutuhan konfigurasi?</label>
                <div class="options">
                    <label><input type="radio" name="q6" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q6" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q6" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q6" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q7">7. Apakah keseluruhan infrastruktur jaringan, sistem dan aplikasi dirancang untuk memastikan ketersediaan (rancangan redundan) sesuai kebutuhan/persyaratan yang ada?</label>
                <div class="options">
                    <label><input type="radio" name="q7" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q7" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q7" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q7" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q8">8. Apakah keseluruhan infrastruktur jaringan, sistem dan aplikasi dimonitor untuk memastikan ketersediaan kapasitas yang cukup untuk kebutuhan yang ada dan efektivitas keamanannya?</label>
                <div class="options">
                    <label><input type="radio" name="q8" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q8" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q8" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q8" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q9">9. Apakah setiap perubahan dalam sistem informasi secara otomatis terekam di dalam log?</label>
                <div class="options">
                    <label><input type="radio" name="q9" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q9" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q9" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q9" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q10">10. Apakah upaya akses oleh yang tidak berhak secara otomatis terekam di dalam log?</label>
                <div class="options">
                    <label><input type="radio" name="q10" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q10" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q10" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q10" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>


            <!-- Lanjutkan hingga q11 -->
            <div class="form-group">
                <label for="q11">11. Apakah semua log dianalisa secara berkala untuk memastikan akurasi, validitas dan kelengkapan isinya (untuk kepentingan jejak audit dan forensik)?</label>
                <div class="options">
                    <label><input type="radio" name="q11" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q11" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q11" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q11" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
                <div class="note">
                    <strong>[Catatan Periksa]</strong> Minimal yang harus di log adalah sbb:
                    <ol>
                        <li>Outbound and inbound trafik jaringan;</li>
                        <li>Akses terhadap sistem, server, perangkat jaringan, aplikasi kritis;</li>
                        <li>Penggunaan file sistem dan konfigurasi jaringan;</li>
                        <li>Dari perangkat keamanan (seperti antivirus, IDS, intrusion prevention system (IPS), web filters, firewalls, data leakage prevention);</li>
                        <li>Event log yang berhubungan dengan sistem dan aktivitas jaringan.</li>
                    </ol>
                </div>
            </div>

            <!-- Pertanyaan 12 -->
            <div class="form-group">
                <label for="q12">12. Apakah instansi/perusahaan Anda menerapkan enkripsi untuk melindungi aset informasi penting sesuai kebijakan pengelolaan yang ada?</label>
                <div class="options">
                    <label><input type="radio" name="q12" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q12" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q12" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q12" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 13 -->
            <div class="form-group">
                <label for="q13">13. Apakah instansi/perusahaan Anda mempunyai standar dalam menggunakan enkripsi?</label>
                <div class="options">
                    <label><input type="radio" name="q13" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q13" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q13" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q13" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 14 -->
            <div class="form-group">
                <label for="q14">14. Apakah instansi/perusahaan Anda menerapkan pengamanan untuk mengelola kunci enkripsi (termasuk sertifikat elektronik) yang digunakan, termasuk siklus penggunaannya?</label>
                <div class="options">
                    <label><input type="radio" name="q14" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q14" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q14" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q14" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 15 -->
            <div class="form-group">
                <label for="q15">15. Apakah semua sistem dan aplikasi secara otomatis mendukung dan menerapkan penggantian password secara otomatis, termasuk menon-aktifkan password, mengatur kompleksitas/panjangnya, dan penggunaan kembali password lama?</label>
                <div class="options">
                    <label><input type="radio" name="q15" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q15" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q15" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q15" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 16 -->
            <div class="form-group">
                <label for="q16">16. Apakah akses yang digunakan untuk mengelola sistem (administrasi sistem) menggunakan bentuk pengamanan khusus yang berlapis?</label>
                <div class="options">
                    <label><input type="radio" name="q16" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q16" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q16" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q16" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 17 -->
            <div class="form-group">
                <label for="q17">17. Apakah sistem dan aplikasi yang digunakan sudah menerapkan pembatasan waktu akses termasuk otomatisasi proses timeouts, lockout setelah kegagalan login, dan penarikan akses?</label>
                <div class="options">
                    <label><input type="radio" name="q17" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q17" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q17" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q17" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 18 -->
            <div class="form-group">
                <label for="q18">18. Apakah instansi/perusahaan Anda menerapkan pengamanan untuk mendeteksi dan mencegah penggunaan akses jaringan (termasuk jaringan nirkabel) yang tidak resmi?</label>
                <div class="options">
                    <label><input type="radio" name="q18" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q18" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q18" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q18" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 19 -->
            <div class="form-group">
                <label for="q19">19. Apakah instansi/perusahaan Anda menerapkan bentuk pengamanan khusus untuk melindungi akses dari luar instansi/perusahaan?</label>
                <div class="options">
                    <label><input type="radio" name="q19" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q19" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q19" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q19" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 20 -->
            <div class="form-group">
                <label for="q20">20. Apakah sistem operasi untuk setiap perangkat desktop dan server dimutakhirkan dengan versi terkini?</label>
                <div class="options">
                    <label><input type="radio" name="q20" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q20" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q20" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q20" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 21 -->
            <div class="form-group">
                <label for="q21">21. Apakah setiap desktop dan server dilindungi dari penyerangan virus (malware)?</label>
                <div class="options">
                    <label><input type="radio" name="q21" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q21" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q21" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q21" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 22 -->
            <div class="form-group">
                <label for="q22">22. Apakah ada rekaman dan hasil analisa (jejak audit - audit trail) yang mengkonfirmasi bahwa antivirus/antimalware telah dimutakhirkan secara rutin dan sistematis?</label>
                <div class="options">
                    <label><input type="radio" name="q22" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q22" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q22" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q22" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 23 -->
            <div class="form-group">
                <label for="q23">23. Apakah adanya laporan penyerangan virus/malware yang gagal/sukses ditindaklanjuti dan diselesaikan?</label>
                <div class="options">
                    <label><input type="radio" name="q23" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q23" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q23" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q23" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 24 -->
            <div class="form-group">
                <label for="q24">24. Apakah instansi/perusahaan Anda secara rutin menganalisa dan menetapkan website yang membahayakan perusahaan atau tidak seharusnya diakses karyawan? Untuk selanjutnya website tersebut diblok agar tidak dapat diakses.</label>
                <div class="options">
                    <label><input type="radio" name="q24" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q24" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q24" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q24" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 25 -->
            <div class="form-group">
                <label for="q25">25. Apakah keseluruhan jaringan, sistem dan aplikasi sudah menggunakan mekanisme sinkronisasi waktu yang akurat, sesuai dengan standar yang ada?</label>
                <div class="options">
                    <label><input type="radio" name="q25" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q25" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q25" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q25" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 26 -->
            <div class="form-group">
                <label for="q26">26. Apakah instansi/perusahaan Anda sudah menetapkan prinsip pengembangan aplikasi yang aman (secure coding) yang digunakan untuk pengembangan aplikasi secara internal (in-house) maupun yang melibatkan pihak eksternal? Misal: menggunakan standar OWASP 10.</label>
                <div class="options">
                    <label><input type="radio" name="q26" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q26" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q26" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q26" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 27 -->
            <div class="form-group">
                <label for="q27">27. Apakah instansi/perusahaan Anda sudah menerapkan proses perencanaan pengembangan sistem? (Dengan mempertimbangkan hasil pemrograman yang tidak baik/laik pada sistem sebelumnya, konfigurasi software development tool yang aman (secure), kontrol terhadap lingkungan pengembangan, desain arsitektur yang aman).</label>
                <div class="options">
                    <label><input type="radio" name="q27" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q27" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q27" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q27" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 28 -->
            <div class="form-group">
                <label for="q28">28. Apakah instansi/perusahaan Anda menerapkan proses source code review (baik secara manual atau menggunakan piranti lunak) sebelum dijalankan di lingkungan produksi?</label>
                <div class="options">
                    <label><input type="radio" name="q28" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q28" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q28" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q28" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 29 -->
            <div class="form-group">
                <label for="q29">29. Apakah instansi/perusahaan Anda menerapkan kontrol akses untuk source code aplikasi?</label>
                <div class="options">
                    <label><input type="radio" name="q29" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q29" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q29" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q29" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 30 -->
            <div class="form-group">
                <label for="q30">30. Apakah setiap aplikasi yang ada memiliki spesifikasi dan fungsi keamanan yang diverifikasi/validasi pada saat proses pengembangan dan uji coba?</label>
                <div class="options">
                    <label><input type="radio" name="q30" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q30" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q30" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q30" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 31 -->
            <div class="form-group">
                <label for="q31">31. Apakah instansi/perusahaan Anda secara rutin menganalisa dan memperbaiki jika ditemukenali ancaman baru (misal adanya laporan kelemahan dan/atau teknik eksploit baru) yang berdampak pada keamanan sistem aplikasi?</label>
                <div class="options">
                    <label><input type="radio" name="q31" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q31" value="3" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q31" value="6" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q31" value="9" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 32 -->
            <div class="form-group">
                <label for="q32">32. Apakah instansi/perusahaan Anda menerapkan lingkungan pengembangan dan uji coba yang sudah diamankan sesuai dengan standar platform teknologi yang ada dan digunakan untuk seluruh siklus hidup sistem yang dibangun?</label>
                <div class="options">
                    <label><input type="radio" name="q32" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q32" value="3" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q32" value="6" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q32" value="9" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 33 -->
            <div class="form-group">
                <label for="q33">33. Apakah instansi/perusahaan sudah menerapkan proses atau mekanisme untuk mencegah terungkapnya informasi sensitif ke luar dari perusahaan (misal membatasi/mengkarantina lampiran email atau memblokir pengiriman dokumen/data ke luar)?</label>
                <div class="options">
                    <label><input type="radio" name="q33" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q33" value="3" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q33" value="6" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q33" value="9" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 34 -->
            <div class="form-group">
                <label for="q34">34. Apakah instansi/perusahaan sudah menerapkan teknologi (DLP Data Leakage Prevention) untuk mencegah terungkapnya informasi sensitif ke luar dari perusahaan?</label>
                <div class="options">
                    <label><input type="radio" name="q34" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q34" value="3" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q34" value="6" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q34" value="9" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 35 -->
            <div class="form-group">
                <label for="q35">35. Apakah instansi/perusahaan Anda melibatkan pihak independen untuk mengkaji kehandalan keamanan informasi secara rutin?</label>
                <div class="options">
                    <label><input type="radio" name="q35" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q35" value="3" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q35" value="6" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q35" value="9" required> Ditetapkan Secara Menyeluruh</label>
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
