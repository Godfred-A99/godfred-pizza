<?php

    include('config/db_connect.php');

    // check GET request id param
    if(isset($_GET['id'])) {

        $id =mysqli_real_escape_string($conn, $_GET['id']);

        // make sql
        $sql = "SELECT * FROM pizzas WHERE id = $id";

        //get the query result 
        $result = mysqli_query($conn, $sql);

        // fetch result in array format
        $pizza = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

    }


?>
<!DOCTYPE html>
<html lang="en">
    <?php include('templetes/header.php');?>

        <div class="container center">
            <?php if($pizza): ?>
                <h4><?php echo htmlspecialchars($pizza['title']);  ?></h4>
                <p>Created by: <?php echo htmlspecialchars($pizza['email']);  ?> </p>
                <p><?php echo htmlspecialchars($pizza['created_at']);  ?></p>
                <h5>Ingredients: </h5>
                <p><?php echo htmlspecialchars($pizza['ingredient']);  ?></p>
            <?php else: ?> 
                <h5>NO SUCH PIZZA EXISTS!</h5>
                
                <?php endif; ?>
        </div>



    <?php include('templetes/footer.php') ?>

</html>