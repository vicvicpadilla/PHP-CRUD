<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Form</title>
</head>
<body>
    <div class="box">
        <div class="form">
        <?php 
        
            include("php/db_conn.php");
            if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);


                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ")or die("Select ERROR");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['id'] = $row['ID'];
                }else{
                    echo "<div class='message'>
                    <p>Wrong Password or Username Please Try Again</p>
                    </div> <br>";
                    echo "<a href='login.php'><button class='btn'>Back</button>";
                }
                if(isset($_SESSION['valid'])){
                    header("Location: home.php");
                }
            }else{
        
        
        
        
        
        ?>






            <h2>Log In</h2>
            <form action="" method="post">
            <div class="inputBox">
                <input type="text" name="email" id="email" required> 
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" id="password" required> 
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">Forgot Password?</a>
                <a href="signup.php">Sign Up</a>
            </div>
           <input type="submit" name="submit" value="Login">
        </div>
        <?php } ?>
    </div>
</body>
</html>
</form>