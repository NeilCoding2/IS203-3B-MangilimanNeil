<?php
require("./database.php");

if (isset($_POST['login'])) {
    // Get the submitted email and password from the form
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // Prepare SQL statement to prevent SQL injection
    $sqllogin = "SELECT * FROM record WHERE Email = ? AND Password = ?";
    $stmt = mysqli_prepare($connection, $sqllogin);

    // Bind the parameters to the SQL query
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Get the result of the query
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    // Check if a matching record is found
    if ($count == 1) {
        // Successful login
        echo '<script>
            window.location.href = "index2.php";
            alert("Login Successfully!!");
        </script>';
    } else {
        // Failed login
        echo '<script>
            window.location.href = "login.php";
            alert("Login failed. Invalid username or password!!");
        </script>';
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($connection);
?>
