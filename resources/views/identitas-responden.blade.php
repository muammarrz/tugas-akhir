<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas Responden - Indeks KAMI</title>
    <link rel="stylesheet" href="{{ asset('assets/styles/styleasesmen.css') }}">
</head>
<body>
    <!-- Navbar Sidebar -->
    <nav class="sidebar">
        <div class="logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
            <h1>Asesmen</h1>
        </div>
        <ul>
            <li><a href="{{ url('/') }}">Homepage</a></li>
            <li><a href="{{ url('/asesmen') }}">Asesmen</a></li>
        </ul>
    </nav>
    <!-- Main Content -->
    <main class="content">
        <header class="header">
            <h2>Identitas Responden</h2>
        </header>

        <form class="respondent-form" action="{{ route('store-identitas') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="institution">Identitas Instansi atau Perusahaan :</label>
                <input type="text" id="institution" name="institution" placeholder="Masukkan nama instansi atau perusahaan" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat :</label>
                <textarea id="address" name="address" placeholder="Masukkan alamat lengkap" required></textarea>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon :</label>
                <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor telepon" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
                <label for="evaluator">Pengisi Lembar Evaluasi :</label>
                <input type="text" id="evaluator" name="evaluator" placeholder="Masukkan nama pengisi evaluasi" required>
            </div>
            <div class="form-group">
                <label for="position">Jabatan :</label>
                <input type="text" id="position" name="position" placeholder="Masukkan jabatan" required>
            </div>
            <div class="form-group">
                <label for="date">Tanggal Pengisian :</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="scope">Deskripsi Ruang Lingkup :</label>
                <textarea id="scope" name="scope" placeholder="Masukkan deskripsi ruang lingkup" required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="navigation-buttons">
                <button type="submit" class="nav-btn next">→</button>
            </div>
        </form>

    </main>
</body>
</html>
