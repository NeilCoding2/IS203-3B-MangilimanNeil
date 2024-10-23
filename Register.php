<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        <?php include 'register.css'; ?>
    </style>
</head>
<body>

<div class="container"> <!-- Flex container for logo and form -->
    <div class="backlogo">
        <img src="image/backlogo.png" alt="Background Logo" width="80%" height="90%">
    </div>
    
    <form class="form" action="create.php" method="POST">
        <div class="card">
            <a class="singup">Sign Up</a>
            <!-- First Name Input -->
            <div class="inputBox">
                <input type="text" name="Fname" required>
                <span class="user">First Name</span>
            </div>
            <br>
            <!-- Middle Name Input -->
            <div class="inputBox">
                <input type="text" name="Mname" required>
                <span class="user">Middle Name</span>
            </div>
            <br>
            <!-- Last Name Input -->
            <div class="inputBox">
                <input type="text" name="Lname" required>
                <span class="user">Last Name</span>
            </div>
            <br>
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
            <br>
            <!-- Submit Button -->
            <button class="enter" type="submit" name="create" value="CREATE">Register</button>
            <div class="links">
                <a href="login.php" class="already">Already have an Account?</a>
            </div>
        </div>
    </form>
</div>

</body>
</html>
