<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    
    <?php
        require('models/edit_users_model.php');
    ?>



	<title>CIS 282 Final | Edit User</title>
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

        <h1>EDIT <?php echo $first_name; ?> <?php echo $last_name;?></h1>
        <form action="models/edit_users_model.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="hash" value="<?php echo $hash; ?>">
            <input type="hidden" name="active" value="<?php echo $active; ?>">
            <input type="hidden" name="password" value="<?php echo $password; ?>">
      
            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Cohort ID</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='cohort_id' value="<?php echo $cohort_id; ?>">
                </div>
            </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='first_name' value="<?php echo $first_name; ?>">
                </div>
            </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='last_name' value="<?php echo $last_name; ?>">
                </div>
            </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email Address</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='email' value="<?php echo $email; ?>">
                </div>
            </div>


            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='phone' value="<?php echo $phone; ?>">
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

        <a href="users.php">Back to Users</a>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>

</html>