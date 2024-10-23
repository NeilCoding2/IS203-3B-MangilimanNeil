<?php
require('./database.php');
require('./read.php');

// Initialize the search term
$searchTerm = "";

// Check if search is performed
if (isset($_POST['search'])) {
    $searchTerm = mysqli_real_escape_string($connection, $_POST['searchTerm']); // Sanitize input
    // Modify SQL query to include the search term with placeholders to prevent SQL injection
    $sqlAccount = mysqli_query($connection, "SELECT * FROM record WHERE Fname LIKE '%$searchTerm%' OR Mname LIKE '%$searchTerm%' OR Lname LIKE '%$searchTerm%'");
} else {
    // Default query to show all results if no search is performed
    $sqlAccount = mysqli_query($connection, "SELECT * FROM record");
}

// Check if the query was successful
if (!$sqlAccount) {
    die("Error in query: " . mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        <?php include 'admin.css'; ?>
    </style>
</head>
<body>
    <center>
        <h1>Clients Accounts!!</h1>
        <br>
        <!-- Search Form -->
        <form action="" method="post" class="d-flex" style="width: 50%;">
            <input type="text" name="searchTerm" class="form-control" placeholder="Search by name..." value="<?php echo htmlspecialchars($searchTerm); ?>"> <!-- Escape output -->
            <button type="submit" name="search" class="btn btn-primary ms-2">Search</button>
        </form>
        <br>
    </center>
    
    <div class="main">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Fname</th>
                <th>Mname</th>
                <th>Lname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            <?php 
            // Check if there are any results
            if (mysqli_num_rows($sqlAccount) > 0) {
                while ($results = mysqli_fetch_array($sqlAccount)) { ?>
                    <tr>
                        <td><?php echo $results['ID']; ?></td>
                        <td><?php echo $results['Fname']; ?></td>
                        <td><?php echo $results['Mname']; ?></td>
                        <td><?php echo $results['Lname']; ?></td>
                        <td><?php echo $results['Email']; ?></td>
                        <td><?php echo $results['Password']; ?></td>
                        <td>
                            <form action="adminedit.php" method="post" style="display:inline;">
                                <input type="hidden" name="editID" value="<?php echo $results['ID']; ?>">
                                <input type="hidden" name="editF" value="<?php echo $results['Fname']; ?>">
                                <input type="hidden" name="editM" value="<?php echo $results['Mname']; ?>">
                                <input type="hidden" name="editL" value="<?php echo $results['Lname']; ?>">
                                <input type="submit" name="edit" value="EDIT" class="btn btn-primary">
                            </form>

                            <form action="gmail.php" method="post" style="display:inline;">
                                <input type="hidden" name="warnID" value="<?php echo $results['ID']; ?>">
                                <input type="submit" name="warn" value="Warning" class="btn btn-warning">
                            </form>

                            <form action="delete.php" method="post" style="display:inline;">
                                <input type="hidden" name="deleteid" value="<?php echo $results['ID']; ?>">
                                <input type="submit" name="delete" value="Ban" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                <?php } 
            } else {
                echo "<tr><td colspan='7'>No records found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
