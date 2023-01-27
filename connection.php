<?php
$host = "localhost";
$uername = "root";
$password = "";
$dbname = "miniproject031";

$conn = new mysqli($host,$uername,$password,$dbname);

if($conn->connect_errno) { 
    die("connection failed: " .$conn->connect_errno);
}
?>
