<?php
/**
 * FILE: db.php
 * TUJUAN: File helper untuk inisialisasi koneksi database
 * DIGUNAKAN: Di-include di halaman yang membutuhkan akses database
 * 
 * CATATAN: File ini minimal dan bisa digabungkan dengan config.php
 */

// Include file config.php untuk menggunakan konfigurasi dan function connectDb()
require_once 'config.php';

// Jalankan function connectDb() dan simpan hasilnya di variable $conn
// Variable $conn ini akan digunakan untuk query ke database
$conn = connectDb();

// Sekarang di file yang include db.php, variable $conn sudah siap digunakan
// Contoh: $result = $conn->query("SELECT * FROM products");
