<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    
    <?php
        require('models/edit_times_model.php');
    ?>



	<title>CIS 282 Final | Edit Class Time</title>
</head>

    <body>

        <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>">
            <?php 
            echo $_SESSION['message']; 
            unset($_SESSION['message']);
            ?>
        </div>
        <?php endif ?>


        <?php

        function pre_r( $array ) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
        ?>

        
        <form action="models/edit_times_model.php" method="POST">
  
        <input type="hidden" name="time_id" value="<?php echo $time_id; ?>">
      
            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Code</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='code' value="<?php echo $code; ?>">
                </div>
            </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Class Days</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='days' value="<?php echo $days; ?>">
                </div>
            </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Start Time</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='start_time' value="<?php echo $start_time; ?>">
                </div>
            </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Minutes</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='minutes' value="<?php echo $minutes; ?>">
                </div>
            </div>

            <div class="form-group row">
            <div class="col-sm-10">
                <?php 
                if ($update == true): 
                ?>
                <button type="submit" class="btn btn-info" name="update">Update</button>
                <?php else: ?>
                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                <?php endif; ?>
            </div>
            </div>
        </form>

        <a href="times.php">Back to Class Times</a>
        <br>
        <a href="index.html">Back to Admin Home</a>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>

</html>