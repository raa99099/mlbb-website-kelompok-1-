<?php
include "../config/db.php";

$id    = $_POST['id'];
$nama  = $_POST['nama'];
$harga = $_POST['harga'];

mysqli_query($conn,
"UPDATE items
SET nama='$nama',
harga='$harga'
WHERE id='$id'");

header("Location: ../../frontend/items.php");
exit;
?>
