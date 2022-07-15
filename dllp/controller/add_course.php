<?php
 require 'connection.php';


 $c_name=$_POST['c_name'];
 $c_duration=$_POST['c_duration'];
 $c_fee=$_POST['c_fee'];


$link = mysqli_connect($host,$username,$password,$dbname);
$id=0;
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    include 'course.php';
}
 
$sql = "SELECT * FROM course";
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


 $sql = "INSERT INTO course(course_id,course_name,course_duration,course_fees,status)
 VALUES (".$id.",'".$c_name."','".$c_duration."','".$c_fee."','Active')";

if(mysqli_query($link, $sql))
{
    echo '<script type="text/javascript">';
    echo ' alert("couser add Successfully")';  //not showing an alert box.
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
include 'course.php';
}
catch (Exception $ex)
{
  //echo $ex;
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  echo '<script type="text/javascript">';
  echo ' alert("course not add try later")';  //not showing an alert box.
  echo '</script>';
include 'course.php';

}



?>