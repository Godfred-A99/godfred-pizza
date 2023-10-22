<?php

    // connect to database
    $conn = mysqli_connect('localhost', 'godfred', '[ymfPMc#@#2aHrN', 'godfred pizza');
    if(!$conn){
        echo 'connection error: ' . mysqli_connect_error();
    }

    //write query from all pizza
    $sql = 'SELECT title, ingredient, id FROM pizzas';

    // make query & get result 
    $result = mysqli_query($conn, $sql);

    //fetching the result rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

    <?php include('templetes/header.php');?>
    
    <?php include('templetes/footer.php') ?>
</html>