<?php
 require 'connection.php';


 $counter=$_POST['counter'];
 $rid=$_POST['rid'];
 $test=$_POST['testid'];
 $datef=date("d/m/Y");


//echo $test;
$link = mysqli_connect($host,$username,$password,$dbname);
$exam_id=0;
$result_id=0;
$answer_id=0;
$correct_answer=0;
$wrong_answer=0;
$marks=0;
$i=0;
$correctq=0;
$worngq=0;
$total=0;
$percentage=0.0;
$grade="";
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  header('Location:result.php?rid='.$rid);
  exit;
}
 
$sql = "SELECT * FROM exam";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $exam_id=$exam_id+1;
  }
}

 $exam_id=$exam_id+1;

$sql = "SELECT * FROM result";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $result_id=$result_id+1;
  }
}

 $result_id=$result_id+1;
 //echo "scid=".$scid;

$sql = "SELECT * FROM saved_answer";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $answer_id=$answer_id+1;
  }
}

 $answer_id=$answer_id+1;

try
{

  echo $exam_id;
  echo $result_id;
  echo $answer_id;


 $sql ="INSERT INTO exam(exam_id,student_id,test_id,exam_date)
 VALUES (".$exam_id.",".$rid.",".$test.",'".$datef."')";

if(mysqli_query($link, $sql))
{

//echo "exam update successfully";

$i=$i+1;

      $sql1="SELECT * FROM  question where test_id=".$test."";
      $result1 = $link->query($sql1);

    if ($result1->num_rows > 0) 
    {

      while($row1 = $result1->fetch_assoc()) 
        {
          //echo "while <br>";

          $qid=$row1["question_id"];
          $sop="qns".$i;
          $canswer=$row1["answer"];
          $tmark=$row1["mark"];
          $option=$_POST[$sop];
          //echo $sop;
          //echo "option=".$option;

          $total=$total+(int)$tmark;

          if($option==$canswer)
          {
            $marks=$marks+(int)$tmark;
            $correctq=$correctq+1;
          }
          else
          {
            $worngq=$worngq+1;
          }
        try
        {


          $sql2 ="INSERT INTO saved_answer(save_id,exam_id,test_id,question_id,saved_option,correct_answer,marks)
          VALUES (".$answer_id.",".$exam_id.",".$test.",".$qid.",'".$option."','".$canswer."','".$tmark."')";
          $link->query($sql2);
        }
        catch(Exception $ex)
        {
          //echo $ex;
        }

          $i=$i+1;
          $answer_id=$answer_id+1;


        }
        if($total==0)
        {
          $percentage=0;
        }
        else
        {
        $percentage=($marks/$total)*100;
        }

        if($percentage>40)
        {
          $grade="Pass";
        }
        else
        {
          $grade="Failed";
        }


          $sql3 ="INSERT INTO result(result_id,exam_id,student_id,result_date,total_question,correct_answer,worng_answer,total_marks,outof_marks,percentage,grade)
          VALUES (".$result_id.",".$exam_id.",".$rid.",'".$datef."','".$counter."','".$correctq."','".$worngq."','".$marks."','".$total."','".$percentage."','".$grade."')";
          $link->query($sql3);




    }


  }

  

mysqli_close($link);

  // echo '<script type="text/javascript">';
  // echo ' alert("Result generate successfully")';  //not showing an alert box.
  // echo '</script>';
  header('Location:result.php?rid='.$rid);
  exit;
}
catch (Exception $ex)
{
  //echo $ex;
  
  // echo '<script type="text/javascript">';
  // echo ' alert("exam submit failed try later")';  //not showing an alert box.
  // echo '</script>';
  header('Location:result.php?rid='.$rid);
  exit;

}



?>