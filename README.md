# 🪣 Toko Bucket - PHP

Aplikasi Toko Bucket berbasis PHP dan MySQL yang digunakan untuk mengelola produk bucket, transaksi pemesanan, serta data pelanggan secara sederhana. Sistem ini dirancang sebagai proyek pembelajaran pengembangan web menggunakan PHP Native.

## ✨ Fitur Utama

- Login Admin
- Dashboard Admin
- Manajemen Produk Bucket (Tambah, Edit, Hapus)
- Manajemen Kategori Produk
- Manajemen Data Pelanggan
- Pemesanan Produk
- Riwayat Transaksi
- Pencarian Produk
- Upload Gambar Produk
- Laporan Data Produk dan Penjualan

## 🛠️ Teknologi yang Digunakan

- PHP Native
- MySQL
- HTML5
- CSS3
- JavaScript
- Bootstrap
- XAMPP / Laragon

## 📂 Struktur Project

```bash
Toko-Bucket-PHP/
│
├── assets/
├── css/
├── js/
├── images/
├── admin/
├── database/
├── index.php
├── login.php
└── README.md
```

## 🚀 Cara Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/naurahjannah04/Toko-Bucket---PHP.git
```

### 2. Pindahkan ke Folder Server

Untuk XAMPP:

```bash
C:\xampp\htdocs\
```

Untuk Laragon:

```bash
C:\laragon\www\
```

### 3. Buat Database

1. Buka phpMyAdmin.
2. Buat database baru, misalnya:

```sql
toko_bucket
```

3. Import file database `.sql` yang tersedia pada folder project.

### 4. Konfigurasi Koneksi Database

Edit file konfigurasi database:

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "toko_bucket";
```

### 5. Jalankan Project

Buka browser:

```text
http://localhost/Toko-Bucket---PHP
```

## 🔑 Login Admin

Sesuaikan dengan data pada database.

Contoh:

```text
Username : admin
Password : admin123
```

## 📸 Screenshot

Tambahkan screenshot aplikasi pada folder:

```bash
/screenshots
```

Contoh:

- Halaman Login
- Dashboard
- Data Produk
- Data Transaksi
- Laporan Penjualan

## 🎯 Tujuan Project

Project ini dibuat untuk:

- Memenuhi tugas kuliah/proyek akademik.
- Mempelajari konsep CRUD menggunakan PHP dan MySQL.
- Mempelajari sistem manajemen toko sederhana berbasis web.

## 👩‍💻 Developer

**Naurah Jannah**

GitHub:
https://github.com/naurahjannah04

## 📄 License

Project ini dibuat untuk kebutuhan pembelajaran dan pengembangan pribadi.
Silakan digunakan, dimodifikasi, dan dikembangkan lebih lanjut sesuai kebutuhan.
