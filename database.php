<?php


$host = 'localhost';
$user = 'root';
$password = '';
$database = 'account';


$connection = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_error()){ 

    echo "Error: Unable to connect to MySQL <br>";
    echo "Message: ".mysqli_connect_error()."<br>";
}

//Check if the database is connected
//else {
    //echo "successfully Connected to your DATABASED";
//}

?>