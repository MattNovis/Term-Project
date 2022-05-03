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
            <div class="hero-img" id="storefront">
                <div class="hero-txt" id="storetext">
                    <h1>Find a store near you</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
           <a id="hvr" href="https://www.google.com/maps/search/lisa's+chicken/@32.7462272,-97.2094833,11z" target="_blank"><img src="img/Map.jpg" alt="Lisas Chicken Map Locations"></a>
        </div> 
    </div>
    <br>
    <?php echo $footer ?>
    <script src="js/app.js"></script>
</body>
</html>