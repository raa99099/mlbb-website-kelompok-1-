<?php

session_start();

include "../config/db.php";

// ✅ TAMBAHAN: escape input
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// ✅ TAMBAHAN: cek username sudah dipakai atau belum
$cek = mysqli_query($conn, "SELECT id FROM users WHERE username='$username'");
if (mysqli_num_rows($cek) > 0) {
    header("Location: ../../frontend/register.php?error=Username+sudah+digunakan");
    exit();
}

$query = mysqli_query(
    $conn,
    "INSERT INTO users(username, password, role)
     VALUES('$username', '$password', 'user')"
);

if ($query) {
    // ✅ DIUBAH: redirect ke login dengan pesan sukses
    // sebelumnya: header("Location: ../../frontend/login.php"); tanpa pesan apapun
    header("Location: ../../frontend/login.php?success=Akun+berhasil+dibuat%2C+silakan+login");
    exit();
} else {
    // ✅ TAMBAHAN: kalau gagal insert, ada pesan error
    header("Location: ../../frontend/register.php?error=Pendaftaran+gagal%2C+coba+lagi");
    exit();
}
?>