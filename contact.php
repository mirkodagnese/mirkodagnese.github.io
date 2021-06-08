<?php
if(isset($_POST['submit'])){
    $to = "mirkoddesigner@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    # echo $to . ", " . $subject . ", " . $message . ", " . $headers . " ##### " . $from . ", " . $subject2 . ", " . $message2 . ", " . $headers2;
    echo '<script>console.log("Mail Sent. Thank you, we will contact you shortly.")</script>';
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mirko D'Agnese</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="css/myStyle.css" rel="stylesheet" type="text/css">
    <link href="css/mobile-myStyle.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
<!-- body code goes here -->

<!-- navbar code goes here -->

<?php include("custom-header.php"); ?>

<!-- form code goes here -->

<h2 class="h2-custom">Contact Me</h2>
<div class="form-contact">
    <form class="container-fluid" action="" method="post" style="display: flex; align-items: center; flex-direction: column;">
        <div class="col-md">
            <div class="row top-text">
                <div class="col-md"> YOUR NAME* </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <input class="my-form" name="first_name" type="text" placeholder="First name..." required minlength="3" maxlength="12">
                </div>
                <div class="col-md top-space">
                    <input class="my-form" name="last_name" type="text" placeholder="Last name..." required minlength="3" maxlength="12">
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="row top-text">
                <div class="col-md"> EMAIL ADDRESS* </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <input class="my-form" name="email" type="email" placeholder="Eg. example@email.com" required>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="row top-text">
                <div class="col-md"> PHONE NUMBER </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <input class="my-form" name="phone_number" type="tel" placeholder="Eg. +33 3333333333">
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="row top-text">
                <div class="col-md"> MESSAGE* </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <textarea class="my-form" name="message" cols="30" rows="10" placeholder="Please enter your comments…" minlength="10" required></textarea>
                </div>
            </div>
        </div>
        <div style="display: flex; align-items: center">
            <button class="click-submit" type="submit" value="Submit" name="submit"> Submit </button>
        </div>
    </form>
</div>

<!-- footer code goes here -->

<?php include("custom-footer.php"); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.4.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
