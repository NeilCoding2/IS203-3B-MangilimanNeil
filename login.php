<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        <?php include 'login.css'; ?>
    </style>
</head>
<body>
<div class="container"> <!-- Flex container for logo and form -->
    <div class="backlogo">
        <img src="image/backlogo.png" alt="Background Logo" width="90%" height="90%">
    </div>
    
    <form class="form" action="loging.php" method="POST">
        <div class="card">
            <a class="singup">Login</a>
            <!-- Email Input -->
            <div class="inputBox">
                <input type="email" name="Email" required>
                <span class="user">Email</span>
            </div>
            <br>
            <!-- Password Input -->
            <div class="inputBox">
                <input type="password" name="Password" required>
                <span>Password</span>
            </div>
            <!-- Submit Button -->
            <button class="enter" type="submit" name="login">Enter</button>
            <center>
            <div class="links">
                <a href="register.php">Don't have an Account?</a>
                <br>
                <a href="edit.php">Forgot Password?</a>

            </div>
            </center>
        </div>
    </form>
</div>
</body>
</html>
