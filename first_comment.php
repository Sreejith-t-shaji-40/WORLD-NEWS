<?php
include 'world_connection.php';
     $S = $_SESSION['Topic'];
     $image_topic=mysqli_query($conn,"SELECT * FROM discussion_create WHERE topic = '$S' ");
     
     $row = mysqli_fetch_array($image_topic);

     $t_id = $row['t_id'];
     $sqli= "INSERT INTO  `discuss` (`comment`,`topic_id`)VALUES('SHARE what YOU think RIGHT: ADMIN','$t_id')";

     if (mysqli_query($conn, $sqli))
 {
    
    header("Location:discu.php?edit=".$t_id);
    exit();

} 
else
 {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


    
    


?>