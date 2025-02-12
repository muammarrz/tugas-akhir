<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Indeks KAMI</title>
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 150px; height: auto;">
        </div>   
        <h2>Indeks KAMI</h2>
        {{-- Menampilkan pesan sukses atau error --}}
        @if(session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif

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

        {{-- Form Registrasi --}}
        <form method="POST" action="{{ url('/register') }}">
            @csrf  {{-- Token untuk proteksi CSRF --}}
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit">Daftar</button>
        </form>
        <p>Sudah punya akun? <a href="{{ url('/login') }}">Masuk</a></p>
    </div>
</body>
</html>
