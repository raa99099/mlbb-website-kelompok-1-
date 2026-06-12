<?php
session_start();
include '../config/db.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sql = "DELETE FROM heroes WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../heroes.php?success=Hero berhasil dihapus");
    } else {
        header("Location: ../../heroes.php?error=Gagal menghapus hero");
    }
    exit();
}
?>
