<?php
include "../config/db.php";

$nama = $_POST['nama'];
$role = $_POST['role'];
$damage = $_POST['damage'];

mysqli_query($conn,
"INSERT INTO heroes(nama,role,damage)
VALUES('$nama','$role','$damage')");

header("Location: ../../frontend/heroes.php");
