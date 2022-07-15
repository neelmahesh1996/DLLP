<?php
require 'connection.php';
$cid=$_POST['course_id'];
$rid=$_POST['rid'];    
$title=$_POST['gallery_title'];
$description=$_POST['gallery_description'];
$name=$_FILES['gallery_file']['name'];
$type=$_FILES['gallery_file']['type'];
$size=$_FILES['gallery_file']['size'];
$cname=str_replace(" ","_",$name);
$tmp_name=$_FILES['gallery_file']['tmp_name'];
$target_path="submission/";
$target_path=$target_path.basename($cname);
$u_date=date("d/m/Y");
//echo $size;

if(move_uploaded_file($_FILES['gallery_file']['tmp_name'],$target_path))
{


              $link = mysqli_connect($host,$username,$password,$dbname);
              $id=0;
              
              if($link === false)             
              {
              die("ERROR: Could not connect. " . mysqli_connect_error());
             header("Location:submit_task.php?rid=".$rid);
             exit;
              }
              else
              {

              $sql = "SELECT * FROM submit_work";
              $result = $link->query($sql);

               if ($result->num_rows > 0) 
               {
               // output data of each row
               while($row = $result->fetch_assoc()) 
               {


               $id=$id+1;


               }

               }
              $id=$id+1;
            
              $query = "INSERT INTO submit_work(student_id,lecture_video_id,upload_date,course_id,video_title,video_description,video_path,status) VALUES(".$rid.",".$id.",'".$u_date."',".$cid.",'".$title."','".$description."','".$cname."','Active')";

              if(mysqli_query($link,$query))
              {
                echo '<script type="text/javascript">';
              echo ' alert("document upload Successfully")';  
              echo '</script>';
               header("Location:submit_task.php?rid=".$rid);
              exit;
              }
              else
              {
                echo '<script type="text/javascript">';
              echo ' alert("document upload failed")';  
              echo '</script>';
               header("Location:submit_task.php?rid=".$rid);
              exit;
              }

              
            }

}
else
{
  echo '<script type="text/javascript">';
  echo ' alert("invalid file Extention")'; 
  echo '</script>';
   header("Location:submit_task.php?rid=".$rid);
             exit;
}


?>
