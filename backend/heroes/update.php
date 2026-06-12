<?php
session_start();
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id       = (int) $_POST['id'];
    $nama     = mysqli_real_escape_string($conn, $_POST['nama']);
    $role     = mysqli_real_escape_string($conn, $_POST['role']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $image    = mysqli_real_escape_string($conn, $_POST['image']);

    $sql = "UPDATE heroes SET nama='$nama', role='$role', deskripsi='$deskripsi', image='$image' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../heroes.php?success=Hero berhasil diupdate");
    } else {
        header("Location: ../../heroes.php?error=Gagal mengupdate hero");
    }
    exit();
}
?>
