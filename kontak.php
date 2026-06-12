<?php
$pageTitle = 'Kontak - Buket Cantik UMKM';
$currentPage = 'kontak';
include 'header.php';
?>
<section class="page-header page-header-secondary">
    <div class="page-header-content">
        <h1>Hubungi Kami</h1>
        <p>Isi formulir di bawah untuk pesan, konsultasi, atau pemesanan cepat.</p>
    </div>
</section>

<section class="contact-section">
    <div class="contact-content">
        <div class="contact-form-card">
            <h2>Pesan Sekarang</h2>
            <form onsubmit="return kirimPesan()">
                <input type="text" id="nama" placeholder="Nama Anda" required>
                <input type="email" id="email" placeholder="Email" required>
                <textarea id="pesan" placeholder="Pesan atau detail pemesanan" required></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>
        </div>

        <div class="contact-info">
            <h2>Informasi Kontak</h2>
            <p><strong>Alamat:</strong> Jl. Bunga Cantik No. 12, Kota</p>
            <p><strong>Telepon:</strong> 0812-3456-7890</p>
            <p><strong>Email:</strong> buketcantik@example.com</p>
            <p><strong>Jam Operasional:</strong> Senin - Sabtu, 08.00 - 18.00</p>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
