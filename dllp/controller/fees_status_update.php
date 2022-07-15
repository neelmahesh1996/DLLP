<?php
require 'connection.php';

$cid=$_POST['pid'];
$actionid=$_POST['actionid'];
$actiontable=$_POST['actiontable'];
$datef=date("d/m/Y");
//echo $pid."<br>";
//echo $actionid;
//echo $actiontable;



$con=mysqli_connect($host,$username,$password,$dbname);

if($con === false)
{
	echo '<script type="text/javascript">';
	echo ' alert("Process error try later")';  //not showing an alert box.
	echo '</script>';
    die("ERROR: Could not connect. " . mysqli_connect_error());
    include 'fees_status';
}
else
{

		if($actionid=="paid")
		{

			$sql = "UPDATE fees SET status='Paid',paid_date='".$datef."' WHERE fee_id=$cid";
			if(mysqli_query($con, $sql)){
    			echo '<script type="text/javascript">';
				echo ' alert("Fee Status update successfully")';  //not showing an alert box.
				echo '</script>';
			} 
			else
			{
    		echo '<script type="text/javascript">';
			echo ' alert("Fee Status update failed")';  //not showing an alert box.
			echo '</script>';
			}


		}
		
	



 
mysqli_close($con);

}




include'manage_fees.php';

?>