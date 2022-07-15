<?php
 require 'connection.php';
 $c_name=$_POST['c_name'];
 $u_date=date("d/m/Y");


$link = mysqli_connect($host,$username,$password,$dbname);
$id=0;
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    include 'notification.php';
}
 
$sql = "SELECT * FROM notification";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$id+1;
  }
}

 $id=$id+1;

try
{


 $sql = "INSERT INTO notification(notification_id,upload_date,text_message,status)
 VALUES (".$id.",'".$u_date."','".$c_name."','Active')";

if(mysqli_query($link, $sql))
{
    echo '<script type="text/javascript">';
    echo ' alert("notification send Successfully")';  //not showing an alert box.
    echo '</script>';
} 

else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo '<script type="text/javascript">';
    echo ' alert("failed try later")';  //not showing an alert box.
    echo '</script>';
}


mysqli_close($link);
include 'notification.php';
}
catch (Exception $ex)
{
  //echo $ex;
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  echo '<script type="text/javascript">';
  echo ' alert("failed try later")';  //not showing an alert box.
  echo '</script>';
include 'notification.php';

}



?>