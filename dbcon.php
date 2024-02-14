<?php
//step1: create a database connection
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'wdt_assignment';

$conn = mysqli_connect($servername,$username,$password,$database);

//check connection status
if($conn === false){
    die("connection failed" . mysqli_connect_error());
} 

