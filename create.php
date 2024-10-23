<?php 

require("./database.php");

if (isset($_POST['create'])){
    $Fname = $_POST['Fname'];
    $Mname = $_POST['Mname'];
    $Lname = $_POST['Lname'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $profile = $_post['profilepic'];

    $querryCreate = "INSERT INTO record VALUES (null, '$Fname', '$Mname', '$Lname', '$Email', '$Password', '$profile')";    

    $sqlCreate = mysqli_query($connection,$querryCreate);
    
    echo '<script>alert("Successfully Created!") </script>';
    echo '<script>window.location.href = "/ESSBEE/login.php" </script>';
}
?>