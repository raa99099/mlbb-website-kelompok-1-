<?php
include "../config/db.php";

$query = mysqli_query($conn, "SELECT * FROM heroes");

$data = [];

while($row = mysqli_fetch_assoc($query)){
    $data[] = $row;
}

return $data;
?>
