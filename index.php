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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
<!-- body code goes here -->

<!-- navbar code goes here -->

<?php include("custom-header.php"); ?>

<!-- presentation code goes here -->

<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1>Hi, I’m Mirko.<br>
                Graphic & Web<br>
                Designer living<br>
                in Naples, Italy.</h1>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row" style="margin-top:30px">
        <div class="col-12">
            <p style="float: left">ABOUT ME</p>
            <div class="arrow-container"> <img class="arrow-image" src="img/arrowRight.svg" alt="arrow"> </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-bottom: 45px">
    <div class="row" style="margin-top:30px">
        <div class="col-12">
            <div class="social-container"> <a class="behance-image" href=""></a></div>
            <div class="social-container"> <a class="dribble-image" href=""></a></div>
            <div class="social-container"> <a class="linkedin-image" href=""></a></div>
            <div class="social-container"> <a class="instagram-image" href=""></a></div>
        </div>
    </div>
</div>

<!-- projects code goes here -->

<!-- TODO: MIRKO AGGIUNGI STATO DI HOVER ALL'ELEMENTO QUI SOTTO
           PS: NON MODIFICARE I CAMPI {$title} {$shortDescription} {$thumbnail}
               QUESTO ELEMENTO SARÀ CANCELLATO UN VOLTA DEFINITO LO STILE
-->

<a href='product.php' style='text-decoration: none'>
    <div class='project-cell' style='margin-top: 120px'>
        <div class='row'>
            <div class='col-5'>
                <div style='vertical-align: middle'>
                    <h6 style='margin-top: 80px; color: black'>{$title}</h6>
                    <h5 style='color: black'>{$shortDescription}</h5>
                    <hr align='left' size='2' width='20%' style='background-color: #13022C'>
                    <p style='color: black'>VIEW PROJECT →</p>
                </div>
            </div>
            <div class='col-7 fill' style='height: 300px'> <img src='{$thumbnail}' alt='' style='object-position:0'> </div>
        </div>
    </div>
</a>

<?php include("products-list.php"); ?>

<!-- ancorpoint code goes here -->

<div class="project-cell">
    <a href="#myLogo" style="text-decoration: none">
        <div style="margin-top:65px; margin-bottom: 65px; display: flex; justify-content: center; align-items: center">
            <p style="color: black">Back to top</p>
            <div class="arrow-container"> <img class="arrow-image" src="img/arrowRight.svg" alt="arrow" style="transform: rotate(270deg)"> </div>
        </div>
    </a>
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
