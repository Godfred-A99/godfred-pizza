<?php

    // connect to database
    $conn = mysqli_connect('localhost', 'godfred', '[ymfPMc#@#2aHrN', 'godfred pizza');
    if(!$conn){
        echo 'connection error: ' . mysqli_connect_error();
    }
?>
<!DOCTYPE html>
<html lang="en">

    <?php include('templetes/header.php');?>
    
    <?php include('templetes/footer.php') ?>
</html>