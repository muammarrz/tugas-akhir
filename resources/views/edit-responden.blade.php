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
            <li><a href="homepage.html">Homepage</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Asesmen </span><span class="arrow">▼</span></a>
                <ul class="dropdown-content">
                    <li><a href="identitas-responden.html" class="active">Identitas Responden</a></li>
                    <li><a href="sistem-elektronik.html">Sistem Elektronik</a></li>
                    <li><a href="tata-kelola.html">Tata Kelola</a></li>
                    <li><a href="risiko.html" >Pengelolaan Risiko</a></li>
                    <li><a href="kerangka-kerja.html">Kerangka Kerja</a></li>
                    <li><a href="pengelolaan-aset.html">Pengelolaan Aset</a></li>
                    <li><a href="teknologi.html">Teknologi</a></li>
                    <li><a href="pdp.html">Perlindungan Data Pribadi</a></li>
                    <li><a href="suplemen.html">Suplemen</a></li>
                </ul>
            </li>

        </ul>
    </nav>
    <!-- Main Content -->
    <main class="content">
        <header class="header">
            <h2>Identitas Responden</h2>
            <button class="logout">keluar</button>
        </header>

        <form class="respondent-form" action="{{ route('store-identitas') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $responden->id ?? '' }}">
    <div class="form-group">
        <label for="institution">Identitas Instansi atau Perusahaan :</label>
        <input type="text" id="institution" name="institution"
               value="{{ old('institution', $responden->institution ?? '') }}"
               placeholder="Masukkan nama instansi atau perusahaan" required>
    </div>
    <div class="form-group">
        <label for="address">Alamat :</label>
        <textarea id="address" name="address" placeholder="Masukkan alamat lengkap" required>{{ old('address', $responden->address ?? '') }}</textarea>
    </div>
    <div class="form-group">
        <label for="phone">Nomor Telepon :</label>
        <input type="tel" id="phone" name="phone"
               value="{{ old('phone', $responden->phone ?? '') }}"
               placeholder="Masukkan nomor telepon" required>
    </div>
    <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email"
               value="{{ old('email', $responden->email ?? '') }}"
               placeholder="Masukkan email" required>
    </div>
    <div class="form-group">
        <label for="evaluator">Pengisi Lembar Evaluasi :</label>
        <input type="text" id="evaluator" name="evaluator"
               value="{{ old('evaluator', $responden->evaluator ?? '') }}"
               placeholder="Masukkan nama pengisi evaluasi" required>
    </div>
    <div class="form-group">
        <label for="position">Jabatan :</label>
        <input type="text" id="position" name="position"
               value="{{ old('position', $responden->position ?? '') }}"
               placeholder="Masukkan jabatan" required>
    </div>
    <div class="form-group">
        <label for="date">Tanggal Pengisian :</label>
        <input type="date" id="date" name="date"
               value="{{ old('date', $responden->date ?? '') }}"
               required>
    </div>
    <div class="form-group">
        <label for="scope">Deskripsi Ruang Lingkup :</label>
        <textarea id="scope" name="scope" placeholder="Masukkan deskripsi ruang lingkup" required>{{ old('scope', $responden->scope ?? '') }}</textarea>
    </div>

    <!-- Submit Button -->
    <div class="navigation-buttons">
        <button type="submit" class="nav-btn next">→</button>
    </div>
</form>


    </main>
</body>
</html>
