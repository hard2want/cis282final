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
            require('models/user_assessments_model.php');
        ?>

	    <title>CIS 282 Final | User Assessments List</title>
    </head>

    <body>
        <div class="container main-title">
            <div class="row">
                <div class="col">
                    <h2>User List</h2>
                    <a href="add_user_assessments.php" class="btn btn-primary">Add User Assessment</a>
                </div> <!-- close class col -->
            </div> <!-- close class row -->
            <p><a href="index.html">Back to Gradebook Admin Page</a></p>
        </div> <!-- close class container main-title -->

        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-2"></div>
                <div class="col-2">User ID</div>
                <div class="col-2">Assessment ID</div>
                <div class="col-2">Points Earned</div>
                <div class="col-2"></div>
                <div class="col-2"></div>
            </div> <!-- close class row -->
        </div> <!-- close class container -->
        <?php // var_dump($produtList); ?>
        <div class="container-fluid">
            <div class="row text-center">        
                <?php foreach($student_assessment_list as $row) { ?> 	
                    <div class="col-2"></div>
                    <div class="col-2"><?php echo $row['user_id']; ?></div>
                    <div class="col-2"><?php echo $row['assessment_id']; ?></div>
                    <div class="col-2"><?php echo $row['points_earned']; ?></div>
                    <div class="col-2"><a href="edit_user_assessments.php?edit=<?php echo $row['student_assessment_id']; ?>" class="btn btn-info">Edit</a></div>
                    <div class="col-2"><a href="models/edit_user_assessments_model.php?delete=<?php echo $row['student_assessment_id']; ?>" class="btn btn-danger">Delete</a></div>
                <?php } ?>
            </div> <!-- close class row -->
        </div> <!-- close class container -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>


</html>