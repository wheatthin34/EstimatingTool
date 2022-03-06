<?php
$connection = mysqli_connect('localhost', 'root', 'U6dvtx40FrvG', 'estimating');

if (!$connection){
    die("Database Connection Failed" . mysqli_error());
}
?>