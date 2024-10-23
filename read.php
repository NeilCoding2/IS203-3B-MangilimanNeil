<?php

require('./database.php');

$querryAccount = "SELECT * FROM record";
$sqlAccount = mysqli_query($connection,$querryAccount);

?>