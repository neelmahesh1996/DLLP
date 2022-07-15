<?php
 require 'connection.php';

 $u=$_POST['username'];
 $p=$_POST['password'];
 //echo $u."<br>";
 //echo $p."<br>";

 // echo $host."<br>";
 // echo $username."<br>";
 // echo $password."<br>";
 // echo $dbname."<br>";
$link = mysqli_connect($host,$username,$password,$dbname);
$id=0;
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
	try
     {
 	$sql = "SELECT * FROM admin_login where a_username='".$u."' and a_password='".$p."'";
    $result = $link->query($sql);

    if ($result->num_rows > 0) 
    {
    	echo '<script type="text/javascript">';
        echo ' alert("login success")';  //not showing an alert box.
        echo '</script>';
        include 'dashboard.php';
     }
   else
    {
    echo '<script type="text/javascript">';
    echo ' alert("login failed try again")';  //not showing an alert box.
    echo '</script>';
    include 'index.html';
    }
   }
catch(Exception $ex)
{
	echo '<script type="text/javascript">';
    echo ' alert("process error found try again")';  //not showing an alert box.
    echo '</script>';
    include 'index.html';
}
 
}

 




?>