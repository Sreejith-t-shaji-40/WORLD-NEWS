<?php
include 'world_connection.php';
$topic=$_POST['Topic'];
$j_id=$_SESSION['journalist_id'];


$timestamp1 = time();
 $mysql_start = date("H:i:s", $timestamp1);


 $new_time = date("H:i:s", strtotime('+2 minutes', $timestamp1));
 //echo $mysql_start;
 //echo $new_time;
 $date = date("Y/m/d");

//$date = date_create("01/02/2016");
//$date_convert = date_format($date, "m/d/Y");


 //$timestamp2 = strtotime($_POST['end']);
// $mysql_end = date("H:i:s", $timestamp2);

$sql= "INSERT INTO  `discussion_create` (`topic`,`journ_id`,`end`,`date`)VALUES('$topic','$j_id','$new_time','$date')";

if (mysqli_query($conn, $sql))
 {
    $_SESSION['Topic']=$topic;
    
   header("Location: first_comment.php");
  
  
  exit();

} 
else
 {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>