<?php
 require 'connection.php';


 $name=$_POST['name'];
 $mobile=$_POST['mobile'];
 $email=$_POST['email'];
 $qualification=$_POST['qualification'];
 $username1=$_POST['username'];
 $password1=$_POST['password'];
 $address=$_POST['address'];
 $datef=date("d/m/Y");

$link = mysqli_connect($host,$username,$password,$dbname);
$id=0;
$scid=0;
$feeid=0;
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    include 'registration.php';
}

$sql = "SELECT * FROM course_registration where username='".$username1."'";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    echo "if execute";
   header('Location:registration.php');
    exit;
 
}
else
{
 
$sql = "SELECT * FROM course_registration";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$id+1;
  }
}

 $id=$id+1;

$sql = "SELECT * FROM selected_course";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $scid=$scid+1;
  }
}

 $scid=$scid+1;
 //echo "scid=".$scid;

$sql = "SELECT * FROM fees";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $feeid=$feeid+1;
  }
}

 $feeid=$feeid+1;

try
{


 $sql = "INSERT INTO course_registration(registration_id,registration_date,student_name,mobile_no,email_id,qualification,full_address,username,password,status)
 VALUES (".$id.",'".$datef."','".$name."','".$mobile."','".$email."','".$qualification."','".$address."','".$username1."','".$password1."','Decline')";

if(mysqli_query($link, $sql))
{



  $sql="SELECT * FROM course where status='Active'";
  $result = $link->query($sql);

    if ($result->num_rows > 0) 
    {

      while($row = $result->fetch_assoc()) 
        {

          //echo "while <br>";
          $cid=$row["course_id"];
          //echo "cid=".$cid."<br>";
          //echo "cid=".$_POST[$cid]."<br>";
          if(isset($_POST[$cid]))
          {
            $crid=$_POST[$cid];
          }
     
          if($crid=="checked")
            {
              $crid="";
        
              $sql1="select * from course where course_id=".$cid."";
              $result1 = $link->query($sql1);
              $row1 = $result1->fetch_assoc();
              $cname=$row1["course_name"];
              $cfee=$row1["course_fees"];
              $cdr=$row1["course_duration"];
        


        $sql2="INSERT INTO selected_course(selected_course_id,registration_id,course_id,course_name,course_fee,selected_date)VALUES(".$scid.",".$id.",".$cid.",'".$cname."','".$cfee."','".$datef."')";
          if(mysqli_query($link,$sql2))

            $sql3="INSERT INTO fees(fee_id,paid_date,selected_course_id,course_id,registration_id,total_fees,status)VALUES(".$feeid.",'NA',".$scid.",".$cid.",".$id.",'".$cfee."','Unpaid')";
          if(mysqli_query($link,$sql3))
            
            $feeid=$feeid+1;
            $scid=$scid+1;
          //    echo $scid;
              
            }
            


  }
}

    echo '<script type="text/javascript">';
    echo ' alert("student register  Successfully")';  //not showing an alert box.
    echo '</script>';
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo '<script type="text/javascript">';
    echo ' alert("registration failed try later")';  //not showing an alert box.
    echo '</script>';
}


mysqli_close($link);
include 'registration.php';
}
catch (Exception $ex)
{
  //echo $ex;
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  echo '<script type="text/javascript">';
  echo ' alert("registration failed try later")';  //not showing an alert box.
  echo '</script>';
include 'registration.php';

}

}

?>