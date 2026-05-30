<?php
include "../config/db.php";

$id = $_GET['id'];

mysqli_query($conn,
"DELETE FROM heroes WHERE id='$id'");

header("Location: ../../frontend/heroes.php");
