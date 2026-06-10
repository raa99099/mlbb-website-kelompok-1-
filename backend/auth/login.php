<?php

session_start();

include "../config/db.php";

$username = $_POST['username'];
$password = $_POST['password'];

// ✅ TAMBAHAN: Escape input untuk keamanan dasar
$username = mysqli_real_escape_string($conn, $username);

$query = mysqli_query(
    $conn,
    "SELECT * FROM users WHERE username='$username'"
);

$user = mysqli_fetch_assoc($query);

if (
    $user &&
    password_verify($password, $user['password'])
) {
    $_SESSION['id']       = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role']     = $user['role'];

    header("Location: ../../frontend/index.php");
    exit(); // ✅ TAMBAHAN: exit() setelah redirect

} else {

    // ✅ DIUBAH: redirect balik ke login dengan pesan error
    // sebelumnya: echo "Login gagal";
    header("Location: ../../frontend/login.php
     ?error=Username+atau+password+salah");
    exit();

}
?>