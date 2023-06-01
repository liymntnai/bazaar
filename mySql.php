<?php
include 'connection.php';

$array = array();
$search = "SELECT cat_name FROM category";
$result5 = $conn -> query($search);

// Associative array
for ($r=0; $r<$result5->num_rows; $r++) {
  $row=$result5->fetch_assoc();
  $array[$r]=$row["cat_name"];
  // printf ("%s\n<br>", $row["cat_name"]);
  printf ($array[$r]);
}
// $row5 = $result5 -> fetch_assoc();

// printf ("%s\n", $row5["cat_name"]);
// // Free result set
// $result5 -> free_result();

$conn -> close(); ?>
