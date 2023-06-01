<?php
$conn=new mysqli("localhost", "root", "", "marketdb");
if($conn->connect_error){
  die("Connection failed". $conn->connect_error);
}
 ?>
