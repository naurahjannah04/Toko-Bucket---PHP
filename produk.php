<?php
$pageTitle = 'Produk - Buket Cantik UMKM';
$currentPage = 'produk';
require_once 'db.php';

function formatRp($value) {
    return 'Rp' . number_format($value, 0, ',', '.');
}

$products = [];
$result = $conn->query('SELECT id, name, description, price, image_url FROM products ORDER BY id ASC');
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

include 'header.php';
?>
<section class="page-header">
    <div class="page-header-content">
        <h1>Produk Kami</h1>
        <p>Pilih buket bunga, snack, dan uang yang cantik untuk setiap acara spesial.</p>
        <a href="kontak.php" class="button">Pesan Sekarang</a>
    </div>
</section>

<section class="produk-section">
    <div class="section-intro">
        <h2>Koleksi Pilihan</h2>
        <p>Kami merancang buket dengan bahan segar, presentasi elegan, dan nilai terbaik untuk hadiah atau kejutan Anda.</p>
    </div>

    <div class="product-grid">
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <article class="card">
                    <img src="<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                    <div class="card-body">
                        <h3><?= htmlspecialchars($product['name']) ?></h3>
                        <p><?= htmlspecialchars($product['description']) ?></p>
                        <span class="price"><?= formatRp($product['price']) ?></span>
                        <button onclick="beli('<?= htmlspecialchars($product['name']) ?>')">Beli</button>
                    </div>
                </article>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="empty-state">
                <p>Tidak ada produk tersedia saat ini. Silakan coba lagi nanti.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include 'footer.php'; ?>
