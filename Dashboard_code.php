<?php
$conn = new mysqli("localhost", "root", "", "login_with_register");

if (!$conn){
    echo "something wrong";

    die(mysqli_error($conn));
}
$firstname=['username'];
$lastname=['lastname'];
$email=['email'];
$password=['passwords'];
?>
