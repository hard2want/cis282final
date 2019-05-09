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
            require('models/terms_model.php');
        ?>

	    <title>CIS 282 Final | Terms List</title>
    </head>

    <body>
        <div class="container main-title">
            <div class="row">
                <div class="col">
                    <h2>Course List</h2>
                    <a href="add_terms.php" class="btn btn-primary">Add Term</a>
                </div> <!-- close class col -->
            </div> <!-- close class row -->
            <p><a href="index.html">Back to Gradebook Admin Page</a></p>
        </div> <!-- close class container main-title -->

        <div class="container-fluid">
            <div class="row text-left">
                <div class="col-1 text-center">Term ID</div>
                <div class="col-1">Year</div>
                <div class="col-1">Semester</div>
                <div class="col-7"></div>
                <div class="col-1"></div>
                <div class="col-1"></div>
            </div> <!-- close class row -->
        </div> <!-- close class container -->
        <?php // var_dump($produtList); ?>
        <div class="container-fluid">
            <div class="row text-left">        
                <?php foreach($termList as $row) { ?> 	
                    <div class="col-1 text-center"><?php echo $row['term_id']; ?></div>
                    <div class="col-1"><?php echo $row['year']; ?></div>
                    <div class="col-1"><?php echo $row['semester']; ?></div>
                    <div class="col-7"><?php ?></div>
                    <div class="col-1"><a href="edit_terms.php?edit=<?php echo $row['term_id']; ?>" class="btn btn-info">Edit</a></div>
                    <div class="col-1"><a href="models/edit_terms_model.php?delete=<?php echo $row['term_id']; ?>" class="btn btn-danger">Delete</a></div>
                <?php } ?>
            </div> <!-- close class row -->
        </div> <!-- close class container -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>


</html>