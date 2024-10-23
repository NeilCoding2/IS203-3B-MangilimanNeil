<?php
require('./database.php');

// Initialize variable
$editE = "";

// Handle the update process when 'update' is clicked
if (isset($_POST['update'])) {
    $updateE = trim($_POST['updateE']);
    $updateP = $_POST['updateP']; // New password

    // Check if the provided email exists in the database
    $stmt = $connection->prepare("SELECT * FROM record WHERE Email = ?");
    $stmt->bind_param("s", $updateE);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email exists, proceed with the update
        $queryupdate = "UPDATE record SET Password = ? WHERE Email = ?";
        $stmtUpdate = $connection->prepare($queryupdate);
        $stmtUpdate->bind_param("ss", $updateP, $updateE);

        if ($stmtUpdate->execute()) {
            echo '<script>alert("Password successfully updated!")</script>';
            echo '<script>window.location.href = "login.php"</script>';
        } else {
            echo '<script>alert("Error updating password!")</script>';
        }
    } else {
        // Email does not exist
        echo '<script>alert("Email not found in the database!")</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="forgot.css">
</head>
<body>
<div class="container">
    <div class="backlogo">
        <img src="image/backlogo.png" alt="Background Logo" width="90%" height="90%">
    </div>

    <form action="" method="post" class="form">
        <div class="card">
            <h3>Forgot Password</h3>
            
            <!-- Email Input -->
            <div class="inputBox">
                <input type="email" name="updateE" class="input" 
                       value="<?php echo htmlspecialchars($editE); ?>" required />
                <span class="user">Email</span>
            </div>
            <br><br>

            <!-- New Password Input -->
            <div class="inputBox">
                <input type="password" name="updateP" class="input" required />
                <span>New Password</span>
            </div>
            <br><br>

            <!-- Submit Button -->
            <input type="submit" name="update" value="Update Password" class="enter" />
            <a href="login.php">Cancel?</a>
        </div>
    </form>
</div>
</body>
</html>
