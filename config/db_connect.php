<?php

 // connect to database
$conn = mysqli_connect('localhost', 'godfred', '[ymfPMc#@#2aHrN', 'godfred pizza');

// check connection
if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}



?>