<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indeks KAMI - Homepage</title>
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="sidebar">
        <div class="logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
            <h1>Indeks Keamanan Informasi</h1>
        </div>
        <ul>
            <li><a href="{{ url('/') }}"class="active">Homepage</a></li>
            <li><a href="{{ url('/asesmen') }}">Asesmen</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="content">
        <h2>Selamat datang di Indeks KAMI</h2>
        <div class="logo-main">
            <img src="assets/images/logo.png" alt="Logo Indeks Keamanan Informasi">
        </div>
        <p>Apa itu Indeks KAMI? Indeks Keamanan Informasi (KAMI) merupakan aplikasi yang digunakan sebagai alat bantu untuk melakukan asesmen dan evaluasi tingkat kesiapan (Kelengkapan dan Kematangan) penerapan keamanan informasi berdasarkan kriteria SNI ISO/IEC 27001.</p>

        <p>Proses evaluasi dilakukan melalui sejumlah pertanyaan di beberapa area berikut:</p>
        <ul>
            <li>Kategori Sistem Elektronik yang digunakan</li>
            <li>Tata Kelola Keamanan Informasi</li>
            <li>Pengelolaan Risiko Keamanan Informasi</li>
            <li>Kerangka Kerja Keamanan Informasi</li>
            <li>Pengelolaan Aset Informasi</li>
            <li>Teknologi dan Keamanan Informasi</li>
            <li>Suplemen (Tambahan pengukuran dilakukan untuk aspek Pengamanan Keterlibatan Pihak Ketiga Penyedia Layanan, Pengamanan Layanan Infrastruktur Awan (Cloud Service) dan Perlindungan Data Pribadi)</li>
        </ul>
    </main>
</body>
</html>
