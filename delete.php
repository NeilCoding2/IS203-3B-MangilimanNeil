<?php

require('./database.php');
if (isset($_POST['delete'])){
    $deleteID = $_POST['deleteid'];

    $querrydelete = "DELETE FROM record WHERE ID = $deleteID";

    $sqldelete = mysqli_query($connection,$querrydelete);
    
    echo '<script>alert("Successfully deleted!") </script>';
    echo '<script>window.location.href = "/ESSBEE/admin.php" </script>';
}
?>