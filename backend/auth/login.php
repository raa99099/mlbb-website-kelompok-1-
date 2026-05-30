<?php

session_start();

include "../config/db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query(
$conn,
"SELECT * FROM users
WHERE username='$username'"
);

$user = mysqli_fetch_assoc($query);

if(
    $user &&
    password_verify(
        $password,
        $user['password']
    )
){

    $_SESSION['id'] =
    $user['id'];

    $_SESSION['username'] =
    $user['username'];

    $_SESSION['role'] =
    $user['role'];

    header(
    "Location: ../../frontend/index.php"
    );

}else{

    echo "Login gagal";

}
?>
