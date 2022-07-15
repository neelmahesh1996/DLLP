<?php
 require 'connection.php';


 $qesno=$_POST['qesno'];
 $testid=$_POST['testid'];
 $u_date=date("d/m/Y");

$link = mysqli_connect($host,$username,$password,$dbname);
$id=0;
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    header('Location:add_question.php?testid='.$testid);
    exit;
}
 
$sql = "SELECT * FROM question";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$id+1;
  }

   $id=$id+1;
}

 

try
{
            $vqid=$_POST["question"];
            $voa=$_POST["option_a"];
            $vob=$_POST["option_b"];
            $voc=$_POST["option_c"];
            $vod=$_POST["option_d"];
            $vans=$_POST["answer"];
            $vmark=$_POST["mark"];

    $sql = "INSERT INTO question(question_id,test_id,question,option_a,option_b,option_c,option_d,answer,mark)
 VALUES (".$id.",'".$testid."','".$vqid."','".$voa."','".$vob."','".$voc."','".$vod."','".$vans."','".$vmark."')";

    if(mysqli_query($link,$sql))
    {
      echo '<script type="text/javascript">';
      echo ' alert("question add successfully")';  //not showing an alert box.
      echo '</script>';
    }
    else
    {
    echo '<script type="text/javascript">';
    echo ' alert("question not add")';  //not showing an alert box.
    echo '</script>';
    }

mysqli_close($link);
header('Location:add_question.php?testid='.$testid);
    exit;
}
catch (Exception $ex)
{
  //echo $ex;
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  echo '<script type="text/javascript">';
  echo ' alert("question  not add try later")';  //not showing an alert box.
  echo '</script>';
  header('Location:add_question.php?testid='.$testid);
    exit;

}



?>