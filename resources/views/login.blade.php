<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Indeks KAMI</title>
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 150px; height: auto;">
        </div>   
        <h2>Indeks KAMI</h2>
        {{-- Menampilkan error jika ada --}}
        @if($errors->any())
            <div class="alert error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form Login --}}
        <form method="POST" action="{{ url('/login') }}">
            @csrf  {{-- Token untuk proteksi CSRF --}}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Masuk</button>
        </form>

        <p>Belum punya akun? <a href="{{ url('/register') }}">Daftar</a></p>
    </div>
</body>
</html>
