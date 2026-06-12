<?php
/**
 * FILE: header.php
 * TUJUAN: Template header yang ditampilkan di setiap halaman
 * DIGUNAKAN: Di-include di setiap halaman (home.php, produk.php, dll)
 * 
 * VARIABEL YANG DIPERLUKAN (dari halaman yang include):
 * - $pageTitle : Judul halaman yang akan ditampilkan di browser tab
 * - $currentPage : Nama halaman saat ini untuk highlight menu aktif
 */

// Include config.php untuk setup session dan function
require_once 'config.php';

// Ternary operator: Jika $pageTitle tidak diset, gunakan default 'Buket Cantik UMKM'
$pageTitle = $pageTitle ?? 'Buket Cantik UMKM';

// Ternary operator: Jika $currentPage tidak diset, gunakan default 'home'
$currentPage = $currentPage ?? 'home';

// Cek apakah user sudah login dengan mengecek keberadaan session user_id
$isLoggedIn = !empty($_SESSION['user_id']);

// Ambil nama user dari session (gunakan nullish coalescing ?? jika tidak ada)
$userName = $_SESSION['user_name'] ?? '';
?>
<!-- Awal HTML document -->
<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Deklarasi charset UTF-8 untuk support karakter khusus dan emoji -->
    <meta charset="UTF-8">
    
    <!-- Viewport untuk responsive design di mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Judul halaman yang ditampilkan di browser tab -->
    <title><?= htmlspecialchars($pageTitle) ?></title>
    
    <!-- Import file CSS untuk styling -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Header/Navbar Section -->
<header>
    <!-- Logo website -->
    <div class="logo">🌸 Buket Cantik</div>
    
    <!-- Navigation menu dengan aria-label untuk accessibility -->
    <nav class="main-nav" aria-label="Navigasi utama">
        <ul>
            <!-- Menu Beranda -->
            <li><a href="home.php" class="<?= $currentPage === 'home' ? 'active' : '' ?>">Beranda</a></li>
            
            <!-- Menu Produk -->
            <li><a href="produk.php" class="<?= $currentPage === 'produk' ? 'active' : '' ?>">Produk</a></li>
            
            <!-- Menu Tentang -->
            <li><a href="tentang.php" class="<?= $currentPage === 'tentang' ? 'active' : '' ?>">Tentang</a></li>
            
            <!-- Menu Kontak -->
            <li><a href="kontak.php" class="<?= $currentPage === 'kontak' ? 'active' : '' ?>">Kontak</a></li>
            
            <!-- Conditional: Jika user sudah login, tampilkan greeting dan logout -->
            <?php if ($isLoggedIn): ?>
                <!-- Tampilkan badge dengan nama user -->
                <li><a href="#" class="user-badge">Halo, <?= htmlspecialchars($userName) ?></a></li>
                
                <!-- Link logout -->
                <li><a href="logout.php" class="logout-link">Logout</a></li>
            <?php else: ?>
                <!-- Jika user belum login, tampilkan menu login dan register -->
                <li><a href="login.php" class="<?= $currentPage === 'login' ? 'active' : '' ?>">Masuk</a></li>
                <li><a href="register.php" class="<?= $currentPage === 'register' ? 'active' : '' ?>">Daftar</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
