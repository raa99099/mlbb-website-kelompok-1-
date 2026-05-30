<?php
include "../config/db.php";

$nama  = $_POST['nama'];
$harga = $_POST['harga'];

mysqli_query($conn,
"INSERT INTO items (nama, harga)
VALUES ('$nama', '$harga')");

header("Location: ../../frontend/items.php");
exit;
?>
