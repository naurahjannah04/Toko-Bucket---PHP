/**
 * FUNGSI: pesanSekarang()
 * TUJUAN: Mengarahkan user ke section produk dengan smooth scroll atau redirect ke halaman produk
 * DIGUNAKAN DI: Tombol "Lihat Produk" di halaman beranda
 */
function pesanSekarang() {
    // Mencari elemen dengan ID 'produk' (section yang menampilkan produk unggulan)
    const target = document.getElementById('produk');
    
    // Jika elemen produk ditemukan di halaman saat ini (user di halaman home)
    if (target) {
        // Scroll halaman secara smooth ke section produk dengan animasi
        target.scrollIntoView({ behavior: 'smooth' });
        return; // Keluar dari fungsi, tidak perlu redirect
    }
    
    // Jika elemen produk tidak ditemukan (user di halaman lain), 
    // redirect ke halaman produk.php
    window.location.href = 'produk.php';
}

/**
 * FUNGSI: beli(namaProduk)
 * TUJUAN: Menampilkan dialog konfirmasi ketika user klik tombol "Beli"
 * PARAMETER: namaProduk (string) - nama produk yang dipilih user
 * DIGUNAKAN DI: Tombol "Beli" pada setiap kartu produk
 */
function beli(namaProduk) {
    // Menampilkan popup alert yang menginformasikan produk yang dipilih
    // dan meminta user menghubungi kami untuk konfirmasi lebih lanjut
    alert('Anda memilih ' + namaProduk + '. Silakan hubungi kami untuk konfirmasi pemesanan.');
}

/**
 * FUNGSI: kirimPesan()
 * TUJUAN: Memvalidasi dan memproses form pesan kontak dari user
 * DIGUNAKAN DI: Form "Pesan Sekarang" di halaman kontak.php
 * RETURN: false (untuk mencegah form submit default)
 */
function kirimPesan() {
    // Ambil nilai dari input nama dan hapus spasi di awal/akhir dengan .trim()
    const nama = document.getElementById('nama').value.trim();
    
    // Ambil nilai dari input email dan hapus spasi di awal/akhir dengan .trim()
    const email = document.getElementById('email').value.trim();
    
    // Ambil nilai dari textarea pesan dan hapus spasi di awal/akhir dengan .trim()
    const pesan = document.getElementById('pesan').value.trim();

    // VALIDASI: Cek apakah salah satu field kosong
    // (!nama) berarti field nama kosong, dan seterusnya untuk email dan pesan
    if (!nama || !email || !pesan) {
        // Jika ada field kosong, tampilkan alert peringatan
        alert('Lengkapi semua kolom terlebih dahulu.');
        return false; // Hentikan pengiriman form
    }

    // Jika semua field valid, tampilkan alert terima kasih dengan nama user
    alert('Terima kasih, ' + nama + '! Pesan Anda berhasil dikirim. Kami akan segera menghubungi Anda.');
    
    // Kosongkan field nama setelah pengiriman
    document.getElementById('nama').value = '';
    
    // Kosongkan field email setelah pengiriman
    document.getElementById('email').value = '';
    
    // Kosongkan field pesan setelah pengiriman
    document.getElementById('pesan').value = '';
    
    // Return false untuk mencegah form reload halaman secara default
    return false;
}
