<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register - MLBB Info</title>
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

<h2>Buat Akun Baru</h2>

<form method="POST"
      action="../backend/auth/register.php">

<div class="form-group">
<label>Username</label>
<input type="text"
       name="username"
       required>
</div>

<div class="form-group">
<label>Password</label>
<input type="password"
       name="password"
       required>
</div>

<button class="btn-auth">
Register
</button>

</form>

<div class="auth-divider">atau</div>

<div class="auth-link-row">
Sudah punya akun?
<a href="login.php">Login</a>
</div>

</div>

</div>

<script src="js/script.js"></script>
<script>initParticles('particles');</script>

</body>
</html>
