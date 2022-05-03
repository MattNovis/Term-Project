<?php
include ('shared.php');

$firstName = $_POST["first-name"];
$lastName = $_POST["last-name"];
$email = $_POST["email"];
$phoneNumber = $_POST["phone-number"];
$reason = $_POST["reason"];
$message = $_POST["message"];
$output = "Your contact information was received successfully."
?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <meta name="keywords" content="keyword">
        <meta name="description" content="About page contaning skills for Matthew Novis.">
        <meta name="Matthew Novis" content="About Matthew Novis Page">
    <title>Form</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/4981312403.js" crossorigin="anonymous"></script>
</HEAD>

<BODY>
    <?php echo $header ?>

<div class="container">
    <?php echo $output ?>
</div>
	

    <script src="js/app.js"></script>
    <?php echo $footer ?>


</BODY>
</HTML>