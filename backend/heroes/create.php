<?php
session_start();
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama     = mysqli_real_escape_string($conn, $_POST['nama']);
    $role     = mysqli_real_escape_string($conn, $_POST['role']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $image    = mysqli_real_escape_string($conn, $_POST['image']);

    $sql = "INSERT INTO heroes (nama, role, deskripsi, image) VALUES ('$nama', '$role', '$deskripsi', '$image')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../heroes.php?success=Hero berhasil ditambahkan");
    } else {
        header("Location: ../../tambah_hero.php?error=Gagal menambahkan hero");
    }
    exit();
}
?>
