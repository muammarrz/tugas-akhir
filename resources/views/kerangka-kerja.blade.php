<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerangka Kerja - Indeks KAMI</title>
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
            <h2>Kerangka Kerja Keamanan Informasi</h2>
        </header>

        <form id="frameworkForm" class="framework-form" action="{{ route('store-kerangka-kerja', ['responden_id' => $responden_id]) }}" method="POST">
            @csrf
            <!-- Pertanyaan 1 -->
            <div class="form-group">
                <label for="q1">1. Apakah kebijakan dan prosedur maupun dokumen lainnya yang diperlukan terkait keamanan informasi sudah disusun dan dituliskan dengan jelas, dengan mencantumkan peran dan tanggung jawab pihak-pihak yang diberikan wewenang untuk menerapkannya?</label>
                <div class="options">
                    <label><input type="radio" name="q1" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q1" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q1" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q1" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 2 -->
            <div class="form-group">
                <label for="q2">2. Apakah kebijakan keamanan informasi sudah ditetapkan secara formal, dipublikasikan kepada semua staf/karyawan termasuk pihak terkait dan dengan mudah diakses oleh pihak yang membutuhkannya?</label>
                <div class="options">
                    <label><input type="radio" name="q2" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q2" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q2" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q2" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 3 -->
            <div class="form-group">
                <label for="q3">3. Apakah tersedia mekanisme untuk mengelola dokumen kebijakan dan prosedur keamanan informasi, termasuk penggunaan daftar induk, distribusi, penarikan dari peredaran dan penyimpanannya?</label>
                <div class="options">
                    <label><input type="radio" name="q3" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q3" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q3" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q3" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 4 -->
            <div class="form-group">
                <label for="q4">4. Apakah tersedia proses (mencakup pelaksana, mekanisme, jadwal, materi, dan sasarannya) untuk mengkomunikasikan kebijakan keamanan informasi (dan perubahannya) kepada semua pihak terkait, termasuk pihak ketiga?</label>
                <div class="options">
                    <label><input type="radio" name="q4" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q4" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q4" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q4" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 5 -->
            <div class="form-group">
                <label for="q5">5. Apakah keseluruhan kebijakan dan prosedur keamanan informasi yang ada merefleksikan kebutuhan mitigasi dari hasil kajian risiko keamanan informasi, maupun sasaran/obyetif tertentu yang ditetapkan oleh pimpinan instansi/perusahaan?</label>
                <div class="options">
                    <label><input type="radio" name="q5" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q5" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q5" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q5" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 6 -->
            <div class="form-group">
                <label for="q6">6. Apakah tersedia proses untuk mengidentifikasi kondisi yang membahayakan keamanan infomasi dan menetapkannya sebagai insiden keamanan informasi untuk ditindak lanjuti sesuai prosedur yang diberlakukan?</label>
                <div class="options">
                    <label><input type="radio" name="q6" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q6" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q6" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q6" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 7 -->
            <div class="form-group">
                <label for="q7">7. Apakah aspek keamanan informasi yang mencakup pelaporan insiden, menjaga kerahasiaan, HAKI, tata tertib penggunaan dan pengamanan aset maupun layanan TIK tercantum dalam kontrak dengan pihak ketiga?</label>
                <div class="options">
                    <label><input type="radio" name="q7" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q7" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q7" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q7" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 8 -->
            <div class="form-group">
                <label for="q8">8. Apakah konsekwensi dari pelanggaran kebijakan keamanan informasi sudah didefinisikan, dikomunikasikan dan ditegakkan?</label>
                <div class="options">
                    <label><input type="radio" name="q8" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q8" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q8" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q8" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 9 -->
            <div class="form-group">
                <label for="q9">9. Apakah tersedia prosedur resmi untuk mengelola suatu pengecualian terhadap penerapan keamanan informasi, termasuk proses untuk menindak lanjuti konsekwensi dari kondisi ini?</label>
                <div class="options">
                    <label><input type="radio" name="q9" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q9" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q9" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q9" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 10 -->
            <div class="form-group">
                <label for="q10">10. Apakah instansi/perusahaan anda sudah menerapkan kebijakan dan prosedur operasional untuk mengelola implementasi security patch, alokasi tanggung jawab untuk memonitor adanya rilis security patch baru, memastikan pemasangannya dan melaporkannya?</label>
                <div class="options">
                    <label><input type="radio" name="q10" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q10" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q10" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q10" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 11 -->
            <div class="form-group">
                <label for="q11">11. Apakah instansi/perusahaan anda sudah membahas aspek keamanan informasi dalam manajemen proyek yang terkait dengan ruang lingkup?</label>
                <div class="options">
                    <label><input type="radio" name="q11" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q11" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q11" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q11" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 12 -->
            <div class="form-group">
                <label for="q12">12. Apakah instansi/perusahaan anda sudah menerapkan proses untuk mengevaluasi risiko terkait rencana pembelian (atau implementasi) sistem baru dan menanggulangi permasalahan yang muncul?</label>
                <div class="options">
                    <label><input type="radio" name="q12" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q12" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q12" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q12" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 13 -->
            <div class="form-group">
                <label for="q13">13. Apakah instansi/perusahaan anda sudah menerapkan proses pengembangan sistem yang aman (Secure SDLC) dengan menggunakan prinsip atau metode sesuai standar platform teknologi yang digunakan?</label>
                <div class="options">
                    <label><input type="radio" name="q13" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q13" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q13" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q13" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 14 -->
            <div class="form-group">
                <label for="q14">14. Apabila penerapan suatu sistem mengakibatkan timbulnya risiko baru atau terjadinya ketidakpatuhan terhadap kebijakan yang ada, apakah ada proses untuk menanggulangi hal ini, termasuk penerapan pengamanan baru (compensating control) dan jadwal penyelesaiannya?</label>
                <div class="options">
                    <label><input type="radio" name="q14" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q14" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q14" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q14" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 15 -->
            <div class="form-group">
                <label for="q15">15. Apakah instansi/perusahaan anda memiliki fungsi atau bagian yang secara spesifik mempunyai tugas dan tanggungjawab terkait perkembangan ancaman keamanan informasi dan pengelolaannya (threat intelligence)?</label>
                <div class="options">
                    <label><input type="radio" name="q15" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q15" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q15" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q15" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 16 -->
            <div class="form-group">
                <label for="q16">16. Apakah tersedia kerangka kerja pengelolaan perencanaan kelangsungan layanan TIK (business continuity planning) yang mendefinisikan persyaratan/konsiderans keamanan informasi, termasuk penjadwalan uji cobanya?</label>
                <div class="options">
                    <label><input type="radio" name="q16" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q16" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q16" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q16" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 17 -->
            <div class="form-group">
                <label for="q17">17. Apakah kebijakan dan prosedur yang diperlukan terkait perkembangan ancaman keamanan informasi dan pengelolaannya (threat intelligence) sudah disusun dan dituliskan dengan jelas (proses pengumpulan data, analisa, dan identifikasi ancaman), dengan mencantumkan peran dan tanggung jawab pihak-pihak yang diberikan wewenang untuk menerapkannya?</label>
                <div class="options">
                    <label><input type="radio" name="q17" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q17" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q17" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q17" value="0" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 18 -->
            <div class="form-group">
                <label for="q18">18. Apakah hasil analisis perkembangan ancaman keamanan informasi disampaikan kepada pihak yang bertanggung jawab untuk mitigasi risiko, dan memantau perkembangan mitigasi tersebut?</label>
                <div class="options">
                    <label><input type="radio" name="q18" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q18" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q18" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q18" value="0" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 19 -->
            <div class="form-group">
                <label for="q19">19. Apakah perencanaan pemulihan bencana terhadap layanan TIK (disaster recovery plan) sudah mendefinisikan komposisi, peran, wewenang dan tanggungjawab tim yang ditunjuk?</label>
                <div class="options">
                    <label><input type="radio" name="q19" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q19" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q19" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q19" value="0" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 20 -->
            <div class="form-group">
                <label for="q20">20. Apakah perencanaan pemulihan bencana terhadap layanan TIK (disaster recovery plan) sudah menentukan Recovery Time Objective (RTO) dan Recovery Point Objective (RPO)?</label>
                <div class="options">
                    <label><input type="radio" name="q20" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q20" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q20" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q20" value="0" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 21 -->
            <div class="form-group">
                <label for="q21">21. Apakah uji coba perencanaan pemulihan bencana terhadap layanan TIK (disaster recovery plan) sudah dilakukan minimal sekali dalam setahun atau apabila ada keperluan yang mendesak (seperti perubahan infrastruktur), dilaksanakan sesuai jadwal penerapan perubahannya?</label>
                <div class="options">
                    <label><input type="radio" name="q21" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q21" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q21" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q21" value="0" required> Ditetapkan Secara Menyeluruh</label>
                </div>            
            </div>

            <!-- Pertanyaan 22 -->
            <div class="form-group">
                <label for="q22">22. Apakah hasil dari perencanaan pemulihan bencana terhadap layanan TIK (disaster recovery plan) dievaluasi untuk menerapkan langkah perbaikan atau pembenahan yang diperlukan - misal, apabila hasil uji coba menunjukkan bahwa proses pemulihan tidak bisa (gagal) memenuhi persyaratan yang ada?</label>
                <div class="options">
                    <label><input type="radio" name="q22" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q22" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q22" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q22" value="0" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 23 -->
            <div class="form-group">
                <label for="q23">23. Apakah seluruh kebijakan dan prosedur keamanan informasi dievaluasi kelayakannya secara berkala?</label>
                <div class="options">
                    <label><input type="radio" name="q23" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q23" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q23" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q23" value="0" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 24 -->
            <div class="form-group">
                <label for="q24">24. Apakah instansi/perusahaan anda mempunyai strategi penerapan keamanan informasi sesuai hasil analisa risiko yang penerapannya dilakukan sebagai bagian dari rencana kerja organisasi?</label>
                <div class="options">
                    <label><input type="radio" name="q24" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q24" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q24" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q24" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 25 -->
            <div class="form-group">
                <label for="q25">25. Apakah instansi/perusahaan anda mempunyai strategi penggunaan teknologi keamanan informasi yang penerapan dan pemutakhirannya disesuaikan dengan kebutuhan dan perubahan profil risiko?</label>
                <div class="options">
                    <label><input type="radio" name="q25" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q25" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q25" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q25" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 26 -->
            <div class="form-group">
                <label for="q26">26. Apakah strategi penerapan keamanan informasi direalisasikan sebagai bagian dari pelaksanaan program kerja organisasi anda?</label>
                <div class="options">
                    <label><input type="radio" name="q26" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q26" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q26" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q26" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 27 -->
            <div class="form-group">
                <label for="q27">27. Apakah instansi/perusahaan anda memiliki dan melaksanakan program audit internal yang dilakukan oleh pihak independen dengan cakupan keseluruhan aset informasi, kebijakan dan prosedur keamanan yang ada (atau sesuai dengan standar yang berlaku)?</label>
                <div class="options">
                    <label><input type="radio" name="q27" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q27" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q27" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q27" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 28 -->
            <div class="form-group">
                <label for="q28">28. Apakah audit internal tersebut mengevaluasi tingkat kepatuhan, konsistensi dan efektivitas penerapan keamanan informasi?</label>
                <div class="options">
                    <label><input type="radio" name="q28" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q28" value="1" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q28" value="2" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q28" value="3" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 29 -->
            <div class="form-group">
                <label for="q29">29. Apakah hasil audit internal tersebut dikaji/dievaluasi untuk mengidentifikasi langkah pembenahan dan pencegahan, ataupun inisiatif peningkatan kinerja keamanan informasi?</label>
                <div class="options">
                    <label><input type="radio" name="q29" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q29" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q29" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q29" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 30 -->
            <div class="form-group">
                <label for="q30">30. Apakah hasil audit internal dilaporkan kepada pimpinan organisasi untuk menetapkan langkah perbaikan atau program peningkatan kinerja keamanan informasi?</label>
                <div class="options">
                    <label><input type="radio" name="q30" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q30" value="2" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q30" value="4" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q30" value="6" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 31 -->
            <div class="form-group">
                <label for="q31">31. Apabila ada keperluan untuk merevisi kebijakan dan prosedur yang berlaku, apakah ada analisa untuk menilai aspek finansial (dampak biaya dan keperluan anggaran) ataupun perubahan terhadap infrastruktur dan pengelolaan perubahannya, sebagai prasyarat untuk menerapkannya?</label>
                <div class="options">
                    <label><input type="radio" name="q31" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q31" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q31" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q31" value="0" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 32 -->
            <div class="form-group">
                <label for="q32">32. Apakah instansi/perusahaan anda secara periodik menguji dan mengevaluasi tingkat/status kepatuhan program keamanan informasi yang ada (mencakup pengecualian atau kondisi ketidakpatuhan lainnya) untuk memastikan bahwa keseluruhan inisiatif tersebut, termasuk langkah pembenahan yang diperlukan, telah diterapkan secara efektif?</label>
                <div class="options">
                    <label><input type="radio" name="q32" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q32" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q32" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q32" value="0" required> Ditetapkan Secara Menyeluruh</label>
                </div>
            </div>

            <!-- Pertanyaan 33 -->
            <div class="form-group">
                <label for="q33">33. Apakah instansi/perusahaan anda mempunyai rencana dan program peningkatan keamanan informasi untuk jangka menengah/panjang (1-3-5 tahun) yang direalisasikan secara konsisten?</label>
                <div class="options">
                    <label><input type="radio" name="q33" value="0" required> Tidak Dilakukan</label>
                    <label><input type="radio" name="q33" value="0" required> Dalam Perencanaan</label>
                    <label><input type="radio" name="q33" value="0" required> Dalam Penerapan / Diterapkan Sebagian</label>
                    <label><input type="radio" name="q33" value="0" required> Ditetapkan Secara Menyeluruh</label>
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
