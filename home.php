<?php
    require('includes/config.php');
    require('models/home_model.php');
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

        <title>CIS 282 Final | Home</title>
        

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
                <div class="container-fluid">
                    <div class="row text-center">
                        <div class="col-1">Cohort</div>
                        <div class="col-1 text-center">Code</div>
                        <div class="col-1">Year</div>
                        <div class="col-1">Term</div>
                        <div class="col-1">Days</div>
                        <div class="col-1">Class Time</div>
                        <div class="col-1">Duration</div>
                        <div class="col-1"># Students</div>
                        <div class="col-1"></div>
                        <div class="col-3"></div>
                    </div> <!-- close class row -->
                </div> <!-- close class container -->
                <?php // var_dump($produtList); ?>
                <div class="container-fluid">
                    <div class="row text-center">        
                        <?php foreach($classData as $row) {  ?> 	
                            <div class="col-1">
                                <a href="cohort<?php echo $row['cohort_id']?>.php?id=<?php echo $row['cohort_id']?> ">
                                <?php echo $row['cohort_id']?> 
                                </a> 
                            </div>
                            <div class="col-1">
                                <a href="cohort<?php echo $row['cohort_id']?>.php?id=<?php echo $row['cohort_id']?> ">
                                <?php echo $row['code']?> 
                                </a> 
                            </div>
                            <div class="col-1">
                                <?php echo $row['year']?> 
                            </div>
                            <div class="col-1">
                                <?php echo $row['semester']?> 
                            </div>
                            <div class="col-1">
                                <?php echo $row['days']?> 
                            </div>
                            <div class="col-1">
                                <?php echo $row['start_time']?> 
                            </div>
                            <div class="col-1">
                                <?php echo $row['minutes']?> 
                            </div>
                            <div class="col-1">
                                <a href="cohort<?php echo $row['cohort_id']?>.php?id=<?php echo $row['cohort_id']?> ">
                                <?php echo $row['numOfStudents']?>
                                </a> 
                            </div>
                            <div class="col-1"> 
                            </div>
                            <div class="col-3">
                            </div>
                            <br><br>
                        <?php }  ?>
                    </div> <!-- close class row text-left -->
                </div> <!-- close class container-fluid -->
            </div> <!-- close class row -->
        </div> <!-- close class container -->
            
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>

</html>