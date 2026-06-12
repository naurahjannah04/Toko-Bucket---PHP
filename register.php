<?php
$pageTitle = 'Daftar - Buket Cantik UMKM';
$currentPage = 'register';
require_once 'config.php';
require_once 'db.php';

$error = '';
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $confirmPassword = trim($_POST['confirm_password'] ?? '');

    if ($name === '' || $email === '' || $password === '' || $confirmPassword === '') {
        $error = 'Lengkapi semua kolom terlebih dahulu.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Format email tidak valid.';
    } elseif ($password !== $confirmPassword) {
        $error = 'Kata sandi dan konfirmasi tidak sama.';
    } else {
        $emailEscaped = $conn->real_escape_string($email);
        $check = $conn->query("SELECT id FROM users WHERE email = '$emailEscaped' LIMIT 1");
        if ($check && $check->num_rows > 0) {
            $error = 'Email sudah terdaftar. Silakan masuk atau gunakan email lain.';
        } else {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $nameEscaped = $conn->real_escape_string($name);
            $insert = $conn->query("INSERT INTO users (name, email, password) VALUES ('$nameEscaped', '$emailEscaped', '$passwordHash')");
            if ($insert) {
                $success = 'Pendaftaran berhasil. Silakan masuk sekarang.';
            } else {
                $error = 'Terjadi kesalahan saat mendaftar. Coba lagi.';
            }
        }
    }
}

include 'header.php';
?>
<section class="auth-section">
    <div class="auth-card">
        <h2>Daftar Akun</h2>
        <p>Isi data berikut untuk membuat akun dan mulai memesan produk.</p>
        <?php if ($error): ?>
            <div class="message-box error"><?= htmlspecialchars($error) ?></div>
        <?php elseif ($success): ?>
            <div class="message-box success"><?= htmlspecialchars($success) ?></div>
        <?php endif; ?>
        <form method="post" action="register.php">
            <input type="text" name="name" placeholder="Nama Lengkap" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required>
            <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
            <input type="password" name="password" placeholder="Kata Sandi" required>
            <input type="password" name="confirm_password" placeholder="Konfirmasi Kata Sandi" required>
            <button type="submit">Daftar</button>
        </form>
        <p class="form-note">Sudah punya akun? <a href="login.php">Masuk Sekarang</a></p>
    </div>
</section>
<?php include 'footer.php'; ?>
