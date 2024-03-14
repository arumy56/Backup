<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php 

$host = 'localhost';
$username = 'root'; 
$password = ''; 
$database = 'formi';



$conn=new mysqli($host,$username,$password,$database);
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}


  // echo  "hello haha";

  ?>
     
  
</body>
</html>
