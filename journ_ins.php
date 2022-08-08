<?php

include 'world_connection.php';
//print_r($_POST);
$jname=$_POST['jname'];
//print_r($_POST);
$jemail=$_POST['jemail'];
$jpwd=$_POST['jpwd'];


$sql = "INSERT INTO `journalist_log`( `journalist_name`, `journalist_mail`, `journalist_password`) VALUES ('$jname','$jemail','$jpwd')";




if (mysqli_query($conn, $sql))

 {
  echo " record created successfully";
} 
else
 {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>