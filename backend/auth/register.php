<?php

include "../config/db.php";

$username = $_POST['username'];
$password = password_hash(
    $_POST['password'],
    PASSWORD_DEFAULT
);

$query = mysqli_query(
    $conn,
    "INSERT INTO users(username,password,role)
     VALUES('$username','$password','user')"
);

if($query){
    header(
    "Location: ../../frontend/login.php"
    );
}
?>
