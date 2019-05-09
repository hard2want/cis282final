<?php
    require('includes/config.php');
    require('models/my_account_model.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">


 
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="home.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">      
                <li class="nav-item active">      
                        <a class="nav-link" href="cohort1.php">Cohort 1<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="cohort2.php">Cohort 2<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="cohort3.php">Cohort 3<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="cohort0.php">Administrators<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <!-- in the next class the my-2 means 'm' is for margin, 'y' is for the y of the x/y axis and '2' is spacing from bootstrap -->
                <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit" value="Search">Search</button>
                </form>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-1">
                    <img src="assets/<?php echo $user[0]['id'];?>.jpg" height="32" width="32" alt="<?php echo $user[0]['first_name']; ?> <?php echo $user[0]['last_name']; ?>">
                </div>
                <div class="col-5">
                    <?php     
                    // var_dump($user);    
                    //print_r($product);
                    ?>                
                    <h2>Name: <?php echo $user[0]['first_name']; ?> <?php echo $user[0]['last_name']; ?></h2>
                    <?php        
                        $points = 0;
                        $earned = 0;
                        $grade = 0;
                        // var_dump($assignmentList);        
                        //print_r($product);
                    ?>
                    <?php 
                        // var_dump($assignmentList);
                         foreach($gradeList as $scores){
                        $points += $scores['points'];
                        $earned += $scores['points_earned'];}
                        //print_r($product);
                    ?>                 
                </div>
                <div class="col-1">
                    <h2>Grade: </h2>
                </div>
                <div class="col-5">
                    <h2>
                        <?php $grade = $earned / $points; ?>
                            <?php if ($grade > .9){
                                echo $earned;
                                echo " / ";
                                echo $points;
                                echo " = A";
                            } else if ($grade > .8){
                                echo $earned;
                                echo " / ";
                                echo $points;                            
                                echo " = B";
                            } else if ($grade > .7){
                                echo $earned;
                                echo " / ";
                                echo $points;                            
                                echo " = C";
                            } else if ($grade > .6){
                                echo $earned;
                                echo " / ";
                                echo $points;
                                echo " = D";
                            } else {
                                echo $earned;
                                echo " / ";
                                echo $points;
                                echo " = F";
                            }?>
                    </h2>  <!-- Calculate overall grade and post here -->
                </div>
            </div>

            <h4>Assignments</h4>
            <div class="container-fluid">
                <div class="row cast">
                    <div class="col-1 offset-md-1">#</div>
                    <div class="col-3">Description</div>
                    <div class="col-2">Points</div>
                    <div class="col-2">Score</div> 
                    <div class="col-2">Grade</div>
                </div>
            </div>

            <?php 
                // var_dump($assignmentList);
                foreach($gradeList as $assignment){
                //print_r($product);
    ?>

            <div class="container-fluid">
                <div class="row cast">
                    <div class="col-1 offset-md-1">
                        <?php echo $assignment['assessment_id']; ?>
                    </div>
                    <div class="col-3">
                        <?php echo $assignment['description']; ?>
                    </div>
                    <div class="col-2">
                        <?php echo $assignment['points']; ?>
                    </div>

                    <div class="col-2">
                        <?php echo $assignment['points_earned']; ?> <!--   -->
                    </div> 
                    <div class="col-2">
                        <?php $ratio = $assignment['points_earned'] / $assignment['points']; ?>
                        <?php if ($ratio > .9){
                            echo "A";
                        } else if ($ratio > .8){
                            echo "B";
                        } else if ($ratio > .7){
                            echo "C";
                        } else if ($ratio > .6){
                            echo "D";
                        } else {
                            echo "F";
                        }
                        
                         ?>
                    </div>
                </div>
            </div>
            <?php
            };
    ?>



            <br>
            <a href="home.php">Return to Home</a>

        </div>
            
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>

</html>