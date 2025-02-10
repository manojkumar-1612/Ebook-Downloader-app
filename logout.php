<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ebook"; 
//database connection
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die('Connection Failed :' . mysqli_connect_error());

}
session_start();

session_unset();
session_destroy();
header('location:index.php');
?>