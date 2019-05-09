<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    
    <?php
        require('models/edit_assessments_model.php');
    ?>



	<title>CIS 282 Final | Edit Assessment</title>
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


        <form action="models/edit_assessments_model.php" method="POST">
            <input type="hidden" name="assessment_id" value="<?php echo $assessment_id; ?>">

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Assessment Type ID</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='assessment_type_id' value="<?php echo $assessment_type_id; ?>">
                </div>
            </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='description' value="<?php echo $description; ?>">
                </div>
            </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Points</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='points' value="<?php echo $points; ?>">
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

        <a href="assessments.php">Back to Assessments</a>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>

</html>