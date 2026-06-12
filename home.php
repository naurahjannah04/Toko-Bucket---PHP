<?php
$pageTitle = 'Beranda - Buket Cantik UMKM';
$currentPage = 'home';
include 'header.php';
?>

<section class="hero">
    <div class="hero-content">
        <h1>Selamat Datang di Buket Cantik</h1>
        <p>Menyediakan buket bunga, snack, dan uang untuk setiap momen spesial.</p>
        <a href="#produk" class="button">Lihat Produk</a>
    </div>
</section>

<section class="section-intro">
    <h2>Rangkaian Buket Terbaik untuk Hadiah Anda</h2>
    <p>Kami merancang buket yang menarik, segar, dan siap membuat penerima tersenyum.</p>
</section>

<section class="produk-preview" id="produk">
    <h2>Produk Unggulan</h2>
    <div class="product-grid">
        <article class="card">
            <img src="img/buketMawar.jpg" alt="Buket Mawar">
            <div class="card-body">
                <h3>Buket Mawar</h3>
                <p>Komposisi bunga mawar segar dengan sentuhan daun hijau lembut.</p>
                <span class="price">Rp150.000</span>
                <button onclick="beli('Buket Mawar')">Beli</button>
            </div>
        </article>
        <article class="card">
            <img src="img/snack.jpg" alt="Buket Snack">
            <div class="card-body">
                <h3>Buket Snack</h3>
                <p>Campuran snack favorit dalam bingkai buket yang unik dan cantik.</p>
                <span class="price">Rp120.000</span>
                <button onclick="beli('Buket Snack')">Beli</button>
            </div>
        </article>
        <article class="card">
            <img src="img/uang.jpg" alt="Buket Uang">
            <div class="card-body">
                <h3>Buket Uang</h3>
                <p>Buket uang kreatif yang cocok untuk hadiah spesial dan kenangan berkelas.</p>
                <span class="price">Rp200.000</span>
                <button onclick="beli('Buket Uang')">Beli</button>
            </div>
        </article>
    </div>
    <div class="section-actions">
        <a href="produk.php" class="button button-secondary">Lihat Semua Produk</a>
    </div>
</section>


<?php include 'footer.php'; ?>