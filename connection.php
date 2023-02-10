<?php
$host = "localhost";
$username = "id20142765_root";
$password = "KZE^K)-#s*LCTp6A";
$dbname = "id20142765_miniproject031";

//สร้างการเชื่อมต่อ
$conn = new mysqli($host, $username, $password, $dbname);

//ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error)
{
    die("connection failed : " . $conn->connect_error);
}
?>