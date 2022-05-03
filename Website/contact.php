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
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/4981312403.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php echo $header ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="contact-description">
                <h2>Questions?</h2>
                <p>Please call our phone number or use our form if you have any questions about our products and services</p>
                <h3>Lisa's Chicken</h3>
                <p>1601 W Division St Arlington, TX 76012-3821</p>
                <p>Phone Number:(817) 299-8901</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="contact-form">
                <form action="form.php" method="post" autocomplete="off">
                    <fieldset>
                        <legend>Personal Information</legend>
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" name="first-name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" id="last-name" name="last-name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="user@domain.com" required>
                            <small>Please use a valid email address</small>
                        </div>
                        <div class="form-group">
                            <label for="phone-number">Phone Number</label>
                            <input type="text" id="phone-number" name="phone-number" class="form-control">
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Reason for Contact</legend>
                        <div class="form-group">
                            <label for="reason">Reason</label>
                            <select id="reason" class="form-control" name="reason">
                                <option value="General">General</option>
                                <option value="Product Information">Product Information</option>
                                <option value="Sales">Sales</option>
                                <option value="Job Offer">Job Offer</option>
                                <option value="Other">Other (please explain in message)</option>
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label for="message">Message</label><br>
                            <textarea id="message" name="message" maxlength="250" class="form-control"></textarea>
                        </div>
                    </fieldset>

                    <button type="submit" class="btn btn-primary" id="submit" name="Submit">Submit Form</button>
                    <button type="reset" class="btn btn" id="reset"  name="Reset">Reset Form</button>
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