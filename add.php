<?php

    if(isset($_GET['submit'])) {
        // echo htmlspecialchars($_GET['email']);
        // echo htmlspecialchars($_GET['title']);
        // echo htmlspecialchars($_GET['ingredient']);
        // check email
        if(empty($_GET['email'])){
            echo 'An email is required </br>';
        }else{
            echo htmlspecialchars($_GET['email']);
        }

        // check title
        if(empty($_GET['title'])){
            echo 'An title is required </br>';
        }else{
            echo htmlspecialchars($_GET['title']);
        }

        // check ingredient
        if(empty($_GET['ingredient'])){
            echo 'At least one ingredient is required  </br>';
        }else{
            echo htmlspecialchars($_GET['ingredient']);
        }
    };



?>
<!DOCTYPE html>
<html lang="en">

    <?php include('templetes/header.php');?>
    <section class="container grey-text">
        <h4 class="center">Add Pizza</h4>
        <form action="add.php" method="GET" class="white">
            <label>Your Email:</label>
            <input type="text" name="email">
            <label>Pizza title:</label>
            <input type="text" name="title">
            <label>Ingredients (comma separated) </label>
            <input type="text" name="ingredient">
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
    <?php include('templetes/footer.php') ?>
</html>