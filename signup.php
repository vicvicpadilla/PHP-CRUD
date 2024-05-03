<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Register Form</title>
</head>
<body>
    <div class="box">
        <div class="form">

        <?php 
        include("php/db_conn.php");
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            //verify unique email

            $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");
            
            if(mysqli_num_rows($verify_query) !=0){
                echo "<div class='message'>
                <p>This Email is Used, Try another one</p>
                </div> <br>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>Back</button>";
            }
            else{

                mysqli_query($con,"INSERT INTO users(Username,Email,Password) VALUES('$username','$email','$password')") or die("Error code");

                echo "<div class='message-2'>
                <p>Register Complete</p>
                </div> <br>";
                echo "<a href='login.php'><button class='btn'>Login Now</button>";
            }
        }else{
      
        ?>


            <h2>Sign Up</h2>
            <form action="" method="post">
            <div class="inputBox">
                <input type="text" name="username" id="username" autocomplete="off" required> 
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="email" name="email" id="email" autocomplete="off" required> 
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" id="password" autocomplete="off" required> 
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">Forgot Password?</a>
                <a href="login.php">Log in</a>
            </div>
           <input type="submit" name="submit" value="Register">
        </div>
        <?php } ?>
    </div>
</body>
</html>
</form>