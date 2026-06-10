<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - MLBB Info</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body class="auth-body">

<div class="particles" id="particles"></div>

<div class="auth-container">

    <div class="auth-logo">
        <span class="icon">⚔️</span>
        <h1>MLBB INFO</h1>
        <p>Mobile Legends Bang Bang</p>
    </div>

    <div class="auth-card">

        <div class="auth-topline"></div>

        <h2>Masuk ke Akun</h2>

        <?php if (!empty($_GET['error'])): ?>
        <div class="alert alert-error">
            ❌ <?= htmlspecialchars($_GET['error']) ?>
        </div>
        <?php endif; ?>

        <?php if (!empty($_GET['success'])): ?>
        <div class="alert alert-success">
            ✅ <?= htmlspecialchars($_GET['success']) ?>
        </div>
        <?php endif; ?>

        <form method="POST"
              action="../backend/auth/login.php">

            <div class="form-group">
                <label>Username</label>
                <input type="text"
                       name="username"
                       placeholder="Masukkan Username"
                       required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password"
                       name="password"
                       placeholder="Masukkan Password"
                       required>
            </div>

            <button class="btn-auth">
                Login
            </button>

        </form>

        <div class="auth-divider">atau</div>

        <div class="auth-link-row">
            Belum punya akun?
            <a href="register.php">Daftar</a>
        </div>

    </div>

</div>

<script src="js/script.js"></script>
<script>initParticles('particles');</script>

</body>
</html>