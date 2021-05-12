<?php

include('config/db_conn.php');

$post = $_POST;
if (isset($post['login'])) {
    $email = $post['email'];
    $password = $post['password'];


    $password = md5($password . "salis");

    $query = "SELECT * FROM users WHERE  email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        echo "Login Successful";
    } else {
        echo "Login Not Successful";
    }
}
//header('Location: /');
