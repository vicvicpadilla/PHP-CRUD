<?php
include("php/db_conn.php");
$ID =$_GET["GetID"];
$sql = "DELETE FROM `students` WHERE `ID`= '$ID'";
$result = mysqli_query($con,$sql);


if($result) 
{
	header("location: home.php");
}
else {
	echo 'Please check something';
}
?>