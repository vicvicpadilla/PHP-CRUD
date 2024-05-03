<?php 
include("php/db_conn.php");
if(isset($_POST["submit"]))
{
  
  $Name = $_POST["Name"];
  $Gender = $_POST["Gender"];
  $Email = $_POST["Email"];
  
    

   $sql = "INSERT INTO `students` (`Name`, `Gender`, `Email`) 
   VALUES ('$Name','$Gender','$Email')";
   $result = mysqli_query($con , $sql);

    
if($result)
{
   header("refresh:0; home.php");
}
else{
    echo "error";
  }
}
else{
    echo "code not working";
}
?>