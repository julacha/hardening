<?php

include('config/db_conn.php');

$post = $_POST;
$email = $post['loginemail'];
$password = $post['loginpassword'];

// $email = mysqli_real_escape_string($conn, $_POST['email']);
// $password = mysqli_real_escape_string($conn, $_POST['password']);

$password = md5($password . "lalala");

$query = "SELECT * FROM users WHERE  `email` = '$email' AND `password` = '$password'";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

if ($count > 0) {
    echo "Login Successful";
} else {
    echo "Login Not Successful";
}
