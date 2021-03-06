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
            require('models/courses_model.php');
        ?>

	    <title>CIS 282 Final | Course List</title>
    </head>

    <body>
        <div class="container main-title">
            <div class="row">
                <div class="col">
                    <h2>Course List</h2>
                    <a href="add_courses.php" class="btn btn-primary">Add Course</a>
                </div> <!-- close class col -->
            </div> <!-- close class row -->
            <p><a href="index.html">Back to Gradebook Admin Page</a></p>
        </div> <!-- close class container main-title -->

        <div class="container-fluid">
            <div class="row text-left">
                <div class="col-1 text-center">Course ID</div>
                <div class="col-1">Department</div>
                <div class="col-1">Course Number</div>
                <div class="col-7">Description</div>
                <div class="col-1"></div>
                <div class="col-1"></div>
            </div> <!-- close class row -->
        </div> <!-- close class container -->
        <?php // var_dump($produtList); ?>
        <div class="container-fluid">
            <div class="row text-left">        
                <?php foreach($courseList as $row) { ?> 	
                    <div class="col-1 text-center"><?php echo $row['course_id']; ?></div>
                    <div class="col-1"><?php echo $row['department']; ?></div>
                    <div class="col-1"><?php echo $row['number']; ?></div>
                    <div class="col-7"><?php echo $row['description']; ?></div>
                    <div class="col-1"><a href="edit_courses.php?edit=<?php echo $row['course_id']; ?>" class="btn btn-info">Edit</a></div>
                    <div class="col-1"><a href="models/edit_courses_model.php?delete=<?php echo $row['course_id']; ?>" class="btn btn-danger">Delete</a></div>
                <?php } ?>
            </div> <!-- close class row -->
        </div> <!-- close class container -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>


</html>