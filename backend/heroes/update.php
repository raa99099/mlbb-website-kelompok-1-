<?php
include "../config/db.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$role = $_POST['role'];
$damage = $_POST['damage'];

mysqli_query($conn,
"UPDATE heroes
SET nama='$nama',
role='$role',
damage='$damage'
WHERE id='$id'");

header("Location: ../../frontend/heroes.php");
