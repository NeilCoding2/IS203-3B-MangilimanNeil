<?php
require('./database.php');

// Initialize variables
$editID = $editF = $editM = $editL = $editE = "";
$emailExists = false; // Variable to track if email exists

// Check if the email exists and fetch user info
if (isset($_POST['checkEmail'])) {
    $editE = trim($_POST['editE']);
    
    // Use prepared statements to prevent SQL injection
    $stmt = $connection->prepare("SELECT * FROM record WHERE Email = ?");
    $stmt->bind_param("s", $editE);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email exists, fetch user data
        $user = $result->fetch_assoc();
        $editID = $user['ID'];
        $editF = $user['Fname'];
        $editM = $user['Mname'];
        $editL = $user['Lname'];
        $emailExists = true; // Set emailExists to true
    } else {
        // Email does not exist
        echo '<script>alert("Email not found in the database!")</script>';
    }
}

// Handle the update process when 'update' is clicked
if (isset($_POST['update'])) {
    $updateID = $_POST['updateID'];
    $updateF = $_POST['updateF'];
    $updateM = $_POST['updateM'];
    $updateL = $_POST['updateL'];

    // Use prepared statements to prevent SQL injection
    $stmt = $connection->prepare("UPDATE record SET Fname = ?, Mname = ?, Lname = ? WHERE ID = ?");
    $stmt->bind_param("sssi", $updateF, $updateM, $updateL, $updateID);
    
    if ($stmt->execute()) {
        echo '<script>alert("Successfully EDITED!")</script>';
        echo '<script>window.location.href = "/essbee/index2.php"</script>';
    } else {
        echo '<script>alert("Error updating record!")</script>';
    }
    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="test.css">
    <style>
        body {
            background-color: cadetblue;
        }
        .button {
            border: none;
            width: 10em;
            height: 2em;
            border-radius: 3em;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
            background: white;
            cursor: pointer;
            transition: all 450ms ease-in-out;
        }
        .button:hover {
            background: linear-gradient(0deg, #AAAAAA, #1C1A1C);
            box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.4),
            inset 0px -4px 0px 0px rgba(0, 0, 0, 0.2),
            0px 0px 0px 4px rgba(255, 255, 255, 0.2),
            0px 0px 180px 0px #AAAAAA;
            transform: translateY(-2px);
        }
        .input {
            border: 2px solid transparent;
            width: 15em;
            height: 2.5em;
            padding-left: 0.8em;
            outline: none;
            background-color: #F3F3F3;
            border-radius: 10px;
            transition: all 0.5s;
        }
        .input:hover,
        .input:focus {
            border: 2px solid #4A9DEC;
            box-shadow: 0px 0px 0px 7px rgba(74, 157, 236, 0.2);
            background-color: white;
        }
        .notification {
            color: green;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <center>
        <h1>EDIT USER INFO</h1>
        <br>
        <form action="" method="post">
            <h3>CHECK EMAIL</h3>
            <input type="email" name="editE" placeholder="Enter your email" class="input" required />
            <br><br>
            <input type="submit" name="checkEmail" value="CHECK EMAIL" class="button" />
            <br><br>
        </form>

        <?php if ($emailExists): ?>
            <div class="notification">Email found! You can now edit your information below.</div>
        <?php endif; ?>

        <form action="" method="post">
            <h3>EDIT USER INFO</h3>
            <input type="text" name="updateF" placeholder="EDIT your First name" class="input" value="<?php echo htmlspecialchars($editF); ?>" required />
            <br><br>
            <input type="text" name="updateM" placeholder="EDIT your Middle name" class="input" value="<?php echo htmlspecialchars($editM); ?>" required />
            <br><br>
            <input type="text" name="updateL" placeholder="EDIT your Last Name" class="input" value="<?php echo htmlspecialchars($editL); ?>" required />
            <br><br>
            <input type="submit" name="update" value="EDIT" class="button" />
            <input type="hidden" name="updateID" value="<?php echo htmlspecialchars($editID); ?>" />
            <br><br>
        </form>
    </center>
</body>
</html>
