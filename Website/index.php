<?php
    include ('shared.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <meta name="keywords" content="keyword">
        <meta name="description" content="About page contaning skills for Matthew Novis.">
        <meta name="Matthew Novis" content="About Matthew Novis Page">
    <title>Lisa's Chicken</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/4981312403.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php echo $header ?>
    <div class="container-fluid"> <!-- HERO COMPONENT -->
        <div class="row">
            <div class="hero-img">
                <div class="hero-txt">
                    <h1>Hot Fresh Juicy</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">  
            <div class="col-lg-6">
                <div class ="home-lists">
                    <div class="col-lg-12">
                    <p><a href="" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">Menu</a></p>
                    <p><a href="" target="https://www.doordash.com/store/lisa's-chicken-arlington-46816/" rel="noopener noreferrer" class="btn btn-secondary">Order Online</a></p>
                    </div>
                </div>
                <div class="featured">
                    <div class="col-lg-12 ">
                        <h2>Time To Dig In</h2>  
                        <p>Our new chicken sandwich is here! Try out the new hot, ready and juicy sandwich now!</p>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="featured">
                    <div class="col-lg-12 ">
                        <h2>Bold Juicy New</h2>  
                    </div>
                    <div class="col-lg-12 ">
                    <img src="img/chicken_sandwich.png" alt="New Chicken Sandwich"/>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <br>
    <?php echo $footer ?>
    <script src="js/app.js"></script>
</body>
</html>