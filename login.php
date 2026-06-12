<?php
$pageTitle = 'Login - Buket Cantik UMKM';
$currentPage = 'login';
require_once 'config.php';
require_once 'db.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($email === '' || $password === '') {
        $error = 'Lengkapi semua kolom terlebih dahulu.';
    } else {
        $emailEscaped = $conn->real_escape_string($email);
        $result = $conn->query("SELECT id, name, email, password FROM users WHERE email = '$emailEscaped' LIMIT 1");

        if ($result && $result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_email'] = $user['email'];
                header('Location: produk.php');
                exit;
            }
        }
        $error = 'Email atau kata sandi tidak cocok.';
    }
}

include 'header.php';
?>
<section class="auth-section">
    <div class="auth-card">
        <h2>Masuk</h2>
        <p>Silakan masuk dengan akun Anda untuk melihat produk dan memesan lebih mudah.</p>
        <?php if ($error): ?>
            <div class="message-box error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="post" action="login.php">
            <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
            <input type="password" name="password" placeholder="Kata Sandi" required>
            <button type="submit">Masuk</button>
        </form>
        <p class="form-note">Belum punya akun? <a href="register.php">Daftar Sekarang</a></p>
    </div>
</section>
<?php include 'footer.php'; ?>
