<?php
/**
 * FILE: config.php
 * TUJUAN: Konfigurasi awal aplikasi dan database
 * DIGUNAKAN: Di-include di semua file PHP untuk setup database dan session
 */

// Mulai session PHP untuk tracking login user
session_start();

// ===== KONFIGURASI DATABASE =====
// Hostname/server tempat database berada
$dbHost = 'localhost';

// Username untuk login ke MySQL (default XAMPP adalah 'root')
$dbUser = 'root';

// Password MySQL (default XAMPP kosong)         
$dbPass = '';

// Nama database yang akan digunakan
$dbName = 'buket_db';

/**
 * FUNGSI: connectDb()
 * TUJUAN: Membuat koneksi ke database MySQL
 * RETURN: Objek koneksi MySQL atau error jika gagal
 */
function connectDb() {
    // Deklarasikan variabel global agar bisa diakses di dalam function
    global $dbHost, $dbUser, $dbPass, $dbName;
    
    // Buat koneksi baru ke MySQL menggunakan MySQLi (MySQL Improved)
    // Parameter: (host, user, password, database_name)
    $connection = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    
    // Cek apakah koneksi berhasil
    if ($connection->connect_error) {
        // Jika gagal, tampilkan pesan error dan hentikan script
        die('Koneksi database gagal: ' . $connection->connect_error);
    }
    
    // Set charset menjadi utf8mb4 untuk support emoji dan karakter spesial
    $connection->set_charset('utf8mb4');
    
    // Return objek koneksi untuk digunakan di file lain
    return $connection;
}
