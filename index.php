                 
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
                        <h3>Add new student</h3>
                    <form action="insert.php" method="post">
                    <input type="text" name="Name" placeholder="Enter your Name"  required>
                    <br>
                    <input type="radio" name="Gender" value="Male">Male
                    <input type="radio" name="Gender" value="Female">Female
                    <br>
                    <input type="email" name="Email" placeholder="input your Email" required>
                    <br><br>
                    <button name="submit" class="btn btn-success">Save</button>
                    <a href="home.php" class="btn btn-danger">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>