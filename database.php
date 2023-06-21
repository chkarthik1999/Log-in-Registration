<?php


    $hostName = 'localhost';
    $dbUser = 'root';
    $dbPassword = 'root';
    $dbName = "log-in & registration";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

    if(mysqli_connect_errno()){
       echo "Failed to connect!";
       exit();
    }
    echo "Connection sucess!"
?>