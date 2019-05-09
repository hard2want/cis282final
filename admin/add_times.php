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
    // require the add_users_model.php
    require('models/add_times_model.php');
    ?>

    <!-- ensure your tab title matches you page, i.e. Add Products -->
	<title>CIS 282 Final | Add Class Time</title>
</head>

    <body>
 
        <form method="post">  
            <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">
                <?php 
                echo $_SESSION['message']; 
                unset($_SESSION['message']);
                ?>
            </div>
            <?php endif ?>

            <div class="form-group row">
<!--                <label for="inputEmail3" class="col-sm-2 col-form-label">Cohort ID</label>  -->
                <div class="col-sm-10">
                <input type="hidden" name="time_id">
<!--                <input type="text" class="form-control" name='user_id' placeholder="Add Cohort ID">  -->
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Code</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='code' placeholder="Add Class Time Code">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Class Days</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='days' placeholder="Add Class Days">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Start Time</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='start_time' placeholder="Add Class Start Time">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Duration</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='minutes' placeholder="Add Class Duration (in minutes)">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" name="submitForm" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        
        <a href="times.php" class="btn btn-primary">Back To Class Times</a>
        <br>
        <a href="index.html" class="btn btn-primary">Back To Admin Page</a>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>

</html>