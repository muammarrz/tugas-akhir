<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelolaan Aset - Indeks KAMI</title>
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
            <h2>Pengelolaan Aset</h2>
        </header>

        <form id="assetManagementForm" class="asset-management-form" action="{{ route('store-pengelolaan-aset', ['responden_id' => $responden_id]) }}" method="POST">
            @csrf
            <!-- Pertanyaan -->
            <div class="form-group">
                <label for="q1">1. Apakah tersedia daftar inventaris aset informasi dan aset yang berhubungan dengan proses teknologi informasi secara lengkap, akurat dan terpelihara? (termasuk kepemilikan aset)</label>
                <div class="options">
                    <label><input type="radio" name="q1" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q1" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q1" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q1" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q2">2. Apakah tersedia definisi klasifikasi aset informasi yang sesuai dengan peraturan perundangan yang berlaku?</label>
                <div class="options">
                    <label><input type="radio" name="q2" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q2" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q2" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q2" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 3 -->
            <div class="form-group">
                <label for="q3">3. Apakah tersedia proses yang mengevaluasi dan mengklasifikasi aset informasi sesuai tingkat kepentingan aset bagi instansi/perusahaan dan keperluan pengamanannya?</label>
                <div class="options">
                    <label><input type="radio" name="q3" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q3" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q3" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q3" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 4 -->
            <div class="form-group">
                <label for="q4">4. Apakah tersedia definisi tingkatan akses yang berbeda dari setiap klasifikasi aset informasi dan matriks yang merekam alokasi akses tersebut?</label>
                <div class="options">
                    <label><input type="radio" name="q4" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q4" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q4" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q4" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 5 -->
            <div class="form-group">
                <label for="q5">5. Apakah tersedia proses untuk mengidentifikasi dan menginventarisir syarat retensi aset informasi sesuai dengan peraturan perundangan yang ada dan menghapusnya jika sudah melewati batas retensi tersebut?</label>
                <div class="options">
                    <label><input type="radio" name="q5" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q5" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q5" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q5" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 6 -->
            <div class="form-group">
                <label for="q6">6. Apakah tersedia proses untuk mengevaluasi kepatuhan terhadap syarat retensi dan menghapus aset informasi jika sudah melewati batas retensi tersebut?</label>
                <div class="options">
                    <label><input type="radio" name="q6" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q6" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q6" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q6" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 7 -->
            <div class="form-group">
                <label for="q7">7. Apakah tersedia proses pengelolaan perubahan terhadap sistem, proses bisnis dan proses teknologi informasi (termasuk perubahan konfigurasi) yang diterapkan secara konsisten?</label>
                <div class="options">
                    <label><input type="radio" name="q7" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q7" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q7" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q7" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 8 -->
            <div class="form-group">
                <label for="q8">8. Apakah tersedia proses pengelolaan konfigurasi yang diterapkan secara konsisten?</label>
                <div class="options">
                    <label><input type="radio" name="q8" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q8" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q8" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q8" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 9 -->
            <div class="form-group">
                <label for="q9">9. Apakah tersedia proses untuk merilis suatu aset baru ke dalam lingkungan operasional dan memutakhirkan inventaris aset informasi?</label>
                <div class="options">
                    <label><input type="radio" name="q9" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q9" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q9" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q9" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 10 -->
            <div class="form-group">
                <label for="q10">10. Apakah instansi/perusahaan Anda memiliki dan menerapkan kontrol keamanan berikut ini, sebagai kelanjutan dari proses penerapan mitigasi risiko?</label>
                <div class="options">
                    <label><input type="radio" name="q10" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q10" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q10" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q10" value="0" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 11 -->
            <div class="form-group">
                <label for="q11">11. Apakah definisi tanggungjawab pengamanan informasi secara individual untuk semua personil di instansi/perusahaan Anda?</label>
                <div class="options">
                    <label><input type="radio" name="q11" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q11" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q11" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q11" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 12 -->
            <div class="form-group">
                <label for="q12">12. Apakah tata tertib penggunaan komputer, email, internet dan intranet telah diterapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q12" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q12" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q12" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q12" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 13 -->
            <div class="form-group">
                <label for="q13">13. Apakah tata tertib pengamanan dan penggunaan aset instansi/perusahaan terkait HAKI telah diterapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q13" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q13" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q13" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q13" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 14 -->
            <div class="form-group">
                <label for="q14">14. Apakah peraturan terkait instalasi piranti lunak di aset TI milik instansi/perusahaan telah diterapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q14" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q14" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q14" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q14" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 15 -->
            <div class="form-group">
                <label for="q15">15. Apakah peraturan penggunaan data pribadi yang mensyaratkan pemberian ijin tertulis oleh pemilik data pribadi telah diterapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q15" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q15" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q15" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q15" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 16 -->
            <div class="form-group">
                <label for="q16">16. Apakah pengelolaan identitas elektronik dan proses otentikasi (username & password) termasuk kebijakan terhadap pelanggarannya telah diterapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q16" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q16" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q16" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q16" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 17 -->
            <div class="form-group">
                <label for="q17">17. Apakah persyaratan dan prosedur pengelolaan/pemberian akses, otentikasi dan otorisasi untuk menggunakan aset informasi telah diterapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q17" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q17" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q17" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q17" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 18 -->
            <div class="form-group">
                <label for="q18">18. Apakah ketetapan terkait waktu penyimpanan untuk klasifikasi data yang ada dan syarat penghancuran data telah diterapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q18" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q18" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q18" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q18" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 19 -->
            <div class="form-group">
                <label for="q19">19. Apakah ketetapan terkait pertukaran data dengan pihak eksternal dan pengamanannya telah diterapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q19" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q19" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q19" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q19" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 20 -->
            <div class="form-group">
                <label for="q20">20. Apakah proses penyidikan/investigasi untuk menyelesaikan insiden terkait kegagalan keamanan informasi telah diterapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q20" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q20" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q20" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q20" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 21 -->
            <div class="form-group">
                <label for="q21">21. Apakah prosedur back-up dan uji coba pengembalian data (restore) secara berkala telah diterapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q21" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q21" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q21" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q21" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 22 -->
            <div class="form-group">
                <label for="q22">22. Apakah ketentuan pengamanan fisik yang disesuaikan dengan definisi zona dan klasifikasi aset yang ada di dalamnya telah diterapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q22" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q22" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q22" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q22" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 23 -->
            <div class="form-group">
                <label for="q23">23. Apakah proses pengecekan latar belakang SDM telah diterapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q23" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q23" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q23" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q23" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 24 -->
            <div class="form-group">
                <label for="q24">24. Apakah proses pelaporan insiden keamanan informasi kepada pihak eksternal ataupun pihak yang berwajib telah diterapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q24" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q24" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q24" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q24" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 25 -->
            <div class="form-group">
                <label for="q25">25. Apakah proses dan metoda untuk penghancuran informasi yang sudah tidak diperlukan sesuai dengan klasifikasi informasi telah diterapkan? (mis: secure delete, jenis/kerapatan shredder, dll.)</label>
                <div class="options">
                    <label><input type="radio" name="q25" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q25" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q25" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q25" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 26 -->
            <div class="form-group">
                <label for="q26">26. Apakah prosedur kajian penggunaan akses (user access review) dan hak aksesnya (user access rights) berikut langkah pembenahan apabila terjadi ketidaksesuaian terhadap kebijakan yang berlaku telah diterapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q26" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q26" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q26" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q26" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 27 -->
            <div class="form-group">
                <label for="q27">27. Apakah prosedur untuk user yang mutasi/keluar atau tenaga kontrak/outsource yang habis masa kerjanya telah diterapkan?</label>
                <div class="options">
                    <label><input type="radio" name="q27" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q27" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q27" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q27" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 28 -->
            <div class="form-group">
                <label for="q28">28. Apakah tersedia daftar data/informasi yang harus di-backup dan laporan analisa kepatuhan terhadap prosedur backup-nya?</label>
                <div class="options">
                    <label><input type="radio" name="q28" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q28" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q28" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q28" value="0" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 29 -->
            <div class="form-group">
                <label for="q29">29. Apakah tersedia daftar rekaman pelaksanaan keamanan informasi dan bentuk pengamanan yang sesuai dengan klasifikasinya?</label>
                <div class="options">
                    <label><input type="radio" name="q29" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q29" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q29" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q29" value="0" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 30 -->
            <div class="form-group">
                <label for="q30">30. Apakah telah diterapkan proses dan metoda untuk mengaburkan data (data masking) agar hanya dapat dilihat oleh pihak yang mempunyai otoritas sesuai regulasi atau kebijakan? Mis: pengamanan data pribadi, data sensitif.</label>
                <div class="options">
                    <label><input type="radio" name="q30" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q30" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q30" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q30" value="0" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 31 -->
            <div class="form-group">
                <label for="q31">31. Apakah tersedia prosedur penggunaan perangkat pengolah informasi milik pihak ketiga (termasuk perangkat milik pribadi dan mitra kerja/vendor) dengan memastikan aspek HAKI dan pengamanan akses yang digunakan?</label>
                <div class="options">
                    <label><input type="radio" name="q31" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q31" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q31" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q31" value="0" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 32 -->
            <div class="form-group">
                <label for="q32">32. Apakah instansi/perusahaan sudah melakukan kajian risiko terkait penggunaan layanan berbasis cloud dan menyesuaikan kebijakan keamanan informasi terkait layanan ini?</label>
                <div class="options">
                    <label><input type="radio" name="q32" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q32" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q32" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q32" value="6" required> Ditetapkan Secara Menyeluruh</label>
                    <label><input type="radio" name="q32" value="6" required> Tidak Berlaku / Relevan</label>
                </div>
            </div>

            <!-- Pertanyaan 33 -->
            <div class="form-group">
                <label for="q33">33. Apakah instansi/perusahaan sudah menetapkan data apa saja yang akan disimpan/diolah/dipertukarkan melalui layanan berbasis cloud?</label>
                <div class="options">
                    <label><input type="radio" name="q33" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q33" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q33" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q33" value="6" required> Ditetapkan Secara Menyeluruh</label>
                    <label><input type="radio" name="q33" value="6" required> Tidak Berlaku / Relevan</label>
                </div>
            </div>

            <!-- Pertanyaan 34 -->
            <div class="form-group">
                <label for="q34">34. Apakah instansi/perusahaan sudah menetapkan kebijakan dan menerapkan langkah pengamanan data pribadi yang disimpan/diolah/dipertukarkan melalui layanan cloud?</label>
                <div class="options">
                    <label><input type="radio" name="q34" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q34" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q34" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q34" value="6" required> Ditetapkan Secara Menyeluruh</label>
                    <label><input type="radio" name="q34" value="6" required> Tidak Berlaku / Relevan</label>
                </div>
            </div>

            <!-- Pertanyaan 35 -->
            <div class="form-group">
                <label for="q35">35. Apakah instansi/perusahaan sudah mengkaji, menetapkan pembagian tanggung jawab keamanan informasi antara perusahaan dan penyelenggara layanan cloud?</label>
                <div class="options">
                    <label><input type="radio" name="q35" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q35" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q35" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q35" value="6" required> Ditetapkan Secara Menyeluruh</label>
                    <label><input type="radio" name="q35" value="6" required> Tidak Berlaku / Relevan</label>
                </div>
            </div>

            <!-- Pertanyaan 36 -->
            <div class="form-group">
                <label for="q36">36. Apakah instansi/perusahaan sudah mengkaji, menetapkan kriteria dan memastikan aspek hukum (jurisdiksi, hak dan kewenangan) terkait penggunaan layanan berbasis cloud?</label>
                <div class="options">
                    <label><input type="radio" name="q36" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q36" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q36" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q36" value="6" required> Ditetapkan Secara Menyeluruh</label>
                    <label><input type="radio" name="q36" value="6" required> Tidak Berlaku / Relevan</label>
                </div>
            </div>

            <!-- Pertanyaan 37 -->
            <div class="form-group">
                <label for="q37">37. Apakah instansi/perusahaan sudah mengevaluasi penyelenggara layanan cloud terkait reputasi penyelenggaranya?</label>
                <div class="options">
                    <label><input type="radio" name="q37" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q37" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q37" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q37" value="6" required> Ditetapkan Secara Menyeluruh</label>
                    <label><input type="radio" name="q37" value="6" required> Tidak Berlaku / Relevan</label>
                </div>
            </div>

            <!-- Pertanyaan 38 -->
            <div class="form-group">
                <label for="q38">38. Apakah instansi/perusahaan sudah menetapkan standar keamanan teknis penggunaan layanan cloud, termasuk aspek penggunaannya oleh pengguna di internal instansi/perusahaan?</label>
                <div class="options">
                    <label><input type="radio" name="q38" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q38" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q38" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q38" value="6" required> Ditetapkan Secara Menyeluruh</label>
                    <label><input type="radio" name="q38" value="6" required> Tidak Berlaku / Relevan</label>
                </div>
            </div>

            <!-- Pertanyaan 39 -->
            <div class="form-group">
                <label for="q39">39. Apakah instansi/perusahaan sudah mengevaluasi kelaikan keamanan layanan cloud termasuk aspek ketersediaannya dan pemenuhan sertifikasi layanan berbasis ISO 27001?</label>
                <div class="options">
                    <label><input type="radio" name="q39" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q39" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q39" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q39" value="6" required> Ditetapkan Secara Menyeluruh</label>
                    <label><input type="radio" name="q39" value="6" required> Tidak Berlaku / Relevan</label>
                </div>
            </div>

            <!-- Pertanyaan 40 -->
            <div class="form-group">
                <label for="q40">40. Apakah instansi/perusahaan sudah memiliki proses pelaporan insiden terkait layanan cloud?</label>
                <div class="options">
                    <label><input type="radio" name="q40" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q40" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q40" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q40" value="6" required> Ditetapkan Secara Menyeluruh</label>
                    <label><input type="radio" name="q40" value="6" required> Tidak Berlaku / Relevan</label>
                </div>
            </div>

            <!-- Pertanyaan 41 -->
            <div class="form-group">
                <label for="q41">41. Apakah instansi/perusahaan sudah memiliki kebijakan, strategi dan proses untuk mengganti layanan cloud atau menyediakan fasilitas pengganti apabila terjadi gangguan sementara pada layanan tersebut?</label>
                <div class="options">
                    <label><input type="radio" name="q41" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q41" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q41" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q41" value="0" required> Ditetapkan Secara Menyeluruh</label>
                    <label><input type="radio" name="q41" value="0" required> Tidak Berlaku / Relevan</label>
                </div>
            </div>

            <!-- Pertanyaan 42 -->
            <div class="form-group">
                <label for="q42">42. Apakah instansi/perusahaan sudah memiliki proses untuk menghentikan layanan cloud, termasuk proses pengamanan data yang ada (memindahkan dan menghapus data)?</label>
                <div class="options">
                    <label><input type="radio" name="q42" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q42" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q42" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q42" value="0" required> Ditetapkan Secara Menyeluruh</label>
                    <label><input type="radio" name="q42" value="0" required> Tidak Berlaku / Relevan</label>
                </div>
            </div>

            <!-- Pertanyaan 43 -->
            <div class="form-group">
                <label for="q43">43. Apakah sudah diterapkan pengamanan fasilitas fisik (lokasi kerja) yang sesuai dengan kepentingan/klasifikasi aset informasi, secara berlapis dan dapat mencegah upaya akses oleh pihak yang tidak berwenang?</label>
                <div class="options">
                    <label><input type="radio" name="q43" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q43" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q43" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q43" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 44 -->
            <div class="form-group">
                <label for="q44">44. Apakah tersedia proses untuk mengelola alokasi kunci masuk (fisik dan elektronik) ke fasilitas fisik?</label>
                <div class="options">
                    <label><input type="radio" name="q44" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q44" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q44" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q44" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 45 -->
            <div class="form-group">
                <label for="q45">45. Apakah infrastruktur komputasi terlindungi dari dampak lingkungan atau api dan berada dalam kondisi dengan suhu dan kelembaban yang sesuai dengan prasyarat pabrikannya?</label>
                <div class="options">
                    <label><input type="radio" name="q45" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q45" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q45" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q45" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 46 -->
            <div class="form-group">
                <label for="q46">46. Apakah infrastruktur komputasi yang terpasang terlindungi dari gangguan pasokan listrik atau dampak dari petir?</label>
                <div class="options">
                    <label><input type="radio" name="q46" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q46" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q46" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q46" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 47 -->
            <div class="form-group">
                <label for="q47">47. Apakah infrastruktur komputasi yang terpasang dapat dipantau melalui CCTV?</label>
                <div class="options">
                    <label><input type="radio" name="q47" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q47" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q47" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q47" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 48 -->
            <div class="form-group">
                <label for="q48">48. Apakah tersedia peraturan pengamanan perangkat komputasi milik instansi/perusahaan Anda apabila digunakan di luar lokasi kerja resmi (kantor)?</label>
                <div class="options">
                    <label><input type="radio" name="q48" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q48" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q48" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q48" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 49 -->
            <div class="form-group">
                <label for="q49">49. Apakah tersedia proses untuk memindahkan aset TIK (piranti lunak, perangkat keras, data/informasi dll) dari lokasi yang sudah ditetapkan (termasuk pemutakhiran lokasinya dalam daftar inventaris)?</label>
                <div class="options">
                    <label><input type="radio" name="q49" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q49" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q49" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q49" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 50 -->
            <div class="form-group">
                <label for="q50">50. Apakah konstruksi ruang penyimpanan perangkat pengolah informasi penting menggunakan rancangan dan material yang dapat menanggulangi risiko kebakaran dan dilengkapi dengan fasilitas pendukung (deteksi kebakaran/asap, pemadam api, pengatur suhu dan kelembaban) yang sesuai?</label>
                <div class="options">
                    <label><input type="radio" name="q50" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q50" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q50" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q50" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 51 -->
            <div class="form-group">
                <label for="q51">51. Apakah tersedia proses untuk memeriksa (inspeksi) dan merawat: perangkat komputer, fasilitas pendukungnya dan kelayakan keamanan lokasi kerja untuk menempatkan aset informasi penting?</label>
                <div class="options">
                    <label><input type="radio" name="q51" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q51" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q51" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q51" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 52 -->
            <div class="form-group">
                <label for="q52">52. Apakah tersedia mekanisme pengamanan dalam pengiriman aset informasi (perangkat dan dokumen) yang melibatkan pihak ketiga?</label>
                <div class="options">
                    <label><input type="radio" name="q52" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q52" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q52" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q52" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 53 -->
            <div class="form-group">
                <label for="q53">53. Apakah tersedia peraturan untuk mengamankan lokasi kerja penting (ruang server, ruang arsip) dari risiko perangkat atau bahan yang dapat membahayakan aset informasi (termasuk fasilitas pengolah informasi) yang ada di dalamnya? (misal larangan penggunaan telpon genggam di dalam ruang server, menggunakan kamera dll)</label>
                <div class="options">
                    <label><input type="radio" name="q53" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q53" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q53" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q53" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q54">54. Apakah tersedia proses untuk mengamankan lokasi kerja dari keberadaan/kehadiran pihak ketiga yang bekerja untuk kepentingan instansi/perusahaan Anda?</label>
                <div class="options">
                    <label><input type="radio" name="q54" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q54" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q54" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q54" value="0" required> Ditetapkan Secara Menyeluruh</label>
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
