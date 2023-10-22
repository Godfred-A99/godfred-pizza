<?php

    // connect to database
    $conn = mysqli_connect('localhost', 'godfred', '[ymfPMc#@#2aHrN', 'godfred pizza');
    if(!$conn){
        echo 'connection error: ' . mysqli_connect_error();
    }

    //write query from all pizza
    $sql = 'SELECT title, ingredient, id FROM pizzas ORDER BY created_at';

    // make query & get result 
    $result = mysqli_query($conn, $sql);

    //fetching the result rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //freeing result from memory 
    mysqli_free_result($result);

    //closing connection  
    mysqli_close($conn);

    // explode(',', $pizzas[0]['ingredient']);

    
?>
<!DOCTYPE html>
<html lang="en">

    <?php include('templetes/header.php');?>

    <h4 class="center grey-text">Pizzas!</h4>
    <div class="container">
        <div class="row">
            <?php foreach($pizzas as $pizza) {?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                            <ul>
                            <?php foreach(explode(',', $pizza['ingredient']) as $ing) {?>
                                <li><?php echo htmlspecialchars($ing)?></li>
                            <?php }?>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a href="#" class="brand-text">more info</a>
                        </div>
                    </div>
                </div>

            <?php }?>
        </div>
    </div>

    
    <?php include('templetes/footer.php') ?>
</html>