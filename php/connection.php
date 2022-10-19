<?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $db="sushigobd";
    $conn=mysqli_connect($host,$username,$pass,$db);

    if(!$conn){
        die("Data connection error");
    }
?>