                  
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
                    <div class="container">
                        <a href="index.php" class="btn btn-dark mb-3">Add student</a>
                    <table class = "table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Operations</th>
                </tr>

           <tr>
      <?php
  $con = mysqli_connect("localhost","root","","webapp");
  $sql = "SELECT `ID`,`Name`, `Gender`, `Email` FROM `students`";
  $result = $con -> query($sql);
    if($result -> num_rows > 0)
    {
      while($row = $result-> fetch_assoc())
    {
      $ID = $row["ID"];
      $Name = $row["Name"];
      $Gender = $row["Gender"];
      $Email = $row["Email"];
      
      


?>
<tr>
  <td><?php echo $ID ?></td>
  <td><?php echo $Name ?></td>
  <td><?php echo $Gender ?></td>
  <td><?php echo $Email ?></td>

  <td>
  <a href="update.php?GetID=<?php echo $ID; ?>"><button class="btn btn-warning">Update</button></a>
  <a href="delete.php?GetID=<?php echo $ID; ?>"><button class="btn btn-danger">Delete</button></a>
  </td>
</tr>

<?php
  }
}
else{
  echo "0 result";
}
$con-> close();
?>    
    </tr>
           
            </thead>
</table>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>