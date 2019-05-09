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
            require('models/times_model.php');
        ?>

	    <title>CIS 282 Final | Time List</title>
    </head>

    <body>
        <div class="container main-title">
            <div class="row">
                <div class="col">
                    <h2>Course List</h2>
                    <a href="add_times.php" class="btn btn-primary">Add Class Time</a>
                </div> <!-- close class col -->
            </div> <!-- close class row -->
            <p><a href="index.html">Back to Gradebook Admin Page</a></p>
        </div> <!-- close class container main-title -->

        <div class="container-fluid">
            <div class="row text-left">
                <div class="col-1 text-center">Time ID</div>
                <div class="col-1">Code</div>
                <div class="col-1">Day</div>
                <div class="col-1">Start Time</div>
                <div class="col-3">Minutes</div>
                <div class="col-2"></div>
                <div class="col-1"></div>                
                <div class="col-2"></div>
            </div> <!-- close class row -->
        </div> <!-- close class container -->
        <?php // var_dump($produtList); ?>
        <div class="container-fluid">
            <div class="row text-left">        
                <?php foreach($timeList as $row) { ?> 	
                    <div class="col-1 text-center"><?php echo $row['term_id']; ?></div>
                    <div class="col-1"><?php echo $row['code']; ?></div>
                    <div class="col-1"><?php echo $row['days']; ?></div>
                    <div class="col-1"><?php echo $row['start_time']; ?></div>
                    <div class="col-3"><?php echo $row['minutes']; ?></div>
                    <div class="col-2"><a href="edit_times.php?edit=<?php echo $row['time_id']; ?>" class="btn btn-info">Edit</a></div>
                    <div class="col-1"></div>
                    <div class="col-2"><a href="models/edit_times_model.php?delete=<?php echo $row['time_id']; ?>" class="btn btn-danger">Delete</a></div>
                <?php } ?>
            </div> <!-- close class row -->
        </div> <!-- close class container -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>


</html>