<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Detail - Indeks KAMI</title>
    <link rel="stylesheet" href="{{ asset('assets/styles/styleasesmen.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            <li><a href="{{ route('dashboard', ['responden_id' => $responden_id]) }}">Dashboard</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="content">
        <header class="header">
            <h2>Dashboard Tingkat Kematangan</h2>
        </header>

        <section class="dashboard-section">
            <div class="results-container">
                <h3>Hasil Penilaian</h3>
                <div class="summary-container">
                    <h4>Skor Kategori SE: {{ $sistemElektronikScore }}</h4>
                    <h4>Kategori SE: {{ $kategoriSE }}</h4>
                </div>
                <div class="summary-container">
                    <h4>Skor Evaluasi Akhir: {{ $totalScore }}</h4>
                    <h4>Tingkat Kematangan: {{ $maturityLevel }}</h4>
                </div>
                <table class="results-table">
                    <thead>
                        <tr>
                            <th>Kategori</th>
                            <th>Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $category => $data)
                            @if (!in_array($category, ['sistem-elektronik', 'suplemen']))
                                <tr>
                                    <td>{{ ucfirst(str_replace('-', ' ', $category)) }}</td>
                                    <td>{{ $data['score'] !== null ? $data['score'] : 'Belum diisi' }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>

                <!-- <canvas id="completionChart"></canvas> -->
            </div>
        </section>
    </main>

    <script>
        const ctx = document.getElementById('completionChart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    @foreach ($results as $category => $data)
                        "{{ ucfirst(str_replace('-', ' ', $category)) }}",
                    @endforeach
                ],
                datasets: [{
                    label: 'Skor',
                    data: [
                        @foreach ($results as $category => $data)
                            {{ $data['score'] !== null ? $data['score'] : 0 }},
                        @endforeach
                    ],
                    backgroundColor: ['#FF0000', '#FFFF00', '#008000', '#FF0000', '#FFFF00', '#008000'],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 200,
                        ticks: {
                            stepSize: 50,
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <style>
        .results-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .results-table th, .results-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .results-table th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        .summary-container {
            margin-top: 20px;
        }

        canvas {
            margin-top: 20px;
        }
    </style>
</body>
</html>
