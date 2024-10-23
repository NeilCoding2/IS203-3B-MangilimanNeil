<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
        <?php include 'style.css'; ?>
    </style>
    <script>
        <?php include 'index.js'; ?>
    </script>
</head>
<body>

<header>
    <p class="sched">Phone no #09216718868, all branch Open 9AM to 8PM!</p>
    <div class="topnav">
        <div class="logo">
            <img src="image/Logo.png" alt="Logo">
        </div>
        <div class="nav-links">
    <a href="index.php">Home</a>
    <a class="tablinks" href="#gallery">Designs & Services</a>
    <a class="tablinks" href="#about">About</a>
    <a class="tablinks" href="adminlogin.php">Admin</a>
</div> 
    </div>
</header>

<main>
    <div class="full">
        <h1>Let's show that beauty to the world!</h1>
        <h3>Explore the world with your new looks!</h3>
        <button class="button1" onclick="window.location.href='Register.php'" id="buttonstart">Start!</button>    
        
    </div>
</main>

<div class="gallery" id="gallery">
    <center>
    <h1>Designs & Services</h1>
    <p>The Essbee Aesthetic Center is very good in meeting the expectation of the clients</p>
    <p>Beauty is hiding in you. Let's show it to the world!</p>
    </center>
    <div class="grid-container">
        <div class="box1">
            <img src="image/hair.png" alt="Image 1" width="30%" height="25%">
        </div>
        <div class="box2">
            <img src="image/nailss.jpg" alt="Image 2" width="55%" height="30%">
        </div>
        <div class="box3">
            <img src="image/foot.jpg" alt="Image 3" width="20%" height="20%">
        </div>
        <div class="box4">
            <img src="image/face5.jpg" alt="Image 3" width="25%" height="20%">
        </div>
        <div class="box5">
            <img src="image/malehair.jpg" alt="Image 3" width="30%" height="20%">
        </div>
        <br>
        <br>
        <br>
        <div class="backlogo">
        <img src="image/backlogo.png" rel="background logo" width="30%" height="80%">
        </div>
        <hr>
    </div>
</div>
<div class="about" id="about">
    <center>
    <h1 class="abouts">Employees</h1>
    </center>
    <br>
<div class="card-container">
<div class="card">
  <img src="image/neil.jpg" alt="John" style="width:100%">
  <h1>Dr. Neil Tristan P. Mangiliman</h1>
  <p class="title">CEO & Founder</p>
  <p>Santa Rita College</p>
  <p><button class="buttoncontact">Contact</button></p>
</div>

<div class="card">
  <img src="image/sam.jpg" alt="John" style="width:100%">
  <h1>Dr. John Louise C. Semsem</h1>
  <p class="title">Masahero ng bayan</p>
  <p>Santa Rita College</p>
  <p><button class="buttoncontact">Contact</button></p>
</div>

<div class="card">
  <img src="image/tricia.jpg" alt="John" style="width:100%">
  <h1>Dr.Tricia Ann M. Nepomuceno</h1>
  <p class="title">Mega Phone ng Bayan</p>
  <p>Santa Rita College</p>
  <p><button class="buttoncontact">Contact</button></p>
</div>
</div>
<hr>
</div>
</div>
<center>
<div class="login">
    <br>
    <h1 class="logintext">Login & Explore!</h1>
    <br>
<form class="form" action="loging.php" method="POST">
        <div class="container">
        
            <div class="card1">
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
<div class="links">
    <a href="register.php">Don't have an Account?</a>
    <br>
    <a href="edit.php">Forgot Password?</a>
</div>
            </div>
        </div>
    </form>
    </div>
    </center>
    
    
<footer>
    <div class="footer-container">
        <div class="footerlinks">
            <a class="tablinks" onclick="openCity(event, 'home')">Home</a>
            <a class="tablinks" onclick="openCity(event, 'Paris')">Designs</a>
            <a class="tablinks" onclick="openCity(event, 'Tokyo')">Services</a>
            <a class="tablinks" onclick="openCity(event, 'Philippines')">Shop</a>
        </div>

        <div class="footerinfo">
            <a class="tablinks" onclick="openCity(event, 'home')">About</a>
            <a class="tablinks" onclick="openCity(event, 'Paris')">Contact</a>
            <a class="tablinks" onclick="openCity(event, 'Tokyo')">Privacy & Terms</a>
            <a class="tablinks" onclick="openCity(event, 'Philippines')">FAQs</a>
        </div>
    </div>

    <div class="footer-bottom">
        <h3>Programmed by: Neil Tristan P. Mangiliman</h3>
        <p>&copy; 2024 Your Company. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>
