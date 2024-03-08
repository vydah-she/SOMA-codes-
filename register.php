<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOMA | Register</title>
    <link rel="stylesheet" href="soma.css">
    <link rel="shortcut icon" href="soma.png">
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="header">
                <h3>DAR ES SALAAM INSTITUTE OF<br>TECHNOLOGY</h3>
                <img src="soma.png">
                <h3>SOMA</h3>
            </div>
            <div class="form-content">
                <form action="data.php" method="post">
                <div class="field">
                <input type="text" placeholder="Name" name="name">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                </div>
                <!---kbox" class="checkbox"><b>Remember Me</b><br><br---->
                <input type="submit" name="submit" value="Sign Up">
                 
            </div>
            <div class="extra">
            <span>Already have an account?</span>
            <a href="#">
                <button>
                    Login
                </button>
            </form>
            </a>
            </div>

        </div>
        <div class="footer">
           <p>&copy;2024 SOMA</p>
        </div>
    </div>
</body>
</html>