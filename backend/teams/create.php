<?php
include "../config/db.php";

$nama_team = $_POST['nama_team'];
$asal      = $_POST['asal'];

mysqli_query($conn,
"INSERT INTO teams (nama_team, asal)
VALUES ('$nama_team', '$asal')");

header("Location: ../../frontend/teams.php");
exit;
?>
