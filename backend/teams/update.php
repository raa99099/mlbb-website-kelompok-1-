<?php
include "../config/db.php";

$id        = $_POST['id'];
$nama_team = $_POST['nama_team'];
$asal      = $_POST['asal'];

mysqli_query($conn,
"UPDATE teams
SET nama_team='$nama_team',
asal='$asal'
WHERE id='$id'");

header("Location: ../../frontend/teams.php");
exit;
?>
