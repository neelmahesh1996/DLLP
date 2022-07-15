<?php
 require 'connection.php';


 $u_name=$_POST['username'];
 $u_password=$_POST['password'];
 


$link = mysqli_connect($host,$username,$password,$dbname);
$id=0;
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    header('Location:user_login.php');
    exit;
}
 
$sql = "SELECT * FROM course_registration where username='".$u_name."' and password='".$u_password."'";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $rid=$row["registration_id"];
    header('Location:index.php?rid='.$rid);
    exit;
  }
}
else
{
  header('Location:user_login.php');
    exit;
}

 
?>