<?php
include "../config/db.php";

$id = $_GET['id'];

mysqli_query($conn,
"DELETE FROM teams
WHERE id='$id'");

header("Location: ../../frontend/teams.php");
exit;
?>
