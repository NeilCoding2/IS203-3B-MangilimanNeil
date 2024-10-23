<?php

require('./database.php');

// Fetch data to edit when the form is submitted with the 'edit' button
if (isset($_POST['edit'])) {
    $editID = $_POST['editID'];
    $editF = $_POST['editF'];
    $editM = $_POST['editM'];
    $editL = $_POST['editL'];
} else {
    // Initialize the variables to avoid undefined errors
    $editID = $editF = $editM = $editL = "";
}

// Handle the update process when 'update' button is clicked
if (isset($_POST['update'])) {
    $updateID = $_POST['updateID'];
    $updateF = $_POST['updateF'];
    $updateM = $_POST['updateM'];
    $updateL = $_POST['updateL'];

    // Perform the update query
    $queryupdate = "UPDATE record SET Fname = '$updateF', Mname = '$updateM', Lname = '$updateL' WHERE ID = $updateID";
    $slqupdate = mysqli_query($connection, $queryupdate);

    // Alert the user and redirect back to index
    echo '<script>alert("Successfully EDITED!")</script>';
    echo '<script>window.location.href = "/ESSBEE/admin.php"</script>';
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
    <link rel="stylesheet" href="test.css"> <!-- Fixed 'stylesheets' to 'stylesheet' -->
</head>
<body>
<center>
    <h1>EDIT</h1>
    <br>
    <form action="" method="post"> <!-- Kept action empty to submit to the same page -->
        <h3>EDIT USER INFO</h3>
        
        <!-- First Name Input -->
        <input type="text" name="updateF" placeholder="Edit your First name" class="form-control" 
               value="<?php echo htmlspecialchars($editF); ?>" required />
        <br><br>
        
        <!-- Middle Name Input -->
        <input type="text" name="updateM" placeholder="Edit your Middle name" class="form-control" 
               value="<?php echo htmlspecialchars($editM); ?>" required />
        <br><br>
        
        <!-- Last Name Input -->
        <input type="text" name="updateL" placeholder="Edit your Last Name" class="form-control" 
               value="<?php echo htmlspecialchars($editL); ?>" required />
        <br><br>

        <!-- Submit Button -->
        <input type="submit" name="update" value="EDIT" class="btn btn-primary" />
        
        <!-- Hidden ID Field -->
        <input type="hidden" name="updateID" value="<?php echo htmlspecialchars($editID); ?>" />
        <br><br>
    </form>
</center>
</body>
</html>
