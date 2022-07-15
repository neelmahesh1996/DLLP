<?php
 require 'connection.php';


 $u_mobile=$_POST['mobile'];
 $u_email=$_POST['email'];
 $u_password=$_POST['password'];
 


$link = mysqli_connect($host,$username,$password,$dbname);
$id=0;
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    header('Location:forgetpassword.php');
    exit;
}
 
$sql = "UPDATE course_registration SET password='".$u_password."' WHERE mobile_no='".$u_mobile."' and email_id='".$u_email."'";
$result = $link->query($sql);
//echo $result;
if ($result>0){
  $sql1="SELECT * from course_registration WHERE mobile_no='".$u_mobile."' and email_id='".$u_email."' ";
  $result = $link->query($sql1);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
  header('Location:profile.php?rid='.$row["registration_id"]);
    exit;
}
}
 
}
else
{
  header('Location:forgetpassword.php');
    exit;
}

 
?>