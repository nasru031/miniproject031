<?php 
$name =$_POST["S_Name"]; 
$lastName = $_POST["S_LastName"]; 
$address = $_POST["S_Address"]; 
$sunjectName = $_POST["S_SunjectName"]; 

include('connection.php'); 

//สร้างคา สั่ง sql 
$sql = "INSERT INTO tbl_customers (S_Name,S_LastName,S_Address,S_SunjectName) VALUES ('$name','$lastName','$address','$sunjectName')"; 
if ($conn->query($sql)) { 

 echo "New record created successfully"; 
 header('location:index.php'); //กลับไปยังหน้าตาราง 
} else { 
 echo "Error: " . $sql . "<br>" . $conn->error; 
} 
$conn->close(); 
?> 
