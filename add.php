<?php
    $errors = [
        'email' => '',
        'title' => '',
        'ingredient' => ''
    ];

    $title = $email = $ingredient = '';



    if(isset($_GET['submit'])) {
        
        // check email
        if(empty($_GET['email'])){
            $errors['email'] = 'An email is required </br>';
        }else{
            $email = htmlspecialchars($_GET['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'email must be a valid email address';
            }
        }

        // check title
        if(empty($_GET['title'])){
            $errors['title'] = 'An title is required </br>';
        }else{
            $title = htmlspecialchars($_GET['title']);
            if(!preg_match('/^[a-zA-Z\s]+$/' , $title)) {
                $errors['title'] = 'Title must be  letters and spaces only';
            }
        }

        // check ingredient
        if(empty($_GET['ingredient'])){
            $errors['ingredient'] = 'At least one ingredient is required  </br>';
        }else{
            $ingredient = htmlspecialchars($_GET['ingredient']);
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/' , $ingredient)) {
                $errors['ingredient'] = 'Ingredient must be a comma separated list';
            }
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
            <input type="text" name="email" value="<?php echo $email?>">
            <div class="red-text"><?php echo $errors['email'];    ?></div>
            <label>Pizza title:</label>
            <input type="text" name="title" value="<?php echo $title?>">
            <div class="red-text"><?php echo $errors['title'];    ?></div>
            <label>Ingredients (comma separated) </label>
            <input type="text" name="ingredient" value="<?php echo $ingredient?>">
            <div class="red-text"><?php echo $errors['ingredient'];    ?></div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
    <?php include('templetes/footer.php') ?>
</html>