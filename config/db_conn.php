<?php
$conn = mysqli_connect("localhost", "root", "", "hardeninig");

if (!$conn) {
    echo "Connection error:" . mysqli_connect_error();
}
echo "connected successfully";
