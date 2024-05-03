<?php
include("php/db_conn.php");
$ID = $_GET["GetID"];
$sql = "SELECT * FROM `students` WHERE `ID` = '".$ID."'";
$result = mysqli_query($con,$sql);

while ($row = $result-> fetch_assoc()) 
{
     
    $Name = $row["Name"];
    $Gender = $row["Gender"];
    $Email = $row["Email"];
  

}



?>      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div class="nav">
        <div class="surname">
            <p>Padilla</p>
        </div>
        <div class="links">
            <a href="logout.php"><button class="btn btn-danger">Log Out</button></a>
        </div>
    </div>
    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <h3>Hello Welcome Back</h3>
                    <br>
                    <div class="container">
                        <div class="text-center mb-6">
                            <h3>Update Student Information</h3>
                       </div>
                    <form method="post">
                    <input type="text" name="Name" placeholder="Enter your Name"  required>
                    <br>
                    <input type="radio" name="Gender" value="Male">Male
                    <input type="radio" name="Gender" value="Female">Female
                    <br>
                    <input type="Email" name="Email" placeholder="enter your email" required>
                    <br><br>
                    <button class="btn btn-success" name="update">Save</button>
                    <a href="home.php" class="btn btn-danger">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

if(isset($_POST['update']))
{
      
      $Name = $_POST["Name"];
      $Gender = $_POST["Gender"];
      $Email = $_POST["Email"];
   
      $sql = "UPDATE `students` SET `Name`='$Name',`Gender`=' $Gender',`Email`='$Email' WHERE `ID`= '$ID'";
      $resutlt = mysqli_query($con,$sql);



      if($result)
      {
      	header("refresh:0; home.php");
      }
      else {
      	echo 'please check';
      }
}



?>
