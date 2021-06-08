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

<h2 style="margin-bottom: 10px; display: flex; justify-content: center;">Contact Me</h2>
<div class="form-contact">
    <form action="" method="post" style="display: flex; align-items: center; flex-direction: column;">
        <div>
            <div class="top-text">YOUR NAME*</div>
            <div>
                <input class="my-form form-dimension-small" name="first_name" type="text" placeholder="First name..." required minlenght="3" maxlength="12">
                <input class="my-form form-dimension-small" name="last_name" type="text" placeholder="Surname..." required minlenght="3" maxlength="12">
            </div>
        </div>
        <div>
            <div class="top-text space-top">EMAIL ADDRESS*</div>
            <div>
                <input class="my-form form-dimension-large" name="email" type="email" placeholder="Eg. example@email.com" required>
            </div>
        </div>
        <div>
            <div class="top-text space-top">PHONE NUMBER</div>
            <div>
                <input class="my-form form-dimension-large" name="phone_number" type="tel" placeholder="Eg. +33 3333333333">
            </div>
        </div>
        <div>
            <div class="top-text space-top">MESSAGE*</div>
            <textarea class="my-form form-dimension-large" name="message" cols="30" rows="10" placeholder="Please enter your comments…" minlenght="10" required></textarea>
        </div>
        <div style="display: flex; align-items: center">
            <button class="space-top click-submit" type="submit" value="Submit" name="submit">
                Submit
                <img src="img/arrowRightWhite.svg" alt="Save icon" style="width: 32px; margin-left: 15px; "/>
            </button>
            <!--<input type="submit" class="space-top click-submit" value="Submit">
            <img class="arrow-image" src="img/arrowRight.svg" alt="arrow">-->
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
