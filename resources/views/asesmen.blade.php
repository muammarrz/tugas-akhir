<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indeks KAMI - Asesmen</title>
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
            <li><a href="{{ url('/asesmen') }}"class="active">Asesmen</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="content">
        <header class="header">
            <h2>Daftar Asesmen</h2>
        </header>

        <div class="assessment-list">
            <!-- Loop Data Responden -->
            @foreach ($respondens as $responden)
                <div class="assessment-item">
                    <p><strong>Nama Instansi / Perusahaan:</strong> {{ $responden->institution }}</p>
                    <p><strong>Pengisi Asesmen:</strong> {{ $responden->evaluator }}</p>
                    <p><strong>Tanggal Pengisian:</strong> {{ \Carbon\Carbon::parse($responden->created_at)->format('d-m-Y') }}</p>
                    <div class="assessment-actions">
                        <a href="{{ route('dashboard', ['responden_id' => $responden->id]) }}" class="action-btn"><img src="{{ asset('assets/images/statistics.png') }}" alt="Lihat Statistik"></a>
                        <a href="{{ url('/edit-responden', ['id' => $responden->id]) }}" class="action-btn"><img src="{{ asset('assets/images/pen.png') }}" alt="Edit Asesmen"></a>
                    </div>
                </div>
            @endforeach

            <!-- Tombol Tambah Asesmen -->
            <div class="add-assessment">
                <a href="{{ url('/identitas-responden') }}" class="add-btn">+</a>
            </div>
        </div>
    </main>
</body>
</html>
