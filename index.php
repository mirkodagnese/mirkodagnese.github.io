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

<!-- presentation code goes here -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h1 class="h1-custom">Hi, I’m Mirko.<br>
                Graphic & Web<br>
                Designer living<br>
                in Naples, Italy.</h1>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row" style="margin-top: 25px">
        <a href="about.php" style="text-decoration: none; color: black">
            <div class="col-md" style="display: flex; align-items: baseline; margin-bottom: 0.5rem">
                <p style="float: left; margin-bottom: 0">ABOUT ME</p>
                <div class="arrow-container">
                    <img class="arrow-image" style="width: 30px" src="img/arrowRight.svg" alt="arrow">
                </div>
            </div>
        </a>
    </div>
</div>
<div class="container-fluid social-icons">
    <div class="row" style="margin-top:30px">
        <div class="col">
            <div class="social-container"> <a class="behance-image" href="https://www.behance.net/mirkodagnese" target="_blank"></a></div>
            <div class="social-container"> <a class="dribble-image" href="https://www.dribbble.com/mirkodagnese" target="_blank"></a></div>
            <div class="social-container"> <a class="linkedin-image" href="https://www.linkedin.com/in/mirkodagnese" target="_blank"></a></div>
            <div class="social-container"> <a class="instagram-image" href="https://www.instagram.com/mirkodagnese" target="_blank"></a></div>
        </div>
    </div>
</div>

<!-- projects code goes here -->
<?php include("products-list.php"); ?>

<!-- anchor-point code goes here -->

<?php include("anchor-point.php"); ?>

<!-- footer code goes here -->

<?php include("custom-footer.php"); ?>

<script>
    const yPos = document.querySelectorAll('div.project-cell')[0].getBoundingClientRect().y;
    const innerH = window.innerHeight;

    if (yPos >= innerH) {
        document.getElementById("myLogo").style.marginBottom = parseFloat(document.getElementById("myLogo").style.marginBottom) + (yPos - innerH) + "px";
        document.getElementById("social-icons").style.marginBottom = parseFloat(document.getElementById("myLogo").style.marginBottom) + (yPos - innerH) + "px";
    }

</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.4.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
