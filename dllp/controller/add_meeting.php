<?php
 require 'connection.php';


 $c_name=$_POST['select_course1'];
 $m_date=$_POST['m_date'];
 $m_time=$_POST['m_time'];
 $m_id=$_POST['m_id'];
 $m_password=$_POST['m_password'];
 $m_link=$_POST['m_link'];
 $course_id=$_POST['course_id'];


$link = mysqli_connect($host,$username,$password,$dbname);
$id=0;
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    include 'meeting.php';
}
 
$sql = "SELECT * FROM course_meeting";
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


 $sql = "INSERT INTO course_meeting(meeting_id,meeting_date,course_id,course_name,meeting_time,meeting_zoomid,meeting_password,meeting_link,status)
 VALUES (".$id.",'".$m_date."',".$course_id.",'".$c_name."','".$m_time."','".$m_id."','".$m_password."','".$m_link."','Active')";

if(mysqli_query($link, $sql))
{
    echo '<script type="text/javascript">';
    echo ' alert("meeting add Successfully")';  //not showing an alert box.
    echo '</script>';
} 

else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo '<script type="text/javascript">';
    echo ' alert("meeting not add try later")';  //not showing an alert box.
    echo '</script>';
}


mysqli_close($link);
include 'meeting.php';
}
catch (Exception $ex)
{
  //echo $ex;
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  echo '<script type="text/javascript">';
  echo ' alert("meeting not add try later")';  //not showing an alert box.
  echo '</script>';
include 'meeting.php';

}



?>