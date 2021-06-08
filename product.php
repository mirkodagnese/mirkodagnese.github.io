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

<!-- description product code goes here -->

<?php
$title = $_GET["title"];
$shortDescription = $_GET["shortDescription"];
$description = $_GET["description"];
$thumbnail = $_GET["thumbnail"];
$images = $_GET["images"];

echo "
<div class='description-product'>
    <h4>{$title}</h4>
    <h2>{$shortDescription}</h2>
    <hr align='left' size='2' width='20%' style='background-color: #13022C'>
    <p style='color: rgb(51, 51, 51)'>{$description}</p>
</div>

<div class='col-12 fill' style='padding-left: 250px; padding-right: 250px; justify-content: center; display: flex; flex-direction: column;'>";

$imagesList = explode("|", $images);

if (!empty($imagesList) && $images != null) {
    foreach ($imagesList as $img) {
        echo "<img src='{$img}' alt='' style='object-position:0 20%; aspect-ratio: 1400/800; margin-bottom: 65px'>";
    }
}

echo "</div>";

?>

<!--
 <div class="description-product" style="display: grid; margin-right: 250px; margin-left: 250px; margin-bottom: 100px">
    <h1>Logo & UI/UX App</h1>
    <hr align="left" size="2" width="20%" style="background-color: #13022C">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe necessitatibus quo, aliquam facilis. Sit beatae odit reiciendis doloremque impedit animi, minima quod ad, eius. Ullam impedit voluptatum atque necessitatibus tenetur?</p>
</div>

<div class="col-12 fill" style="padding-left: 250px; padding-right: 250px; justify-content: center; display: flex;">
    <img src="img/placeholder.png" alt="" style="object-position:0 20%; aspect-ratio: 1400/800;">
</div>
-->

<!-- ancorpoint code goes here -->

<?php include("anchor-point.php"); ?>

<!-- footer code goes here -->

<?php include("custom-footer.php"); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.4.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
