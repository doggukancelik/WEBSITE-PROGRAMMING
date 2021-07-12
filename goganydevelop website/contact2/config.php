<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "blog_samples";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>