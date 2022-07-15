<?php
 require 'connection.php';


 $e_name=$_POST['e_name'];
 $s_name=$_POST['s_name'];
 $noofqes=$_POST['noofqes'];
 $marks=$_POST['marks'];
 $e_duration=$_POST['e_duration'];
$u_date=date("d/m/Y");

$link = mysqli_connect($host,$username,$password,$dbname);
$id=0;
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    include 'test.php';
}
 
$sql = "SELECT * FROM test";
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


 $sql = "INSERT INTO test(test_id,create_date,exam_title,subject_name,no_of_question,total_marks,exam_timing,status)
 VALUES (".$id.",'".$u_date."','".$e_name."','".$s_name."','".$noofqes."','".$marks."','".$e_duration."','Active')";

if(mysqli_query($link, $sql))
{
    echo '<script type="text/javascript">';
    echo ' alert("test add Successfully")';  //not showing an alert box.
    echo '</script>';
    include '='.$id;
    header('Location:add_question.php?testid='.$id);
    exit;
} 

else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo '<script type="text/javascript">';
    echo ' alert("test not add try later")';  //not showing an alert box.
    echo '</script>';
    include 'test.php';
}


mysqli_close($link);

}
catch (Exception $ex)
{
  //echo $ex;
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  echo '<script type="text/javascript">';
  echo ' alert("test not add try later")';  //not showing an alert box.
  echo '</script>';
  include 'test.php';

}



?>