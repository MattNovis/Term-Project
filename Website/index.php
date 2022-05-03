<?php
    include ('shared.php');
    $h = date('G');

if ($h >= 11 && $h < 17) $img = 'img/chicken_sandwich.png';
    else if ( ($h >= 17 && $h <= 23) || ($h >= 1 && $h < 5) ) $img = 'img/tenders-combo.jpg';
    else $img = 'img/chicken_sandwich.png';

if ($h >= 11 && $h < 17) {
        $message = "Our new chicken sandwich is here! Try out the new hot, ready and juicy sandwich now!";
}   else if ( ($h >= 17 && $h <= 23) || ($h >= 1 && $h < 5) ) {
        $message = "Get our 3 piece chicken combo at 20% off during dinner hours (5pm-11pm)!";

}   else $message = "Our new chicken sandwich is here! Try out the new hot, ready and juicy sandwich now!";

if ($h >= 11 && $h < 17) {
        $promo = "Bold Juicy New";
}   else if ( ($h >= 17 && $h <= 23) || ($h >= 1 && $h < 5) ) {
        $promo = "Our Classic";

}   else $promo = "Bold Juicy New";
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <meta name="keywords" content="keyword">
        <meta name="Lisa's Chicken" content="Lisas Chicken homepage.">
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
                <div class="featured">
                    <div class="col-lg-12 ">
                        <h2>Time To Dig In</h2>  
                        <p><?php echo $message; ?></p>
                    </div>
                    
                </div>
                <div class ="home-lists">
                    <div class="col-lg-12">
                    <p><a href="menu.php" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">Menu</a></p>
                    <p><a href="https://www.doordash.com/store/lisa's-chicken-arlington-46816/" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">Order Online</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="featured">
                    <div class="col-lg-12 ">
                        <h2><?php echo $promo; ?></h2>  
                    </div>
                    <div class="col-lg-12 ">
                        <img src="<?php echo $img; ?>">
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <div class="container-fluid"> <!-- HERO COMPONENT -->
        <div class="row">
            <div class="hero-img-2">
                <div class="hero-txt" id="hero-txt-2">
                    <h1>Family First</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">  
            <div class="col-lg-12">
                <div class="featured">
                    <div class="col-lg-12">
                    <h2>Family Values Are Our Values</h2>
                    </div> 
                    <div class="col-md-8 col-lg-9">
                        <p>At Lisa's Chicken we are commited to providing the highest quality, freshest chicken to you and your family all at an affordable cost! We are committed to those values and will stop at nothing to make sure that while you are eating as Lisa's chicken you feel just as comfortable as you do at home. So the next time you have a long day we'll bring you the homestyle meal you've been looking for! </p>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <img src="img/satisfaction.png" alt="satisfaction gaurntee">
                    </div>
                </div> 
            </div>
        </div> 
    </div>
    <div class="container">
        <div class="row">  
            <div class="col-lg-12">
                <div class="contact-form">
                <form method="GET" autocomplete="off">
                    <fieldset>
                        <legend>Sign up for promotional content</legend>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="user@domain.com" required>
                            <button type="submit" class="btn btn-primary" id="submit" name="Submit">Submit</button>
                        </div>
                        
                        <div>
                            <?php
                             $email = $_GET['email']. " has been added to the promotional email list!";
                             echo $email;
                            ?>
                        </div>
                    </fieldset>
                    
                </form>
                </div>
            </div>
        </div> 
    </div>
    <br>
    <?php echo $footer ?>
    <script src="js/app.js"></script>
</body>
</html>