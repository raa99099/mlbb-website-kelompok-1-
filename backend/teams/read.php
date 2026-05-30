<?php
include "../config/db.php";

$query = mysqli_query($conn, "SELECT * FROM teams");

$data = [];

while($row = mysqli_fetch_assoc($query)){
    $data[] = $row;
}

return $data;
?>
