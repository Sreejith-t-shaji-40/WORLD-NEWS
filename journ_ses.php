<?php
include 'world_connection.php';
$jname=$_POST['jname'];
$jpwd=$_POST['jpwd'];

$sql = mysqli_query($conn, "SELECT * FROM journalist_log WHERE journalist_name='$jname' ");

if($jname&&$jpwd)
{

while ($row = mysqli_fetch_array($sql))
{
    
    if($jpwd == $row['journalist_password'] && $jname == $row['journalist_name'])
      {
        $_SESSION['journalist_id'] = $row['j_id'];
        $_SESSION['user_session']= 'journ';
      
        header("Location: journ_home.html");
      }
      else
  {
  die("incorrect username/password!");

   }

}
}
?>