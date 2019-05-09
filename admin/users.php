<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/styles.css">
       
        <?php
            require('includes/config.php');
            require('models/users_model.php');
        ?>

	    <title>CIS 282 Final | User List</title>
    </head>

    <body>
        <div class="container main-title">
            <div class="row">
                <div class="col">
                    <h2>User List</h2>
                    <a href="add_users.php" class="btn btn-primary">Add User</a>
                </div> <!-- close class col -->
            </div> <!-- close class row -->
            <p><a href="index.html">Back to Gradebook Admin Page</a></p>
        </div> <!-- close class container main-title -->

        <div class="container-fluid">
            <div class="row text-left">
                <div class="col-1"></div>
                <div class="col-1 text-center">Cohort</div>
                <div class="col-2">First Name</div>
                <div class="col-2">Last Name</div>
                <div class="col-3">Email</div>
                <div class="col-1">Phone</div>
                <div class="col-1"></div>
                <div class="col-1"></div>
            </div> <!-- close class row -->
        </div> <!-- close class container -->
        <?php // var_dump($produtList); ?>
        <div class="container-fluid">
            <div class="row text-left">        
                <?php foreach($userList as $row) { ?> 	
                    <div class="col-1"></div>
                    <div class="col-1 text-center"><?php echo $row['cohort_id']; ?></div>
                    <div class="col-2"><?php echo $row['first_name']; ?></div>
                    <div class="col-2"><?php echo $row['last_name']; ?></div>
                    <div class="col-3"><?php echo $row['email']; ?></div>
                    <div class="col-1"><?php echo $row['phone']; ?></div>
                    <div class="col-1"><a href="edit_users.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a></div>
                    <div class="col-1"><a href="models/edit_users_model.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></div>
                <?php } ?>
            </div> <!-- close class row -->
        </div> <!-- close class container -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>


</html>