<?php
    $hostname = 'localhost:3306';
    $username = 'root';
    $password = '';
    $dbname = "member";
    $conn = mysqli_connect($hostname, $username, $password,$dbname);
    if (!$conn) {
        die('Không thể kết nối: ' . mysqli_error($conn));
        exit();
    }
?>
