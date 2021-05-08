<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful


// Create a db
$sql = "CREATE DATABASE users";
$result = mysqli_query($conn, $sql);

// Check for the database creation success


$sql = "CREATE TABLE `users`.`users` ( `sno` INT(11) NOT NULL AUTO_INCREMENT , `username` VARCHAR(11) NOT NULL , `password` VARCHAR(255) NOT NULL , `dt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sno`)) ENGINE = InnoDB";
$result = mysqli_query($conn, $sql);

// Check for the table creation success

  
?>









