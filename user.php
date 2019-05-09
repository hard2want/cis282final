<?php
    require('includes/config.php');
    require('models/user_model.php');
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

        <?php        
            if ($result):
                if(mysqli_num_rows($result)>0):
                    while($user = mysqli_fetch_assoc($result)):
                    //print_r($product);
        ?>
        <title>CIS 282 Final | <?php echo $user['first_name', 'last_name']; ?></title>  <!-- Note: This may not work so try two echos -->
        

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">      
                    <a class="nav-link" href="guitar.php">Guitars <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="bass.php">Bass <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="drum.php">Drums <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                </li>
            <!--      <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
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
                <div class="col-12">
                    <h2><?php echo $user['first_name', 'last_name']; ?></h2>  <!-- Note: This may not work so try two echos -->
                </div>
            </div>
            
            <div class="row">

                    <div class="col-5">
                        <br>
                        <?php $productPicName = str_replace(" ", "_", $product['product_code']); ?>
                        <img src="img/<?php echo $product['product_code']; ?>_l.jpg" class="img-fluid" />   
                        <form method="post" action="cart.php?action=add&id=<?php echo $product['product_id']; ?>">
                        <br>
                        <input type="text" name="quantity" class="form-control" value="1" />
                        <input type="hidden" name="name" value="<?php echo $product['product_name']; ?>" />
                        <input type="hidden" name="price" value="<?php echo $product['list_price']; ?>" />
                        <br>
                        <input type="submit" name="add_to_cart" class="btn btn-info cart-submit" value="Add to Cart" />
                        <br>          
                    </form>
                
                    </div>

                    <div class="col-7">
                        <?php echo $product['description']; ?>
                        <h4 class="price">$<?php echo $product['list_price']; ?></h4>
                    </div>

            </div>
            <br>
            <a href="index.php">Continue Shopping</a>
            <?php
                        endwhile;
                    endif;
                endif;    
            ?>
        </div>
            
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>

</html>