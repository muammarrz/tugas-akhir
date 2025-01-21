<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Sistem Elektronik - Indeks KAMI</title>
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
            <h2>Kategori Sistem Elektronik</h2>
        </header>

        <form id="categoryForm" class="category-form" action="{{ route('store-sistem-elektronik', ['responden_id' => $responden_id]) }}" method="POST">
            @csrf
            <!-- Pertanyaan 1 -->
            <div class="form-group">
                <label for="q1">1.1 Nilai investasi sistem elektronik yang terpasang</label>
                <div class="options">
                    <label><input type="radio" name="q1" value="5" required> [A] Lebih dari Rp.30 Miliar</label>
                    <label><input type="radio" name="q1" value="2" required> [B] Lebih dari Rp.3 Miliar s/d Rp.30 Miliar</label>
                    <label><input type="radio" name="q1" value="1" required> [C] Kurang dari Rp.3 Miliar</label>
                </div>
            </div>

            <!-- Pertanyaan 2 -->
            <div class="form-group">
                <label for="q2">1.2 Total anggaran operasional tahunan yang dialokasikan untuk pengelolaan Sistem Elektronik</label>
                <div class="options">
                    <label><input type="radio" name="q2" value="5" required> [A] Lebih dari Rp.10 Miliar</label>
                    <label><input type="radio" name="q2" value="2" required> [B] Lebih dari Rp.1 Miliar s/d Rp.10 Miliar</label>
                    <label><input type="radio" name="q2" value="1" required> [C] Kurang dari Rp.1 Miliar</label>
                </div>
            </div>

            <div class="form-group">
                <label for="q3">1.3 Memiliki kewajiban kepatuhan terhadap Peraturan atau Standar tertentu</label>
                <div class="options">
                    <label><input type="radio" name="q3" value="5" required> [A] Peraturan atau Standar nasional dan internasional</label>
                    <label><input type="radio" name="q3" value="2" required> [B] Peraturan atau Standar nasional</label>
                    <label><input type="radio" name="q3" value="1" required> [C] Tidak ada Peraturan khusus</label>
                </div>
            </div>

            <!-- Pertanyaan 4 -->
            <div class="form-group">
                <label for="q4">1.4 Menggunakan teknik kriptografi khusus untuk keamanan informasi dalam Sistem Elektronik</label>
                <div class="options">
                    <label><input type="radio" name="q4" value="5" required> [A] Teknik kriptografi khusus yang disertifikasi oleh Negara</label>
                    <label><input type="radio" name="q4" value="2" required> [B] Teknik kriptografi sesuai standar industri, tersedia secara publik atau dikembangkan sendiri</label>
                    <label><input type="radio" name="q4" value="1" required> [C] Tidak ada penggunaan teknik kriptografi</label>
                </div>
            </div>

            <!-- Pertanyaan 5 -->
            <div class="form-group">
                <label for="q5">1.5 Jumlah pengguna Sistem Elektronik</label>
                <div class="options">
                    <label><input type="radio" name="q5" value="5" required> [A] Lebih dari 5.000 pengguna</label>
                    <label><input type="radio" name="q5" value="2" required> [B] 1.000 sampai dengan 5.000 pengguna</label>
                    <label><input type="radio" name="q5" value="1" required> [C] Kurang dari 1.000 pengguna</label>
                </div>
            </div>

            <!-- Pertanyaan 6 -->
            <div class="form-group">
                <label for="q6">1.6 Data pribadi yang dikelola Sistem Elektronik</label>
                <div class="options">
                    <label><input type="radio" name="q6" value="5" required> [A] Data pribadi yang memiliki hubungan dengan Data Pribadi lainnya</label>
                    <label><input type="radio" name="q6" value="2" required> [B] Data pribadi yang bersifat individu dan/atau data pribadi yang terkait dengan kepemilikan badan usaha</label>
                    <label><input type="radio" name="q6" value="1" required> [C] Tidak ada data pribadi</label>
                </div>
            </div>

            <!-- Pertanyaan 7 -->
            <div class="form-group">
                <label for="q7">1.7 Tingkat klasifikasi/kekritisan Data yang ada dalam Sistem Elektronik</label>
                <div class="options">
                    <label><input type="radio" name="q7" value="5" required> [A] Sangat Rahasia</label>
                    <label><input type="radio" name="q7" value="2" required> [B] Rahasia dan/atau Terbatas</label>
                    <label><input type="radio" name="q7" value="1" required> [C] Biasa</label>
                </div>
            </div>

            <!-- Pertanyaan 8 -->
            <div class="form-group">
                <label for="q8">1.8 Tingkat kekritisan proses yang ada dalam Sistem Elektronik</label>
                <div class="options">
                    <label><input type="radio" name="q8" value="5" required> [A] Proses yang berisiko mengganggu hajat hidup orang banyak dan memberi dampak langsung pada layanan publik</label>
                    <label><input type="radio" name="q8" value="2" required> [B] Proses yang berisiko mengganggu hajat hidup orang banyak dan memberi dampak tidak langsung</label>
                    <label><input type="radio" name="q8" value="1" required> [C] Proses yang hanya berdampak pada bisnis perusahaan</label>
                </div>
            </div>

            <!-- Pertanyaan 9 -->
            <div class="form-group">
                <label for="q9">1.9 Dampak dari kegagalan Sistem Elektronik</label>
                <div class="options">
                    <label><input type="radio" name="q9" value="5" required> [A] Membahayakan pertahanan keamanan negara</label>
                    <label><input type="radio" name="q9" value="2" required> [B] Tidak tersedianya layanan publik berskala nasional atau berdampak pada layanan di sektor lain</label>
                    <label><input type="radio" name="q9" value="1" required> [C] Tidak tersedianya layanan publik dalam 1 provinsi atau internal 1 instansi/perusahaan</label>
                </div>
            </div>

            <!-- Pertanyaan 10 -->
            <div class="form-group">
                <label for="q10">1.10 Potensi kerugian atau dampak negatif dari insiden ditembusnya keamanan informasi Sistem Elektronik</label>
                <div class="options">
                    <label><input type="radio" name="q10" value="5" required> [A] Menimbulkan korban jiwa</label>
                    <label><input type="radio" name="q10" value="2" required> [B] Terbatas pada kerugian finansial</label>
                    <label><input type="radio" name="q10" value="1" required> [C] Mengakibatkan gangguan operasional sementara (tidak membahayakan dan mengakibatkan kerugian finansial)</label>
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
