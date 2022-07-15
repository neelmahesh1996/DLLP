<?php
 require 'connection.php';


 $c_id=$_POST['c_id'];
 $c_name=$_POST['c_name'];
 $c_duration=$_POST['c_duration'];
 $c_fee=$_POST['c_fee'];


$link = mysqli_connect($host,$username,$password,$dbname);
$id=0;
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    include 'manage_course.php';
}
 
try
{


 $sql = "update course set course_name='".$c_name."',course_duration='".$c_duration."',course_fees='".$c_fee."' where course_id=$c_id";

if(mysqli_query($link, $sql))
{
    echo '<script type="text/javascript">';
    echo ' alert("course update successfully")';  //not showing an alert box.
    echo '</script>';
} 

else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo '<script type="text/javascript">';
    echo ' alert("course not add try later")';  //not showing an alert box.
    echo '</script>';
}


mysqli_close($link);
include 'manage_course.php';
}
catch (Exception $ex)
{
  //echo $ex;
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  echo '<script type="text/javascript">';
  echo ' alert("course not add try later")';  //not showing an alert box.
  echo '</script>';
include 'manage_course.php';

}



?>