<?php
session_start();

// Ambil konfigurasi dari environment
$db_host = getenv('DB_HOST') ?: '127.0.0.1';
$db_port = getenv('DB_PORT') ?: '3306';
$db_name = getenv('DB_DATABASE') ?: 'indeks_kami';
$db_user = getenv('DB_USERNAME') ?: 'root';
$db_pass = getenv('DB_PASSWORD') ?: '';

// Buat koneksi database
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi keamanan
function sanitize($data) {
    global $conn;
    return htmlspecialchars(strip_tags(trim($conn->real_escape_string($data))));
}
?>